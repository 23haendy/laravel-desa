@extends('layouts.master')
@section('title', 'Edit Surat')

@section('content')
	<div class= "ml-3 mt-3">
  <form action="/suket/{{$suket->id}}" method="POST">
            @csrf
            @method('put')
                    <div class="form-group">
                        <label for="nama_kegiatan">Nama Kegiatan</label>
                        <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan"  value="{{$stugas->nama_kegiatan}}"  placeholder="Masukkan Kegiatan">
                        @error('nama_kegiatan')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal dimulai</label>
                            <div class="input-group date">
                            <div class="input-group-addon"> </div>
                            <input type="date" name="tanggal_dimulai" id="tanggal_dimulai" value="{{$stugas->tanggal_dimulai}}" class="form-control pull-right" >
                            </div>
                                @error('tanggal_dimulai')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                            <div class="input-group date">
                            <div class="input-group-addon"> </div>
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai"  value="{{$stugas->tanggal_selesai}}" class="form-control pull-right" >
                            </div>
                                @error('tanggal_selesai')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                    <div class="form-group">
                    <label for="petugas_id">ttd</label>
                    <select name="petugas_id" class="form-control" required>
                        <option value="" selected disabled>- pilih -</option>
                        @foreach ( $petugas as $item )
                        <option value="{{ $item->id }}" {{ old('petugas_id')==$item->id ? 'selected' : null }}>{{ $item->nama }}-{{ $item->nik }}-{{ $item->jabatan }}
                        </option>
                        @endforeach
                    @error('ttd')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </select>
        </div>

                    <div class="form-group">
                        <div class="form-group">
                        <label>Warga</label>
                        <select name="sipil_id" class="form-control" required>
                            <option value="" selected disabled>- pilih -</option>
                            @foreach ( $sipil as $item )
                            <option value="{{ $item->id }}" {{ old('sipil_id')==$item->id ? 'selected' : null }}>{{ $item->nama }}-{{ $item->nik }}
                            </option>
                            @endforeach
                        </div>
                        </select>
                    </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
  </div>


@endsection
