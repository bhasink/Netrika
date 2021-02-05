<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\WhitePaper;

class WhitePaperLeads extends Model
{
    //


    public function whitepaper($id){

        $get_white_papers = WhitePaper::where('id',$id)->first();
        return (string)$get_white_papers->title;
    }
}
