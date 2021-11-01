@extends('dashborad')
@section('content')
<div class="jumbotron">
    <h2>Plans management</h2>
    <p>{{ $plans[0]->name }}</p>
    <hr>
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif
            <form method="POST" action="{{ route('hero.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Site title</label>
                    <select class="form-select form-select-lg mb-3" aria-label="Default select example" id="plansOptions">
                        <option selected>Select plan</option>
                        @foreach($plans as $plan)
                            <option value="{{$plan->id}}">{{$plan->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>

                    <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Content" value="{{$plan->price}}">
                </div>

                <button type="submit" class="btn btn-block" style="background-color: #2A3E50;color:aliceblue"><i class="fa fa-edit"></i>&nbsp;Update</button>
            </form>
        </div>

    </div>

</div>
<script>
    $(document).ready(function() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $("#plansOptions").change(function() {
            $.ajax({
                url: '/plan/update',
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    message: "hola"
                },
                dataType: 'JSON',
                success: function(data) {
                    alert(data.str);
                }
            });
        });
    });
</script>
@stop