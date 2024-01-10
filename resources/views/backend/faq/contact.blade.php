@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>All Contacts</strong></h1>
        <a href="#settings" class="btn btn-success" data-bs-toggle="modal" >Create Contact</a>
    </div>
    <div class="modal fade" id="settings" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Create FAQ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-3">
                        <form action="{{route('admin.contact.store')}}" method="post" id="ajax_form">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                                      <label for="" class="form-label"> First Name</label>
                                      <input type="text" class="form-control" name="f_name" placeholder="First Name">
                                </div>
                            <div class="row">
                                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                                      <label for="" class="form-label"> Last Name</label>
                                      <input type="text" class="form-control" name="l_name" placeholder="Last Name">
                                </div>
                                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                                      <label for="" class="form-label"> Answer</label>
                                      <textarea name="answer" id="" class="form-control" cols="30" rows="10"></textarea>
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
                            <th class="d-none d-xl-table-cell">First Name</th>
                            <th class="d-none d-xl-table-cell">Last Name</th>
                            <th class="d-none d-xl-table-cell">Email</th>
                            <th class="d-none d-xl-table-cell">Phone</th>
                            <th class="d-none d-xl-table-cell">Message</th>
                            <th class="d-none d-md-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->f_name}}</td>
                            <td>{{$item->l_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->message}}</td>
                            <td class="">
                                <div class="d-flex">
                                    {{-- <a href="{{route('admin.faqs.edit', $item->id)}}" class="btn btn-info m-1 modal_btn"><i class="align-middle" data-feather="edit"></i></a> --}}
                                    <form action="{{route('admin.contact.destroy', $item->id)}}" class="delete_form m-1" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="align-middle" data-feather="delete"></i></button>
                                    </form>
                                </div>
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
