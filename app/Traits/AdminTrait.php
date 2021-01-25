<?php

namespace App\Traits;

trait AdminTrait {
    // uplode images
    function uploadImage($photo , $path){
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time().".".$file_extension;
        $photo->move($path,$file_name);
        return $file_name;
    }
}


