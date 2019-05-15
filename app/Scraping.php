<?php

namespace App;
use App\Restaurant;
use Google\Cloud\Translate\TranslateClient;
// require __DIR__ . '/vendor/autoload.php';

// $projectId = 'myproject-1557899865913';
// $translate = new TranslateClient([
//     'projectId' => $projectId
// ]);
// # The text to translate
// $text = 'こんにちは!';
// # The target language
// $target = 'en';
// # Translates some text into Russian
// $translation = $translate->translate($text, [
//     'target' => $target
// ]);
// $translation['text'];



class Scraping
{
    public static function velang_urls()
    {
        require_once 'simple_html_dom.php';
        // require 'Google_Translate.php';

        $links = array();
        $next_url = "https://tabelog.com/tokyo/A1304/A130401/R5172/rstLst/1/?sw=%E3%83%B4%E3%82%A3%E3%83%BC%E3%82%AC%E3%83%B3&sk=%E3%83%B4%E3%82%A3%E3%83%BC%E3%82%AC%E3%83%B3&LstRange=SD&srchTg=2&svd=20190513&svt=1900&svps=2";

        while (true)
        {
            $current_page = file_get_html($next_url);
            $elements = $current_page->find('.list-rst__rst-name-target');
            foreach ($elements as $element) {
                $links[] = $element->href;
            }
            $next_link = $current_page->find('.c-pagination__arrow--next');
            if (!$next_link) break;
            $next_url = $next_link[0]->href;
        }

        foreach ($links as $link) {
          Scraping::get_Restaurant($link);
        }
    }

    public static function get_Restaurant($link)
    {
        //translate
        // require_once 'GoogleTranslate.class.php';
        // require_once 'Google_Translate.php';
        // $gt = new Google_Translate();
        // $gt->translate("jp", "en", "");
        require_once('App/GoogleTranslate.class.php');
        /* Initialize the class translate class */
        $gt = new GoogleTranslate();
        $page = file_get_html($link);


        // require __DIR__ . '/vendor/autoload.php';
        $projectId = 'myproject-1557899865913';
        $translate = new TranslateClient([
            'projectId' => $projectId
        ]);
        # The target language
        $target = 'en';


        $td = $page->find('.rstinfo-table__table td');//table
        $table = array();
        foreach ($td as $tdt) {
            // $table[] = $tdt->plaintext;3
            // $table[] = $gt->translate("ja", "en", $tdt->plaintext);
            $translation = $translate->translate($tdt->plaintext, [
            'target' => $target
            ]);
            $table[] = $translation['text'];
        }
        foreach($table as $t){
            if(is_null($t)) $t="";
        }


        $images=$page->find('.p-main-photos__slider-image');//image
        $img_url = array();
        foreach ($images as $image ) {
            $img_url[] = $image->src;
        }

        if(count($img_url)<=10){
            $images=$page->find('.p-modal-image__image-photo');
            foreach ($images as $image ) {
                $img_url[] = $image->src;
            }
        }

        if(count($img_url)<=10){
            $images=$page->find('.rstdtl-top-postphoto__photo');
            foreach ($images as $image ) {
                $img_url[] = $image->href;
            }
        }
        while(count($img_url)<=10) $img_url[]="";


        

        $ct="";
        $cf="";
        $pct = array();
        $pcf = array();
        if(null !== $pct=$page->find('.pr-comment-title')){
            foreach ($pct as $tt) {
                $ct=$tt->plaintext;
            }
            // $pct = $page->find('.pr-comment-title')->plaintext;
            // if($pct == null) $ct = $page->find('.pr-comment-title')[0]->plaintext; //comment title
            // else $ct=$pct;
        }

        if(null !== $pcf=$page->find('.pr-comment__first')){
            foreach ($pcf as $f) {
                $cf.=$f->plaintext;
            }
            // $pcf = $page->find('.pr-comment__first')->plaintext;
            // if($pcf == null) $cf = $page->find('.pr-comment__first')[0]->plaintext; //comment first
            // else $cf=$pcf;
        }

        // $comet = $gt->translate("ja", "en", $ct);
        // $comef = $gt->translate("ja", "en", $cf);

        $ttranslation = $translate->translate($ct, [
            'target' => $target
            ]);
        $comet = $ttranslation['text'];

        $ftranslation = $translate->translate($cf, [
            'target' => $target
            ]);
        $comef = $ftranslation['text'];

        // if(is_null($comet)) $comet="";
        // if(is_null($comef)) $comef="";
        $restaurant = Restaurant::firstOrNew(array('store_name' => $table[0]));
        // if ($restaurant->wasRecentlyCreated) {
            // まだcreateされていないため、idなどのattributeにはアクセス出来ない
            // saveすることでcreateできる
            $restaurant->genre = $table[1];
            $restaurant->contact = $table[2];
            $restaurant->reservation_availability = $table[3];
            $restaurant->address = $table[4];
            $restaurant->access = $table[5];
            $restaurant->opening_hours = $table[6];
            $restaurant->regular_holiday = $table[7];
            $restaurant->budget = $table[8];
            $restaurant->budget_word_of_mouth = $table[9];
            $restaurant->payment = $table[10];
            $restaurant->image_url1 = $img_url[0];
            $restaurant->image_url2 = $img_url[1];
            $restaurant->image_url3 = $img_url[2];
            $restaurant->image_url4 = $img_url[3];
            $restaurant->image_url5 = $img_url[4];
            $restaurant->image_url6 = $img_url[5];
            $restaurant->image_url7 = $img_url[6];
            $restaurant->image_url8 = $img_url[7];
            $restaurant->image_url9 = $img_url[8];
            $restaurant->image_url10 = $img_url[9];
            $restaurant->comment_title = $comet;
            $restaurant->comment_first = $comef;
            $restaurant->tabelog = $link;
            $restaurant->save();
        // }    
    }
}

?>