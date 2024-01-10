@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>View Cause</strong></h1>
    </div>

    <div class="card p-3">
        <div class="row">
            <div class="col-12">
                <strong>Title : </strong> {{$item->title}}
            </div>
            <div class="col-12">
                <strong>2nd Title : </strong> {{$item->title2}}
            </div>
            <div class="col-12">
                <strong>Sub Title : </strong> {{$item->subtitle}}
            </div>
            <div class="col-12">
                <strong>Key : </strong> {{$item->key}}
            </div>
            <div class="col-12">
                <strong>Details : </strong> {!! $item->details !!}
            </div>
            <div class="col-12">
                <strong>2nd Details : </strong> {!! $item->details2 !!}
            </div>
            @if ($item->image)
            <div class="col-12"><strong>Image:</strong> <br>
                <img src="{{getImage('sections', $item->image)}}" alt="">
            </div>
            @endif
        </div>
    </div>




</div>
@endsection
