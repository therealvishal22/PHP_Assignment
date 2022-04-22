@extends('posts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Details</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First_Name:</strong>
                <input type="text" name="fname" class="form-control" placeholder="Enter Name">
                @if ($errors->has('fname'))
                <span class="text-danger">{{ $errors->first('fname') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last_Name:</strong>
                    <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                    @if ($errors->has('lname'))
                    <span class="text-danger">{{ $errors->first('lname') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong><br>
                    Male:<input type="radio" name="gender" value="Male">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Female<input type="radio" name="gender" value="Female">
                    @if ($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description"
                        placeholder="Enter Description"></textarea>
                    @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Designation:</strong>
                    <select name="designation" >
                    <option value="">Select</option>
                        <option value="Project Manager">Project Manager</option>
                        <option value="Team Leader">Team Leader</option>
                        <option value="Developer">Developer</option>
                    </select>
                    @if ($errors->has('designation'))
                    <span class="text-danger">{{ $errors->first('designation') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

</form>
@endsection