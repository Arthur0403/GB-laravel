<?php declare(strict_types=1);


namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileUploadService
{
//ToDo подключить через сервис провайдер
    public function upload(Request $request): ?string
    {
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
//            dd($file);
            $originalExt = $file->getClientOriginalExtension();
            $fileName = Str::random(10) . "." . $originalExt;
            $fileUploaded = $file->storeAs('/news', $fileName, 'public');
            if($fileUploaded === false)
            {
                throw new \Exception("File upload errors");
            }
            return $fileUploaded;
        }

        throw new \Exception("File upload errors");
    }
}
