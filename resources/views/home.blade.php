@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <h2>Content management system</h2>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h5>Made with ❤ by Taoufik & Badr using:</h5>
                    <br>
                    <!-- <div class="typed-text">Web Design, Web Development, Front End Development, Apps Design, Apps Development</div> -->
                    <img src="img/laravel2.png" alt="Hero Image" width="350px" style="margin-left:20em;border-radius:.3em;">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection