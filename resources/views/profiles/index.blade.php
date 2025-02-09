@extends('layouts.master')
@section('title', 'List Surat')
@push('style')
<link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('profiles.edit')}}" class="btn btn-primary mb-2">Ubah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Bidang</th>
                <th scope="col">alamat</th>
                <th scope="col">Pendidikan</th>         
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($stugas as $key => $value)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$value->full_name}}</td>
                        <td>{{$value->bidang}}</td>  
                        <td>{{$value->alamat}}</td>  
                        <td>{{$value->pendidikan}}</td>                   
                        <td>
                        <form action="/profiles/{{$value->id}}" method="POST">
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