<?php
namespace App\Helpers;

use Illuminate\Http\Request;
use App\CMS;
use View;

class AppHelper
{


    public $meta_title;
    public $meta_description;
    public $meta_keywords;


    public static function bladeHelper()
    {
        $data_metas = array();

        $url =  request()->path();

        $get_cms = CMS::where('site_url','/'.$url)->first();

        if ($get_cms != null){

            $data_metas['meta_title'] = $get_cms->meta_title;
            $data_metas['meta_description'] = $get_cms->meta_description;
            $data_metas['meta_keywords'] = $get_cms->meta_keywords;

        }else{

            $data_metas['meta_title'] = 'Netrika | Global Leader in Security and Risk Management Services';
            $data_metas['meta_description'] = 'Leading  corporate security and risk consulting firm advising corporates in managing strategic and operational risks.';
            $data_metas['meta_keywords'] = '';

        }

        return $data_metas;
    }

}




