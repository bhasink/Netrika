<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\WhitePaper;

class ServiceCategory extends Model
{
    public function get_whitepaper(){

        $exp_data = array();

        $get_white_paper_id = explode(',',$this->white_paper_id);

        WhitePaper::whereIn('id',$get_white_paper_id)->get();

        $exp_data['white_paper_id'] = $get_white_paper_id;

        return $exp_data;
    }

    public function get_all_white_paper(){

        $get_all_white_paper = WhitePaper::all();
        return $get_all_white_paper;
    }
}
