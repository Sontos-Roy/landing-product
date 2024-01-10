@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Create User</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.users.store')}}" method="post" id="ajax_form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                    <label for="" class="form-label">Note</label>
                    <input type="text" class="form-control" name="note" placeholder="Enter Short Note">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Email</label>
                      <input type="text" class="form-control" disabled name="email" placeholder="Enter Email">
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
                    <label class="form-check-label" for="active">User Active or Not</label>
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
