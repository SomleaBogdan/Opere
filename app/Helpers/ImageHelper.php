<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ImageHelper 
{
    public static function saveImageFrom(Request $request, String $key, String $folder) 
    {
        $imageName = $key.Str::random().time().'.' .$request->file($key)->getClientOriginalExtension();
        $request->file($key)->move(base_path() . '/public/images/'.$folder, $imageName);
        return $imageName;
    }
}
?>