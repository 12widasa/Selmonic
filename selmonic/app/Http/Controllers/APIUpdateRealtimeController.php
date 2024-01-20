<?php

namespace App\Http\Controllers;

use App\Models\API_update_realtime;
use Illuminate\Http\Request;

class APIUpdateRealtimeController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\API_update_realtime  $aPI_update_realtime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Melakukan validasi data input
        $request->validate([
            'ph' => 'required|numeric',
            'suhu_air' => 'required|numeric',
            'tds' => 'required|numeric',
            'tinggi_air' => 'required|numeric',
            'keterangan' => 'required|string',
        ]);

        // Mengambil data dengan ID 1
        $aPI_update_realtime = API_update_realtime::find(1);

        if (!$aPI_update_realtime) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        // Menangkap data dari request dan melakukan update data
        $aPI_update_realtime->update($request->all());

        return response()->json($aPI_update_realtime, 200);
    }

    public function show()
    {
        // Mengambil data dengan ID 1
        $aPI_update_realtime = API_update_realtime::find(1);

        if (!$aPI_update_realtime) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($aPI_update_realtime, 200);
    }

    public function index()
    {
        // Mengambil data dengan ID 1
        $data = API_update_realtime::find(1);

        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }
}
