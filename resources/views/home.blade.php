@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <main-app :api_token="'{{Auth::user()->api_token}}'"></main-app>
        </div>
    </div>
</div>
@endsection
