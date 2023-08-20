<?php
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

function handleUpload($inputName, $model = null, $folderName = null)
{
    try {
        if (request()->hasFile($inputName)) {
            if ($model && File::exists(public_path($model->{ $inputName }))) {
                File::delete(public_path($model->{ $inputName }));
            }

            $file = request()->file($inputName);
            $originalName = $file->getClientOriginalName();
            $originalExtension = $file->getClientOriginalExtension();
            $explodeName = explode(".", $originalName)[0];
            $fileName = Str::slug($explodeName). "." . $originalExtension;

            $folder = $folderName;
            $publicPath = "storage/". $folder;

            $filePath = $publicPath . "/" . $fileName;

            $file->storeAs($folder, $fileName, 'public');

            return $filePath;
        }
    } catch (\Exception $error) {
        throw $error;
    }
}
