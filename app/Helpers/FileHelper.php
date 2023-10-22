<?php

namespace App\Helpers;

class FileHelper
{
    /**
     * store
     *
     * @param  mixed $file
     * @param  string $folder
     * @return string
     */
    public static function store(mixed $file, string $folder): string
    {
        $fileName = time() . $file->getClientOriginalName();

        $imagePath =  $file->storeAs(date('Y') . '/' . date('m') . '/' . $folder, $fileName);
        return 'uploads/' . $imagePath;
    }
}
