<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Sipil;


class SipilController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function create()
	{
    	return view ('sipil.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:sipil',
            'nama' => 'required',

        ]);


        $sipil = Sipil::create([
            "nik"=> $request["nik"],
            "nama" => $request["nama"]

        ]);
        Alert::success('Berhasil', 'Berhasil Menambahkan Masyarakat ');
        return redirect('/sipil');
    }
	public function index ()
    {
        $sipil = Sipil::all();
    	return view ('sipil.index' , compact('sipil'));
	}

	public function show($id)
    {
        //$sivitas = DB::table('sivitas')->where('id', $id)->first();
        $sipil = Sipil::find($id);
        return view('sipil.show', compact('sipil'));
	}

	public function edit($id)
    {
        // $sivitas = DB::table('sivitas')->where('id', $id)->first();
        $sivitas = Sipil::find($id);
        return view('sipil.edit', compact('sipil'));
	}
	public function update($id, Request $request)
    {

        $update = Sipil::where('id', $id)->update([
                "nik" => $request["nik"],
                "nama" => $request["nama"]
        ]);
        return redirect('/sipil');
	}
	public function destroy($id)
    {
        // $query = DB::table('sivitas')->where('id', $id)->delete();
        Sipil::destroy($id);
        return redirect('/sipil');
    }

}
