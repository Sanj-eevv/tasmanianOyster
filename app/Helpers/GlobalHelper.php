<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\NoReturn;

if (!function_exists('p')) {
     function p($r) : void
     {
          echo '<pre>';
          print_r($r);
          echo '</pre>';
     }
}

if (!function_exists('pe')) {
     #[NoReturn] function pe($r)
     {
          echo '<pre>';
          print_r($r);
          echo '</pre>';
          exit();
     }
}


if (!function_exists('current_page')) {
     function current_page($active = '/') : bool
     {
          $current = request()->segment(2);
          if(is_array($active)){
               foreach($active as $av){
                    if(!strcasecmp($current,$av)){
                         return true;
                    }
               }
          }else{
               return !strcasecmp($current, $active);
          }
          return false;
     }
}
if (!function_exists('renameImageFileUpload'))
{
     function renameImageFileUpload(UploadedFile $file) : string
     {
          $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
          return Str::of($imageName)->slug('_').'_'.uniqid().'.'.$file->extension();
     }
}

if (! function_exists('format_date')) {
     function format_date($date, $format = 'm-d-Y', $returnToday = false) : ?string
     {
          if(empty($date)){
               if($returnToday){
                    return date($format);
               }
               return null;
          }
          return date($format, strtotime($date));
     }
}

