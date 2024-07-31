<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ikan;

class IkanController extends Controller
{
    public function index(){
        $ikans = ikan::all();

        $data =[
            "ikans" => $ikans
        ];

        return view("ikan.index", $data);
    }

    public function destroy($id){
        $ikan = ikan::where("id",$id)->first();
        $ikan->delete();

        return redirect("/ikan");
    }

    public function create(){
        return view("ikan.tambah");
    }

    public function store(request $request){
        $nama = $request->nama;
        $asal = $request->asal;
        $karakteristik = $request->karakteristik;

        // ikan::create([
        //     "nama" => $nama,
        //     "asal" => $asal,
        //     "karakteristik" => $karakteristik,
        // ]);

        $dataikan = new ikan();
        $dataikan->nama = $nama;
        $dataikan->asal = $asal;
        $dataikan->karakteristik = $karakteristik;
        $dataikan->save();

        return redirect("/ikan");
    }

    public function edit($id){
        $ikan = ikan::where("id", $id)->first();

        $data = [
            "ikan" => $ikan
        ];

        return view("ikan.edit", $data);
    }

    public function update(request $request, $id){
        $nama = $request->nama;
        $asal = $request->asal;
        $karakteristik = $request->karakteristik;

        ikan::where("id", $id)->update([
            "nama" => $nama,
            "asal" => $asal,
            "karakteristik" => $karakteristik,
        ]);

        // $editmerk = merk::where("id", $id)->first();
        // $editmerk->nama = $nama;
        // $editmerk->keterangan = $keterangan;
        // $editmerk->save();

        return redirect("/ikan");
    }
}
