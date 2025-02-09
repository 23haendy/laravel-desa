@extends('layouts.master')
@section('title', 'Edit Sivitas')

@section('content')
	<div class= "ml-3 mt-3">
  <form action="/sivitas/{{$sivitas->id}}" method="POST">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" value="{{$sivitas->nik}}" >
                @error('nik')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{$sivitas->nama}}" >
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
  </div>


@endsection
