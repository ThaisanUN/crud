@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>List Books</h3> 
        </div> 
        <div class="col-sm-2">
        <a href="{{route('book.create')}}" class="btn btn-sm btn-success">Create Book</a>
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
            <th width = '300px'>Name Books</th>
            <th>Description</th>
            <th width = '180px'>Action</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td><b>{{++$i}}.</b></td>
                <td>{{$book->name_book}}</td>
                <td>{{$book->description}}</td>
                <td>
                    <form action="{{route('book.destroy',$book->id)}}" method="post">
                       <a href="{{route('book.show',$book->id)}}" class="btn btn-sm btn-success">Show</a>
                       <a href="{{route('book.edit',$book->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>


                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $books->links() !!}
</div>


@endsection