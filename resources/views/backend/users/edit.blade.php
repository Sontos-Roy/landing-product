@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Edit User</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.users.update', $item->id)}}" method="post" id="ajax_form">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$item->name}}">
              </div>
              <div class="col-12 col-lg-6 col-xxl-6 my-2">
                  <label for="" class="form-label">Note</label>
                  <input type="text" class="form-control" name="note" placeholder="Enter Short Note" value="{{$item->note}}">
              </div>
              <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{$item->email}}">
              </div>
              <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Enter Password">
              </div>
              <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
              </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label class="form-check-label" for="active">Slider Active or Not</label>
                    <div class="form-check form-switch mt-1">
                        <input class="form-check-input form-control" name="status" type="checkbox" {{$item->status == 1 ? 'checked' : ''}} id="active">
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
