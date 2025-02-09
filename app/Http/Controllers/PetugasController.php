<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Petuga;

class PetugasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create()
	{
    	return view ('petugas.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',

        ]);
        // $query = DB::table('petugas')->insert([
        //     "nip" => $request["nip"],
        //     "nama" => $request["nama"],
        //     "jabatan" => $request["jabatan"]

        // ]);

        $petuga = Petuga::create([
            "nik"=> $request["nik"],
            "nama" => $request["nama"],
            "jabatan" => $request["jabatan"]
        ]);
        return redirect('/petugas');
    }
	public function index ()
    {
        // $petugas = DB::table('petugas')->get();
        $petugas = Petuga::all();
    	return view ('petugas.index' , compact('petugas'));
	}

	public function show($id)
    {
        // $petugas = DB::table('petugas')->where('id', $id)->first();
        $petugas = Petuga::find($id);
        return view('petugas.show', compact('petugas'));
	}

	public function edit($id)
    {
        // $petugas = DB::table('petugas')->where('id', $id)->first();
        $petugas = Petuga::find($id);
        return view('petugas.edit', compact('petugas'));
	}
	public function update($id, Request $request)
    {

        $update = Petuga::where('id', $id)->update([
            "nip" => $request["nip"],
            "nama" => $request["nama"],
            "jabatan" => $request["jabatan"]
    ]);
        return redirect('/petugas');
	}
	public function destroy($id)
    {
        // $query = DB::table('petugas')->where('id', $id)->delete();
        Petuga::destroy($id);
        return redirect('/petugas');
    }
}
