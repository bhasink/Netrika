<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ServiceCategory;
use App\Team;


class Service extends Model
{
    public function service_category()
    {
        return $this->hasOne(ServiceCategory::class,'id','service_category_id');
    }

    public function get_expert(){

        $exp_data = array();

        $get_exp = explode(',',$this->experts_user_id);

        Team::whereIn('id',$get_exp)->get();

        $exp_data['exp_data'] = $get_exp;

       return $exp_data;
    }

    public function get_all_expert(){

        $get_all_exp = Team::all();
        return $get_all_exp;
    }

    public function get_all_service_category(){

        $get_all_service_category = ServiceCategory::all();
        return $get_all_service_category;
    }
}
