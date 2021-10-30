<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DevFolio - Developer Portfolio Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- Template Stylesheet -->
    <!-- <link href="/dachboardStyle.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('/css/dachboardStyle.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-md-2">
                <img src="img/logo.png" alt="Hero Image" width="60px" style="margin-left:4em;">
                <ul class="list-group mt-2">
                    <a href="">
                        <li class="itemo" id="itmFirst"><i class="fa fa-home"></i>&nbsp;Welcome </li>
                    </a>
                    <a href="/add-hero">
                        <li class="itemo"><i class="fa fa-align-left"></i>&nbsp; Hero </li>
                    </a>
                    <a href="/add-service">
                        <li class="itemo"><i class="fa fa-cubes"></i>&nbsp; Services </li>
                    </a>
                    <a href="">
                        <li class="itemo"><i class="fa fa-laptop"></i>&nbsp;Portfolio </li>
                    </a>
                    <a href="">
                        <li class="itemo"><i class="fa fa-donate"></i>&nbsp;&nbsp;Plans </li>
                    </a>
                    <a href="">
                        <li class="itemo"><i class="fa fa-layer-group"></i>&nbsp;&nbsp;Stack </li>
                    </a>
                    <a href="">
                        <li class="itemo"><i class="fa fa-address-book"></i>&nbsp;&nbsp;Coordenate</li>
                    </a>
                    <a href="">
                        <li class="itemo" id="itmLast"><i class="fa fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</li>
                    </a>
                </ul>
            </div>
            <div class="content col-md-10 mt-3">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

</html>