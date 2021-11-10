@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h2>Anouncement management</h2>
    <hr>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('anouncement.update') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" hidden placeholder="Enter title" value="{{$anouncement->id}}">
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" value="{{$anouncement->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <textarea name="content" class="form-control" id="exampleInputPassword1" placeholder="Content">{{$anouncement->content}}</textarea>
                </div>
                <button type="submit" class="btn btn-block" style="background-color: #2A3E50;color:aliceblue"><i class="fa fa-edit"></i>&nbsp;Update</button>
            </form>
        </div>
    </div>
</div>
@stop