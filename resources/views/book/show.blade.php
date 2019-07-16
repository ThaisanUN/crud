@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Detail Show</h3>
            <hr>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
            <div class="form-group">
                <strong>Name Books : </strong> {{$book->name_book}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description : </strong> {{$book->description}}
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{route('book.index')}}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
</div>
@endsection