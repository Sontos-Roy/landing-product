@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>View Projects</strong></h1>
    </div>

    <div class="card p-3">
        <div class="row">
            <div class="col-12">
                <strong>Name : </strong> {{$item->title}}
            </div>
            <div class="col-12"><strong>Slug:</strong> {{$item->slug}}</div>
            <div class="col-12"><strong>Summary:</strong> {{$item->summary}}</div>
            <div class="col-12"><strong>Quate:</strong> {{$item->quate}}</div>
            <div class="col-12"><strong>Description:</strong>
                {!! $item->description !!}
            </div>
            <div class="col-12"><strong>Challenge:</strong>
                {!! $item->challenge !!}
            </div>
            <div class="col-12"><strong>Image:</strong> <br>
                <img src="{{getImage('causes', $item->image)}}" alt="">
            </div>
        </div>
    </div>




</div>
@endsection
