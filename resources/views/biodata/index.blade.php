@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>List Biodata Siswa</h3> 
        </div> 
        <div class="col-sm-2">
        <a href="{{route('biodata.create')}}" class="btn btn-sm btn-success">Create Biodata</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif
    <table class="table tabel-hover table-sm">
        <tr>
            <th width = '50px'>NO.</th>
            <th width = '300px'>Nama Siswa</th>
            <th>Alamat Siswa</th>
            <th width = '180px'>Action</th>
        </tr>
        @foreach ($biodatas as $biodata)
            <tr>
                <td><b>{{++$i}}.</b></td>
                <td>{{$biodata->namaSiswa}}</td>
                <td>{{$biodata->alamatSiswa}}</td>
                <td>
                    <form action="{{route('biodata.destroy',$biodata->id)}}" method="post">
                       <a href="{{route('biodata.show',$biodata->id)}}" class="btn btn-sm btn-success">Show</a>
                       <a href="{{route('biodata.edit',$biodata->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>


                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $biodatas->links() !!}
</div>


@endsection