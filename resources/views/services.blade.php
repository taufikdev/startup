@extends('dashborad')
@section('content')
<div class="jumbotron">
    <h2>Services managment </h2>
    <hr>
    <button type="button" class="btn btn-block" data-toggle="modal" data-target="#exampleModal1" style="background-color: #2A3E50;color:aliceblue"><i class="fa fa-plus-circle"></i>&nbsp;Add Service</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Service title</label>

                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Content</label>
                            <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Content">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" onchange="previewFile(this)">
                            <img id="previewImg" style="max-width: 130px;margin: top 2opx;" />
                        </div>
                        <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
                </form>

            </div>
        </div>
    </div> <br>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    @if(Session::has('delete'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('delete') }}
    </div>
    @endif
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{$service->title}}</td>
                <td>{{$service->content}}</td>
                <td> <img src="images/{{$service->img}}" alt="Service Image" width="60px" style="margin-right:5em;border-radius:.3em;">
                </td>
                <td>
                    <div class="delete">
                        <form action="{{ route('service.destroy', $service->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Delete" />
                        </form>
                    </div>
                    <div class="update">
                        <!-- <a href="" class=" btn btn-warning">Update</a> -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning editBtn" data-toggle="modal" data-target="#exampleModal" data-service-id="{{$service->id}}" data-service-title="{{$service->title}}" data-service-content="{{$service->content}}" data-service-img="{{$service->img}}">
                            Update
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Updating service</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="{{ route('service.update',$service->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Service title</label>
                                                <input type="text" name="id" class="form-control" id="idTxt" aria-describedby="emailHelp" hidden placeholder="Enter title">
                                                <input type="text" name="title" class="form-control" id="titleTxt" aria-describedby="emailHelp" placeholder="Enter title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Content</label>
                                                <input type="text" name="content" class="form-control" id="contentTxt" placeholder="Content">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Image</label>
                                                <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" onchange="previewFile(this)">
                                            </div>
                                            <br>
                                            <img src="" alt="Service Image" id="imgUpdate" width="100px" style="margin-left:10em;border-radius:.3em;">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {

        // $(".editBtn").on("click", function(e) {
        $('#exampleModal').on('show.bs.modal', function(e) {
            var serviceId = $(e.relatedTarget).data('service-id');
            var title = $(e.relatedTarget).data('service-title');
            var content = $(e.relatedTarget).data('service-content');
            var img = "images/" + $(e.relatedTarget).data('service-img');
            $("#idTxt").val(serviceId);
            $("#titleTxt").val(title);
            $("#contentTxt").val(content);
            $("#imgUpdate").attr("src", img)
        });
    });
</script>
@stop