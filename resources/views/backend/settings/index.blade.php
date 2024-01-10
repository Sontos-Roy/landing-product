@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>All Settings</strong></h1>
        <a href="#settings" class="btn btn-success" data-bs-toggle="modal" >Create Setting</a>

    </div>
    <div class="modal fade" id="settings" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Create Setting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-3">
                        <form action="{{route('admin.settings.store')}}" method="post" id="ajax_form">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                                      <label for="" class="form-label">Display name</label>
                                      <input type="text" class="form-control" name="name" placeholder="Display name">
                                </div>
                                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                                      <label for="" class="form-label">Key</label>
                                      <input type="text" class="form-control" name="key" placeholder="Key [without space, -]">
                                </div>
                                <div class="col-12 col-lg-12 col-xxl-12 my-2">
                                      <label for="" class="form-label">Display name</label>
                                      <select name="type" id="" class="form-control">
                                        <option value="text">Text</option>
                                        <option value="textarea">Text Area</option>
                                        <option value="texteditor">Text Editor</option>
                                        <option value="image">Image</option>
                                        <option value="file">File</option>
                                      </select>
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


    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('settings'), options)

    </script>

    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Display Name</th>
                            <th class="d-none d-xl-table-cell">Key</th>
                            <th class="d-none d-xl-table-cell">Type</th>
                            <th>Value</th>
                            <th class="d-none d-md-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td class="d-xl-table-cell">{{$item->key}}</td>
                            <td class="d-xl-table-cell">{{$item->type}}</td>
                            <td class="d-xl-table-cell">
                                @if ($item->type == 'image')
                                <img src="{{getImage('settings', $item->value)}}" alt="" width="100">
                                @endif
                                @if ($item->type == 'file')
                                <a href="{{getImage('settings', $item->value)}}" target="_blank">Get File</a>
                                @endif
                                @if ($item->type == 'text')
                                {{$item->value}}
                                @endif
                                @if ($item->type == 'textarea')
                                {{$item->value}}
                                @endif
                                @if ($item->type == 'texteditor')
                                {{strLimit($item->value, 100)}}
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('admin.settings.edit', $item->id)}}" class="btn btn-info m-1"><i class="align-middle" data-feather="edit"></i></a>
                                    <form action="{{route('admin.settings.destroy', $item->id)}}" class="delete_form m-1" method="POST">
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
