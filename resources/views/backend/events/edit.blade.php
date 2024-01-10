@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Edit Event</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.events.update', $item->id)}}" method="post" id="ajax_form">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$item->title}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" value="{{$item->date}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                        <label for="" class="form-label">Time</label>
                        <input type="time" class="form-control" name="time" value="{{date('h:i:s', strtotime($item->time))}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Enter Location" value="{{$item->location}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Organize Name</label>
                    <input type="text" class="form-control" name="or_name" placeholder="Enter Organize Name" value="{{$item->or_name}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Organize Phone</label>
                    <input type="text" class="form-control" name="or_phone" placeholder="Enter Organize Phone" value="{{$item->or_phone}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Organize Email</label>
                    <input type="text" class="form-control" name="or_email" placeholder="Enter Organize Email" value="{{$item->or_email}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Organize Website</label>
                    <input type="text" class="form-control" name="or_website" placeholder="Enter Organize Website" value="{{$item->or_website}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                        <label for="" class="form-label">Description</label>
                        <textarea name="details" id="editor" cols="30" rows="10" class="form-control">{{$item->details}}</textarea>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>

            </div>
        </form>
    </div>




</div>
@endsection
