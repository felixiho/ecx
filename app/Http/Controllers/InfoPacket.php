<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InfoPacket extends Controller
{
    //]public function getDownload(Request $request,$id)
    public function getDownload()
    {
        $file= public_path(). "/storage/ECX_info_packet.pdf";  //path of your directory
        $headers = array(
            'Content-Type: application/pdf',
        );
            return response()->download($file, 'ECX_info_packet.pdf', $headers);
    }
}
