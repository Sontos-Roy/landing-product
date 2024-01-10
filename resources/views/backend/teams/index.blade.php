@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>All Team Members</strong></h1>
        <a href="{{route('admin.teams.create')}}" class="btn btn-success">Add Member</a>
    </div>

    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="d-xl-table-cell">Designation</th>
                            <th class="d-xl-table-cell">OrderBy</th>
                            <th class="d-xl-table-cell">Is Top</th>
                            <th class="d-xl-table-cell">Short</th>
                            <th class="d-xl-table-cell">Message</th>
                            <th class="d-xl-table-cell">Image</th>
                            <th>Status</th>
                            <th class="d-md-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td class="d-xl-table-cell">{{$item->designation}}</td>
                            <td class="d-xl-table-cell">{{$item->order}}</td>
                            <td><span class="badge {{$item->is_main == 1 ? 'bg-success' : 'bg-info'}}">{{$item->is_main == 1 ? 'At Top' : 'At Bottom'}}</span></td>
                            <td class="d-xl-table-cell">{{strLimit($item->short, 100)}}</td>
                            <td class="d-xl-table-cell">{{strLimit($item->details, 100)}}</td>
                            <td class="d-xl-table-cell">
                                <img src="{{getImage('causes', $item->image)}}" alt="" width="100">
                            </td>
                            <td class="">
                                <div class="d-flex">
                                    <!--<a href="{{route('admin.teams.show', $item->id)}}" class="btn btn-info m-1"><i class="align-middle" data-feather="eye"></i></a>-->
                                    <a href="{{route('admin.teams.edit', $item->id)}}" class="btn btn-info m-1"><i class="align-middle" data-feather="edit"></i></a>
                                    <form action="{{route('admin.teams.destroy', $item->id)}}" class="delete_form m-1" method="POST">
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
