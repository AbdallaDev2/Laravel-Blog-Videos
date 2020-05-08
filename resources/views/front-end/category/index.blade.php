@extends('layouts.app')

@section('title',$cat->name)

@section('meta_keyword',$cat->meta_keyword)

@section('meta_des',$cat->meta_des)


@section('content')
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h1>{{$cat->name}}</h1>
            </div>
            @include('front-end.shared.video-row')
        </div>
    </div>
@endsection