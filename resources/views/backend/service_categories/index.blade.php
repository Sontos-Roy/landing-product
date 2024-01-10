@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>All Project Categories</strong></h1>
        <a href="#settings" class="btn btn-success" data-bs-toggle="modal" >Create Category</a>
    </div>
    <div class="modal fade" id="settings" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Create Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-3">
                        <form action="{{route('admin.service.categories.store')}}" method="post" id="ajax_form">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                                      <label for="" class="form-label"> name</label>
                                      <input type="text" class="form-control" name="name" placeholder=" name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="ajax_form">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="d-none d-xl-table-cell">Slug</th>
                            <th class="d-none d-xl-table-cell">Created By</th>
                            <th class="d-none d-md-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td class="d-xl-table-cell">{{$item->slug}}</td>
                            <td class="d-xl-table-cell">
                                {{$item->user ? $item->user->name : '' }}
                            </td>
                            <td class="d-flex">
                                <a href="{{route('admin.service.categories.edit', $item->id)}}" class="btn btn-info m-1 modal_btn"><i class="align-middle" data-feather="edit"></i></a>
                                <form action="{{route('admin.service.categories.destroy', $item->id)}}" class="delete_form m-1" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="align-middle" data-feather="delete"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
