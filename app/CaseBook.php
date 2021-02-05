<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ServiceCategory;

class CaseBook extends Model
{

    public function servicecat()
    {
        return $this->belongsTo('\App\ServiceCategory','service_category_id');
    }

    public function servicecat_all()
    {
        $s_id = $this->pluck('service_category_id');

        $service_cat = ServiceCategory::whereIn('id', $s_id)
                                    ->get();

        return $service_cat;
    }

    public function get_s_cat_name(){

        $service_cat = ServiceCategory::where('id', $this->service_category_id)
            ->pluck('name');

        return $service_cat[0];
    }

    public function get_all_service_category(){

        $get_all_service_category = ServiceCategory::all();
        return $get_all_service_category;
    }

}
