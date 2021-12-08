<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Paket;
use App\Models\Models\Kurir;

class ControllerKaryawan extends Controller
{

//Paket
    public function dataPaket(){

        $data  = [
            "data_paket" => Paket::orderBy("nama_paket", "DESC")->get()
        ];

        return view("/admin/data-paket", $data);
    }

    public function addPaket(){

        return view("/admin/add-paket");

    }

    public function addPaketprocess(Request $req){
        
        Paket::create($req->all());

        return redirect("/dataPaket")->with("Data Berhasil Ditambahkan");
    }

    public function deletePaket(Request $req){
        Paket::where("id_paket", $req->id_paket)->delete();

        return redirect("/dataPaket")->with("Data Berhasil Dihapus");
    }

    public function editPaketprocess(Request $req){
        Paket::where("id_paket", $req->id_paket)->update([
            "nama_paket" => $req->nama_paket,
            "detail" => $req->detail,
            "harga" => $req->harga
        ]);

        return redirect("/dataPaket")->with("Data Berhasil Diubah");    
    }

    public function editPaket($id_paket){
        $data = [
            "edit" => Paket::where("id_paket", $id_paket)->first(),
            "edit_paket" => Paket::where("id_paket", "!=", $id_paket)->get()
        ];

        return view("admin/edit-paket", $data);
    }

    //Kurir

    public function dataKurir(){

        $data = [
            "data_kurir" => Kurir::orderBy("nama_kurir", "ASC")->get()
        ];

        return view("/admin/dataKurir", $data);
    }

  

}
