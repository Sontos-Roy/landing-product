@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Update Settings Value</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.settings.update', $item->id)}}" method="post" id="ajax_form">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Display Name</label>
                      <input type="text" class="form-control" name="name" placeholder="" value="{{$item->name}}">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Type</label>
                      <input type="text" class="form-control" name="type" placeholder="" value="{{$item->type}}">
                </div>
                @if ($item->type == "image")
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Image</label>
                      <input type="file" class="form-control" name="value">
                </div>
                @endif
                @if ($item->type == "file")
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">File</label>
                      <input type="file" class="form-control" name="value">
                </div>
                @endif
                @if ($item->type == "text")
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Value</label>
                    <input type="text" class="form-control" name="value" value="{{ $item->value }}">
                </div>
                @endif
                @if ($item->type == "textarea")
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Value</label>
                      <textarea class="form-control" name="value" id="" rows="3">{{ $item->value }}</textarea>
                </div>
                @endif
                @if ($item->type == "texteditor")
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                    <label for="" class="form-label">Value</label>
                      <textarea class="form-control" name="value" id="editor" style="min-height: 300px;">{{ $item->value }}</textarea>
                </div>
                @endif
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>

            </div>
        </form>
    </div>




</div>
@endsection
