<?php

namespace App\Services;
use Illuminate\Http\Request;

class UploadService{

    public function uploadFile(Request $request)
    {

        $filename = $request->avatar->getClientOriginalName();
        $filename = str_replace(' ', '-', $filename);
        $filename = uniqid() . '-' . $filename;

        return $filename;
    }

    public function uploadIdentification(Request $request)
    {
            $filename = $request->identification->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;

           return $filename;

    }

    public function uploadIdentification_back(Request $request)
    {

            $filename = $request->identification_back->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;

            return $filename;
    }

    public function upload(Request $request)
    {
        $filename = $request->image->getClientOriginalName();
        $filename = str_replace(' ', '-', $filename);
        $filename = uniqid() . '-' . $filename;

        return $filename;
    }
}
