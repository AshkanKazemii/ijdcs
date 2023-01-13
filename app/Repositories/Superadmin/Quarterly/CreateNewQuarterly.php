<?php

namespace App\Repositories\Superadmin\Quarterly;

use App\Models\Quarterly;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class CreateNewQuarterly 
{

    public function __invoke($request)
    {
        $file_name = $this->uploadImage($request) ;  
        $image_exists = $this->existsImageFile($file_name) ;

        return ($image_exists) ? Quarterly::create([
            "name" => $request->name,
            "image" => $file_name ,
        ]) : false;
    }

    private function getYear()
    {
        return jdate(Carbon::now())->format("Y");
    }

    private function uploadImage($request)
    {
        return $request->file("file")->store("quarterly/{$this->getYear()}");
    }

    private function existsImageFile($image_name)
    {
        return (File::exists(public_path() . "/{$image_name}")) ? true : false ;
    }
}
