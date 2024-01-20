<?php

namespace App\Http\Controllers;

use App\Models\API_control;
use App\Models\API_update_realtime;
use Illuminate\Http\Request;

class APIControlController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiControl = API_control::find(1);
        // dd($apiControl);
        if (!$apiControl) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json([
            'relay1' => $apiControl->relay1,
            'relay3' => $apiControl->relay3,
            'relay4' => $apiControl->relay4,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\API_control  $aPI_control
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'relay1' => 'required|integer',
        //     'relay3' => 'required|integer',
        //     'relay4' => 'required|integer',
        // ]);

        $apiControl = API_control::find(1);

        if (!$apiControl) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $relay1 = $request->input("relay1");
        $relay3 = $request->input("relay3");
        $relay4 = $request->input("relay4");
        // $apiControl->update($request->all());
        if (isset($relay1)) {
            $apiControl->relay1 = $relay1;
            // return response()->json(["message" => "Data berhasil di update"], 200);
        }
        if (isset($relay3)) {
            $apiControl->relay3 = $relay3;
        }
        if (isset($relay4)) {
            $apiControl->relay4 = $relay4;
        }
        $apiControl->save();
        return response()->json(['message' => 'Data updated successfully', 'data' => $apiControl], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\API_control  $aPI_control
     * @return \Illuminate\Http\Response
     */
    public function show(API_control $aPI_control)
    {
        return response()->json($aPI_control, 200);
    }

    public function relay(Request $request, $relay)
    {
        $data = API_control::find(1);
        if ($relay == "relay1") {
            return $data->relay1;
        } else if ($relay == "relay3") {
            return $data->relay3;
        } else if ($relay == "relay4") {
            return $data->relay4;
        }
    }

    public function updateSensor(Request $request)
    {
        // return "masuk sini";
        $ph = $request->input("ph");
        $suhu_air = $request->input("suhu_air");
        $tds = $request->input("tds");
        $tinggi_air = $request->input("tinggi_air");
        $keterangan = $request->input("keterangan");

        $data = API_update_realtime::find(1);
        $data->ph = $ph;
        $data->suhu_air = $suhu_air;
        $data->tds = $tds;
        $data->tinggi_air = $tinggi_air;
        $data->keterangan = $keterangan;
        $data->save();
        return response()->json(["error" => false, "message" => "Data Berhasil di Update !"], 200);
    }
}
