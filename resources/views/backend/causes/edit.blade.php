@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Edit Project</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.causes.update', $item->id)}}" method="post" id="ajax_form">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$item->title}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control">
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                      @endforeach
                    </select>
              </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Image</label>
                      <input type="file" class="form-control" name="image">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Summary</label>
                      <textarea name="summary" id="" cols="30" rows="5" class="form-control">{!! $item->summary !!}</textarea>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Quate</label>
                    <textarea name="quate" id="" cols="30" rows="5" class="form-control">{{$item->quate}}</textarea>
              </div>
              <div class="col-12 col-lg-12 col-xxl-12 my-2">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" id="editor" cols="30" rows="10" class="form-control">{{$item->description}}</textarea>
              </div>
              <div class="col-12 col-lg-12 col-xxl-12 my-2">
                    <label for="" class="form-label">Challange</label>
                    <textarea name="challenge" id="editor2" cols="30" rows="10" class="form-control">{{$item->challenge}}</textarea>
              </div>
              <div class="col-12 col-lg-12 col-xxl-12 my-2">
                <label class="form-check-label" for="is_featured">Is Featured Cause</label>
                <div class="form-check form-switch mt-1">
                    <input class="form-check-input form-control" name="is_featured" type="checkbox" id="is_featured" {{$item->is_featured == 1 ? 'checked' : ''}}>
                </div>
            </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                    <label class="form-check-label" for="active">Status Active or Not</label>
                    <div class="form-check form-switch mt-1">
                        <input class="form-check-input form-control" name="status" type="checkbox" id="active" {{$item->status == 1 ? 'checked' : ''}}>
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
