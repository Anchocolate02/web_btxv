<?php

use App\Models\Category;
use App\Models\Danhmuc;

    function getDanhmuc($danhmuccha) {
     
        $danhmuc = Category::where('parent_id', $danhmuccha)->where('hienthi', '=', 1)->orderBy('thutu','asc')->get();     
        $datas = array();
        foreach ($danhmuc as $dm){
            $t = array();
            $t['id'] = $dm->id;
            $t['label'] = $dm->name;
            $t['slug'] = $dm->slug; 
            $t['language'] = $dm->language; 
            $t['loaidanhmuc_id'] = $dm->loaidanhmuc_id;
            $t['parent_id'] = $dm->parent_id;
            $t['children'] = [];
            $t['kiemtra'] = 0;
      
            $dem = Category::where('parent_id', $dm->id)->count();
            if ( $dem>0){
                $t['children'] = getDanhmuc($dm->id);
                $t['kiemtra'] = 1;
            }
            array_push($datas, $t,);
        }
        return $datas;
    }

    


    
