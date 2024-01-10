@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Create Project</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.causes.store')}}" method="post" id="ajax_form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Category</label>
                      <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Image</label>
                      <input type="file" class="form-control" name="image">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Summary</label>
                      <textarea name="summary" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Quate</label>
                      <textarea name="quate" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                      <label for="" class="form-label">Description</label>
                      <textarea name="description" id="editor" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                      <label for="" class="form-label">Challange</label>
                      <textarea name="challenge" id="editor2" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                    <label class="form-check-label" for="is_featured">Is Featured Cause</label>
                    <div class="form-check form-switch mt-1">
                        <input class="form-check-input form-control" name="is_featured" type="checkbox" id="is_featured">
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                    <label class="form-check-label" for="active">Status Active or Not</label>
                    <div class="form-check form-switch mt-1">
                        <input class="form-check-input form-control" name="status" type="checkbox" id="active">
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
