@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h2>Contact management</h2>
    <hr>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('contact.update') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" hidden placeholder="Enter title" value="{{$contact->id}}">
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" value="{{$contact->address}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Content" value="{{$contact->phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlEmail">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleFormControlEmail" value="{{$contact->email}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFacebook">Facebook</label>
                    <input type="text" name="facebook" class="form-control" id="exampleFormControlFacebook" value="{{$contact->facebook}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTwitter">Twitter</label>
                    <input type="text" name="twitter" class="form-control" id="exampleFormControlTwitter" value="{{$contact->twitter}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlYoutube">Youtube</label>
                    <input type="text" name="youtube" class="form-control" id="exampleFormControlYoutube" value="{{$contact->youtube}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInstagram">Instagram</label>
                    <input type="text" name="instagram" class="form-control" id="exampleFormControlInstagram" value="{{$contact->instagram}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlLinkedIn">LinkedIn</label>
                    <input type="text" name="linkedin" class="form-control" id="exampleFormControlLinkedIn" value="{{$contact->linkedin}}">
                </div>
                <button type="submit" class="btn btn-block" style="background-color: #2A3E50;color:aliceblue"><i class="fa fa-edit"></i>&nbsp;Update</button>

            </form>
        </div>
    </div>
</div>
@stop