<?php

namespace App\Http\Traits;

trait UplodeTrait {

    public function uploud($data) {
        $file_extention = $data->getClientOriginalExtension();
        $file_name = time().'.'.$file_extention;
        $path = 'upload';
        $data->move($path,$file_name);
        return $path . '/' . $file_name;
    }

}
