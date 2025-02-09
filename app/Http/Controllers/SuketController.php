<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use DB;
use App\Suket;
use App\Petuga;
use App\Sipil;
use PDF;


class SuketController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create()
	{
        $petugas = Petuga::all();
        $sipil = Sipil::all();
    	return view ('suket.create', compact( 'petugas', 'sipil'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|unique:suket',
            'tanggal_dimulai' => 'required',
            'tanggal_selesai' => 'required',
            'petugas_id' => 'required',
            'sipil_id' => 'required',

        ]);
        // $query = DB::table('suket')->insert([
        //     "nama_kegiatan" => $request["nama_kegiatan"],
        //     "tanggal_dimulai" => $request["tanggal_dimulai"],
        //     "tanggal_selesai" => $request["tanggal_selesai"],
        //     "ttd" => $request["ttd"]
        // ]);

        $suket = Suket::create([
            "nama_kegiatan"=> $request["nama_kegiatan"],
            "tanggal_dimulai" => $request["tanggal_dimulai"],
            "tanggal_selesai" => $request["tanggal_selesai"],
            "petugas_id" => $request["petugas_id"],
            "sipil_id" => $request["sipil_id"]


        ]);

        Alert::success('Berhasil', 'Berhasil Menambahkan Surat Baru');

        return redirect('/suket');
    }
	public function index ()
    {
        // $suket = DB::table('suket')->get();
        $suket = Suket::all();
        $petugas = Petuga::all();
        $sipil = Sipil::all();


    	return view ('suket.index' , compact('suket', 'petugas', 'sipil'));
	}

	public function show($id)
    {
        // $suket = DB::table('suket')->where('id', $id)->first();
        $stugas = Suket::find($id);
        $suket = Suket::findorfail($id);
        $petugas = Petuga::all();
        $sipil = Sipil:: all();
        return view('suket.show', compact('suket', 'petugas', 'sipil'));
	}

	public function edit($id)
    {
        // $suket = DB::table('suket')->where('id', $id)->first();
        $petugas = Petuga::all();
        $sipil = Sipil:: all();
        $suket = Suket::find($id);
        return view('suket.edit', compact('suket', 'petugas', 'sipil' ));
	}
	public function update($id, Request $request)
    {

        $update = Suket::where('id' , $id)->update([
                "nama_kegiatan" => $request["nama_kegiatan"],
                "tanggal_dimulai" => $request["tanggal_dimulai"],
                "tanggal_selesai" => $request["tanggal_selesai"],
                "petugas_id" => $request["petugas_id"],
                "sipil_id" => $request["sipil_id"]


        ]);
        return redirect('/suket');
	}
	public function destroy($id)
    {
        // $query = DB::table('suket')->where('id', $id)->delete();
        $petugas = Petuga::all();
        $sipil = Sipil:: all();
        Suket::destroy($id);
        return redirect('/suket');
    }


}
