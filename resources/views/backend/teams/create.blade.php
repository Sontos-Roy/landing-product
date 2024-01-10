@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>Create Member</strong></h1>
    </div>

    <div class="card p-3">
        <form action="{{route('admin.teams.store')}}" method="post" id="ajax_form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Designation</label>
                      <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Order By Number</label>
                      <input type="number" class="form-control" name="order" placeholder="Order Number">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Facebook Link</label>
                      <input type="text" class="form-control" name="facebook" placeholder="Facebook">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Twitter Link</label>
                      <input type="text" class="form-control" name="twitter" placeholder="Twitter" >
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Instagram Link</label>
                      <input type="text" class="form-control" name="instagram" placeholder="Instagram">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Image</label>
                      <input type="file" class="form-control" name="image">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6 my-2">
                      <label for="" class="form-label">Short Message</label>
                      <textarea name="short" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                      <label for="" class="form-label">Message For Top Member</label>
                      <textarea name="details" id="editor" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                    <label class="form-check-label" for="active">Add To Top</label>
                    <div class="form-check form-switch mt-1">
                        <input class="form-check-input form-control" name="is_main" type="checkbox" id="active">
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
