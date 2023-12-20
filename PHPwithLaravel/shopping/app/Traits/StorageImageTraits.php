<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait StorageImageTraits{
    public function storageTraiUpload($request, $fieldName, $foderName){
        if($request->hasFile($fieldName)){
            $file = $request->$fieldName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $filepath = $request->file($fieldName)->storeAs('public/product/'. $foderName . '/' .auth()->id(),$fileNameHash);
            $dataUpload =[
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filepath)
            ];
            return $dataUpload;
        }
        return null;
    }

    public function storageTraiUploadMutiple($file, $foderName){
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $filepath = $file->storeAs('public/product/'. $foderName . '/' .auth()->id(),$fileNameHash);
            $dataUpload =[
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filepath)
            ];
            return $dataUpload;
    }
}
