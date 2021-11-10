@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h2>Hero management</h2>
    <hr>
    <div class="row">
        <div class="col-md-6">

            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
             @endif
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
             @endif
            <form method="POST" action="{{ route('hero.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Site title</label>

                    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" hidden placeholder="Enter title" value="{{$heros->id}}">
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter title" value="{{$heros->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <input type="text" name="content" class="form-control" id="exampleInputPassword1" required placeholder="Content" value="{{$heros->content}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required onchange="previewFile(this)">
                    <img id="previewImg" style="max-width: 130px;margin: top 2opx;" />
                </div>
                <button type="submit" class="btn btn-block" style="background-color: #2A3E50;color:aliceblue"><i class="fa fa-edit"></i>&nbsp;Update</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="images/{{$heros->img}}" alt="Hero Image" width="360px" style="margin-left:4em;border-radius:.3em;">
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        function previewFile(input) {
            var file = $("input[type=file]").get(0).file[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $("#previewImg").attr("src", reader.result);
                    reader.readAsDataURL(file)
                }
            }
        }
    });
</script>
@stop