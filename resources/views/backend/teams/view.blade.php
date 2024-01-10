@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>View Product</strong></h1>
    </div>

    <div class="card p-3">
        <div class="row">
            <div class="col-12">
                Name: {{$item->title}}
            </div>
            <div class="col-12">Slug: {{$item->slug}}</div>
            <div class="col-12">Summary: {{$item->summary}}</div>
            <div class="col-12">Category: {{$item->category ? $item->category->name : '' }}</div>
            <div class="col-12">Created by: {{$item->user ? $item->user->name : '' }}</div>
            <div class="col-12">Price: {{$item->currency}} {{$item->price }}</div>
            <div class="col-12">Description:
                {!! $item->details !!}
            </div>
        </div>
    </div>




</div>
@endsection
