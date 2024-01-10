@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Create Project</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.sliders.store')}}" method="post" id="ajax_form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Sub-Title</label>
                      <input type="text" class="form-control" name="sub_title" placeholder="Enter Subtitle">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Image</label>
                      <input type="file" class="form-control" name="image">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label class="form-check-label" for="active">Slider Active or Not</label>
                    <div class="form-check form-switch mt-1">
                        <input class="form-check-input form-control" name="active" type="checkbox" id="active">
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>

            </div>
        </form>
    </div>




</div>
@endsection
