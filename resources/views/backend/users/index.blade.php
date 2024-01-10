@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>All Users</strong></h1>
        <a href="{{route('admin.users.create')}}" class="btn btn-success">Create User</a>
    </div>

    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="d-none d-xl-table-cell">Email</th>
                            <th class="d-none d-xl-table-cell">Status</th>
                            <th class="d-none d-xl-table-cell">Note</th>
                            <th class="d-none d-xl-table-cell">Image</th>
                            <th class="d-none d-md-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td class="d-xl-table-cell">{{$item->email}}</td>
                            <td><span class="badge {{$item->status == 1 ? 'bg-success' : 'bg-danger'}}">{{$item->status == 1 ? 'Active' : 'Deactive'}}</span></td>
                            <td class="d-xl-table-cell">{{$item->note}}</td>
                            <td class="d-xl-table-cell">
                                <img src="{{getImage('users', $item->image)}}" alt="" width="100">
                            </td>
                            <td>
                                <div class="d-flex">
                                    {{-- <a href="{{route('admin.users.show', $item->id)}}" class="btn btn-info m-1"><i class="align-middle" data-feather="eye"></i></a> --}}
                                    <a href="{{route('admin.users.edit', $item->id)}}" class="btn btn-info m-1"><i class="align-middle" data-feather="edit"></i></a>
                                    <form action="{{route('admin.users.destroy', $item->id)}}" class="delete_form m-1" method="POST">
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
