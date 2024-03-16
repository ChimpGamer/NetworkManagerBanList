@extends('layouts.app')

@section('content')
    <section style="padding-top:4.5rem!important; padding-bottom:4.5rem!important">
        <div class="d-flex justify-content-center align-items-center"
             style="min-height: 50vh; max-width:1920px; padding-top:4.5rem!important; padding-bottom:4.5rem!important">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mb-4">
                        <h1 class="fw-bold display-1">@lang('messages.404_title')</h1>
                    </div>
                    <div>
                        @lang('messages.404_text')
                    </div>
                    <div>
                        <a wire:navigate class="btn btn-primary" href="/" role="button">@lang('messages.404_button_text')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
