@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h2>Portfolio managment </h2>
    <hr>
    <form method="POST" action="{{ route('portfolioCategories.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Protfolio categorie</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
        </div>
        <button type="submit" class="btn btn-block" style="background-color: #2A3E50;color:aliceblue"><i class="fa fa-plus-circle"></i>&nbsp;Add category</button>
    </form>
    <br>
    <!-- --------------------------list of categories------------------------------------ -->
    <h3>All categories</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolioCats as $cat)
            <tr>
                <td>{{$cat->name}}</td>
                <td>
                    <div style="display: flex; justify-content: space-around;">
                        <div class="delete">
                            <form action="{{ route('portfolioCategories.destroy', $cat->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Delete" />
                            </form>
                        </div>
                        <div style="width: 1em;"></div>
                        <div class="update">
                            <!-- <a href="" class=" btn btn-warning">Update</a> -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning editBtn" data-toggle="modal" data-target="#exampleModal2" data-cat-id="{{$cat->id}}" data-cat-name="{{$cat->name}}">
                                Update
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Updating portfolio Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('portfolioCategories.update',$cat->id)}}">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Category name</label>
                                                    <input type="text" name="id" class="form-control" id="idTxt2" aria-describedby="emailHelp" hidden placeholder="Enter title">
                                                    <input type="text" name="name" class="form-control" id="titleTxt2" aria-describedby="emailHelp" placeholder="Enter title">
                                                </div>

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
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- --------------------------end list of categories------------------------------------ -->
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
                    <form method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Work category</label>
                            <select class="form-select form-select-lg mb-3" aria-label="Default select example" id="plansOptions" name="category">
                                <option selected>Select Portfolio</option>
                                @foreach($portfolioCats as $portfolioCat)
                                <option value="{{$portfolioCat->id}}">{{$portfolioCat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Work title</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Link</label>
                            <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="Content">
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
                <th>Name</th>
                <th>Link</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolio as $work)
            <tr>
                <td>{{$work->name}}</td>
                <td><a href="http://{{$work->link}}">{{$work->link}}</a> </td>
                <td> <img src="images/{{$work->image}}" alt="Work Image" width="60px" style="margin-right:5em;border-radius:.3em;">
                </td>
                <td>
                    <div style="display: flex; justify-content: space-around;">
                        <div class="delete">
                            <form action="{{ route('portfolio.destroy', $work->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Delete" />
                            </form>
                        </div>
                        <div style="width: 1em;"></div>
                        <div class="update">
                            <!-- <a href="" class=" btn btn-warning">Update</a> -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning editBtn" data-toggle="modal" data-target="#exampleModal" data-work-id="{{$work->id}}" data-work-name="{{$work->name}}" data-work-link="{{$work->link}}" data-work-image="{{$work->image}}">
                                Update
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Updating portfolio item</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('portfolio.update',$work->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Work name</label>
                                                    <input type="text" name="id" class="form-control" id="idTxt" aria-describedby="emailHelp" hidden placeholder="Enter title">
                                                    <input type="text" name="name" class="form-control" id="titleTxt" aria-describedby="emailHelp" placeholder="Enter title">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Link</label>
                                                    <input type="text" name="link" class="form-control" id="contentTxt" placeholder="Content">
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
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#exampleModal').on('show.bs.modal', function(e) {
            var workId = $(e.relatedTarget).data('work-id');
            var name = $(e.relatedTarget).data('work-name');
            var link = $(e.relatedTarget).data('work-link');
            var img = "images/" + $(e.relatedTarget).data('work-image');
            $("#idTxt").val(workId);
            $("#titleTxt").val(name);
            $("#contentTxt").val(link);
            $("#imgUpdate").attr("src", img)
        });
        $('#exampleModal2').on('show.bs.modal', function(e) {
            var catId = $(e.relatedTarget).data('cat-id');
            var name = $(e.relatedTarget).data('cat-name');
            $("#idTxt2").val(catId);
            $("#titleTxt2").val(name);
        });
    });
</script>
@stop