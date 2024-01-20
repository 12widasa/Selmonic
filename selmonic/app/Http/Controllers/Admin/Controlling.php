<?php

namespace App\Http\Controllers\Admin;

use App\Models\API_control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Controlling extends Controller
{
    public function showPage()
    {
        $api = API_control::find(1);
        $relay1 = $api->relay1;
        $relay3 = $api->relay3;
        $relay4 = $api->relay4;
        $data = [
            "relay1" => $relay1,
            "relay3" => $relay3,
            "relay4" => $relay4
        ];
        return view('pages.admin.controlling.index', $data); // Ganti 'admin.page' dengan nama tampilan (view) yang ingin Anda tampilkan
    }
}
