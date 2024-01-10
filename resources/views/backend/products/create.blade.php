@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Create Product</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.products.store')}}" method="post" id="ajax_form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Currency</label>
                      <select name="currency" id="" class="form-control">
                        <option value="৳">৳ (Taka)</option>
                        <option value="$">$ (Dollar)</option>
                      </select>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Price</label>
                      <input type="number" class="form-control" name="price" placeholder="Enter Price">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control select2">
                      @foreach ($categories as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
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
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                      <label for="" class="form-label">Description</label>
                      <textarea name="details" id="editor" cols="30" rows="10" class="form-control"></textarea>
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
