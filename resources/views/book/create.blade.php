@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>New Book</h3>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!!</strong>There where some problems with your input. <br>
        <ul>
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('book.store')}}" method="post">
    @csrf
        <div class="row">
            <div class="col-md-12">
                <strong>Nama Siswa :</strong>
                <input type="text" name="name_book" id="" class="form-control" placeholder="name of book">
            </div>
            <div class="col-md-12">
                <strong>Alamat Siswa :</strong>
               <textarea name="description" id="" cols="80" rows="8" class="form-control" placeholder="decription"></textarea>
            </div>

            <div class="col-md-12">
                <a href="{{route('book.index')}}" class="btn btn-sm btn-success">Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection