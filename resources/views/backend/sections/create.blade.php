@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Create Section</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.sections.store')}}" method="post" id="ajax_form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">2nd Title</label>
                      <input type="text" class="form-control" name="title2" placeholder="2nd Title">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Sub title</label>
                      <input type="text" class="form-control" name="subtitle" placeholder="Sub title">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Key</label>
                      <input type="text" class="form-control" name="key" placeholder="Key">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Image</label>
                      <input type="file" class="form-control" name="image">
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                      <label for="" class="form-label">Details</label>
                      <textarea name="details" id="editor" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                      <label for="" class="form-label">2nd Details</label>
                      <textarea name="details2" id="editor2" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>




</div>
@endsection
