<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CareerDepartment;
use App\CareerPos;
use App\CareerLocation;

class Career extends Model
{
    public function career_department()
    {
        return $this->hasOne(CareerDepartment::class,'id','career_department_id');
    }

    public function career_pos()
    {
        return $this->hasOne(CareerPos::class,'id','career_department_id');
    }

//    public function career_location()
//    {
//        return $this->hasOne(CareerLocation::class,'id','career_department_id');
//    }

    public function career_location(){

        $exp_data = array();

        $get_career_department_id = explode(',',$this->career_location_id);

        $get_career_department = CareerLocation::whereIn('id',$get_career_department_id)->get();


        $exp_data['exp_career_department'] = $get_career_department;

        return $exp_data;
    }


    public function get_all_career_department(){

        $get_all_CareerDepartment = CareerDepartment::all();
        return $get_all_CareerDepartment;
    }



    public function get_all_career_position(){

        $get_all_CareerPos = CareerPos::all();
        return $get_all_CareerPos;
    }

    public function get_all_career_location(){

        $get_all_CareerLocation = CareerLocation::all();
        return $get_all_CareerLocation;
    }


    public function get_location(){

        $exp_data = array();

        $get_career_location_id = explode(',',$this->career_location_id);

        CareerLocation::whereIn('id',$get_career_location_id)->get();

        $exp_data['get_career_location_id'] = $get_career_location_id;

        return $exp_data;
    }

}

