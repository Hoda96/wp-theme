<?php


class Asset
{
    public static function css ($file_name){
        $file_url = get_template_directory_uri().'/asset/css/'.$file_name;
        var_dump($file_url);
        return $file_url;
    }

    public static function js($file_name)
    {
        
}

    public static function image($file_name){

    }


}