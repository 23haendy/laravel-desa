@extends('layouts.master')
@section('title', 'Tambah Masyarakat')

@section('content')
	<div class= "ml-3 mt-3">
        <form action="/sipil" method="POST">
            @csrf
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIP">
                @error('nik')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary" id="btnresult">Submit</button>
            <script src="{{ asset('public/sbadmin2/js/swal.min.js')}}"></script>

        </form>
    </div>

@endsection
