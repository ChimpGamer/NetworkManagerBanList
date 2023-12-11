@extends('layouts.app')

@section('content')
    <section style="padding-top:4.5rem!important; padding-bottom:4.5rem!important">
        <div class="d-flex justify-content-center align-items-center"
             style="min-height: 50vh; max-width:1920px; padding-top:4.5rem!important; padding-bottom:4.5rem!important">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mb-4">
                        <h1 class="fw-bold display-1">404</h1>
                    </div>
                    <div>
                        <p class="h2">Sorry, we can’t find the page you’re looking for.</p>
                        <p class="lead">Click the button below to go back to the homepage.</p>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="/" role="button">Click to go home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
