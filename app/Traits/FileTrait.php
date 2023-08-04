<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

trait FileTrait
{
    
    protected function fileUpload($filenamext,$pathxt)
    {
        global $request;
         if($request->hasFile($filenamext))
        {
            $filenameWithExt = $request->file($filenamext)->getClientOriginalName();
            //get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get Extsion();
            $extension = $request->file($filenamext)->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file($filenamext)->storeAs($pathxt, $fileNameToStore);
        }else
        {
            $fileNameToStore = 'noimage.jpg';
        }
        return  $fileNameToStore;
    }

}
