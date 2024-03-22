@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ asset('svg/fcc.jpeg')}}" class="rounded-circle"/>
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>1</strong> posts</div>
                <div class="pr-5"><strong>2</strong> followers</div>
                <div class="pr-5"><strong>3</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="{{ asset('svg/aot.png')}}" class="w-100 h-100"/>
        </div>
        <div class="col-4">
            <img src="{{ asset('svg/BarockObama.png')}}" class="w-100 h-100"/>
        </div>
        <div class="col-4">
            <img src="{{ asset('svg/fcc.jpeg')}}" class="w-100 h-100"/>
        </div>
    </div>
</div>
@endsection
