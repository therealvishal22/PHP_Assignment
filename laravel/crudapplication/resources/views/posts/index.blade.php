@extends('posts.layout')
 
@section('content')
@php 
    echo "<pre>";
        print_r($datanew);
    echo "</pre>";
@endphp

    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crud app</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Add New Details</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   {{ $datanew['newdata'] }}
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>FName</th>
            <th>LName</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Decription</th>
            <th>Designation</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->fname }}</td>
            <td>{{ $value->lname }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->gender }}</td>
            <td>{{ \Str::limit($value->description, 100) }}</td>
            <td>{{ $value->designation }}</td>
            <td>
                <form action="{{ route('posts.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    <p>Date: {{ convertYmdToMdy('2022-02-12') }}</p>
    <p>Date: {{ convertMdyToYmd('02-12-2022') }}</p>
    {!! $data->links() !!}      
@endsection