<?php
namespace app\Traits;

use Illuminate\Support\Facades\Storage;

trait StorageImageTrait{
    public function storageTraitUpload($request, $fieldname, $folderName)
    {
        if($request->hasFile($fieldname)) {
            $file = $request->$fieldname;
            $filenameOrigin = $file->getClientOriginalName();
            $filenameHash = str_random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($fieldname)->storeAs('public/' . $folderName . '/' . auth()->id(), $filenameHash);
            $dataUploadTrait = [
                'file_name' => $filenameOrigin,
                'file_path' => Storage::url($filePath)
            ];
            return $dataUploadTrait;
        }else {
            return null;
        }
    }

    public function storageTraitUploadMultiple($file, $folderName)
    {
            $filenameOrigin = $file->getClientOriginalName();
            $filenameHash = str_random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('public/' . $folderName . '/' . auth()->id(), $filenameHash);
            $dataUploadTrait = [
                'file_name' => $filenameOrigin,
                'file_path' => Storage::url($filePath)
            ];
            return $dataUploadTrait;
    }
}
