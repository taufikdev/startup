@extends('dashborad')
@section('content')
<div class="jumbotron">
    <h2>Plans management</h2>
    <hr>
    <div class="row">
        <div class="col-md-6">

            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif


            <div class="form-group">
                <label for="exampleInputEmail1">Plan name</label> <br>
                <select class="form-select form-select-lg mb-3" aria-label="Default select example" id="plansOptions">
                    <option selected>Select plan</option>
                    @foreach($plans as $plan)
                    <option value="{{$plan->id}}">{{$plan->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Plan price</label>
                <input type="text" name="content" class="form-control" id="planPrice" placeholder="Content" value="">
            </div>
            <button class="btn btn-block" style="background-color: #2A3E50;color:aliceblue" data-toggle="modal" data-target="#myModal" id="updateBtn"><i class="fa fa-edit"></i>&nbsp;Update</button>
            <hr>

            <div class="form-group">
                <label for="">Caracter name</label>
                <input type="text" name="caractereName" class="form-control" placeholder="New caracter..." id="caractereName">
            </div>
            <button class="btn btn-block" style="background-color: #2A3E50;color:aliceblue" id="addPlanCaracter"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
        </div>
        <div class="col-md-6">
            <h3>Selected plan caracters</h3>
            <hr>
            <div class="list-group" id="caracterList"></div>
            <br>
            <button class="btn btn-danger btn-block" id="delBtn"><i class="fa fa-edit"></i>&nbsp;Delete selection</button>
        </div>
    </div>
</div>
<div class="modal fade modal-auto-clear" data-timer="2000" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Updated successfully!</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <br> <br>
                <h6 class="text-success">✅ The price of the chosen plan has been updated successfully!</h6>
                <br>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#delBtn").hide();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        //-------getting plan caracters
        $("#plansOptions").change(function() {
            var planId = $(this).children("option:selected").val();
            $.ajax({
                url: '/plan/show',
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    message: "hola",
                    plan_id: planId,
                },
                dataType: 'JSON',
                success: function(data) {
                    $("#planPrice").val(data.selectedPlan.price);
                    $("#caracterList").empty();
                    data.plan_caracters.forEach(function(item) {
                        $("#caracterList").append("<li class='list-group-item'><input class='mr-1 chkk' type='checkbox' value=" + item.id + ">" + item.name + "</li>")
                    });
                    $("#delBtn").show();
                }
            });
        });

        //-----adding plan caracter
        $("#addPlanCaracter").click(function() {
            var planId = $("#plansOptions").children("option:selected").val();
            var planName = $("#caractereName").val();
            $.ajax({
                url: '/plan-caracters/add',
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    plan_id: planId,
                    plan_caracter: planName
                },
                dataType: 'JSON',
                success: function(data) {
                    $("#caractereName").val("");
                    $("#caracterList").empty();
                    data.plan_caracters.forEach(function(item) {
                        $("#caracterList").append("<li class='list-group-item'><input class='mr-1 chkk' type='checkbox' value=" + item.id + ">" + item.name + "</li>")
                    });
                    $("#delBtn").show();
                }
            });
        });

        //updaing the price
        $("#updateBtn").click(function() {
            var planId = $("#plansOptions").children("option:selected").val();
            var planPrice = $("#planPrice").val();
            $.ajax({
                url: '/plan/update',
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    plan_id: planId,
                    plan_price: planPrice
                },
                dataType: 'JSON',
                success: function(data) {
                    $("#caractereName").val("");
                    $("#caracterList").empty();
                    data.plan_caracters.forEach(function(item) {
                        $("#caracterList").append("<li class='list-group-item'><input class='mr-1 chkk' type='checkbox' value=" + item.id + ">" + item.name + "</li>")
                    });
                    $("#delBtn").show();
                }
            });
        });
        //-------------------------------------modal---------------------------

        $('.modal-auto-clear').on('shown.bs.modal', function() {
            var timer = $(this).data('timer') ? $(this).data('timer') : 4000;
            $(this).delay(timer).fadeOut(200, function() {
                $(this).modal('hide');
            });
        })

        // delete plan caracters
        $("#delBtn").click(function() {
            var planId = $("#plansOptions").children("option:selected").val();
            var ids = []
            $('input:checkbox.chkk').each(function() {
                if (this.checked)
                    ids.push($(this).val())
            });
            $.ajax({
                url: '/plan-caracters/delete',
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    plan_id: planId,
                    caracters_to_delete: ids
                },
                dataType: 'JSON',
                success: function(data) {
                    $("#caractereName").val("");
                    $("#caracterList").empty();
                    data.plan_caracters.forEach(function(item) {
                        $("#caracterList").append("<li class='list-group-item'><input class='mr-1 chkk' type='checkbox' value=" + item.id + ">" + item.name + "</li>")
                    });
                    $("#delBtn").show();
                }
            });
        });
    });
</script>
@stop