@extends('layouts.master')
@section('title', 'List Surat')
@push('style')
<link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('suket.create')}}" class="btn btn-primary mb-2">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">tanggal mulai</th>
                <th scope="col">tanggal selesai</th>
                <th scope="col">ttd</th>
                <th scope="col">Warga</th>
                <th scope="col" >Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($suket as $key => $value)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$value->nama_kegiatan}}</td>
                        <td>{{$value->tanggal_dimulai}}</td>
                        <td>{{$value->tanggal_selesai}}</td>
                        <td>{{$value->petugas_id}}</td>
                        <td>{{$value->sipil_id}}</td>
                        <td>
                        <form action="/suket/{{$value->id}}" method="POST">
                            <a href="/suket/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/suket/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div>
    <div>
<div>

        @push('script')
        <script src="{{ asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
            <script>
                $(function () {
                $('#example1').datatables()

            })
            </script>
        @endpush
@endsection
