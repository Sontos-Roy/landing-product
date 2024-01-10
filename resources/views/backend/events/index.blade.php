@extends('backend.layouts.app')
@section('content')
<div class="container-fluid p-0">

    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h1 class="h3"><strong>All Events</strong></h1>
        <a href="{{route('admin.events.create')}}" class="btn btn-success">Create Event</a>
    </div>

    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th class="d-none d-xl-table-cell">Date & Time</th>
                            <th class="d-none d-xl-table-cell">Location</th>
                            <th class="d-none d-xl-table-cell">Location</th>
                            <th class="d-none d-xl-table-cell">Organizer</th>
                            <th class="d-none d-xl-table-cell">Image</th>
                            <th class="d-none d-md-table-cell">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->title}}</td>   
                            <td class="d-xl-table-cell">{{ date('d-m-y', strtotime($item->date))}} {{ date('h:i:s', strtotime($item->time))}}</td>
                            <td class="d-xl-table-cell">{{$item->location}}</td>
                            <td class="d-xl-table-cell">{{$item->or_name}}</td>
                            <td class="d-xl-table-cell">
                                <img src="{{getImage('events', $item->image)}}" alt="" width="100">
                            </td>
                            <td class="">
                                <div class="d-flex">
                                    <a href="{{route('admin.events.show', $item->id)}}" class="btn btn-info m-1"><i class="align-middle" data-feather="eye"></i></a>
                                    <a href="{{route('admin.events.edit', $item->id)}}" class="btn btn-info m-1"><i class="align-middle" data-feather="edit"></i></a>
                                    <form action="{{route('admin.events.destroy', $item->id)}}" class="delete_form m-1" method="POST">
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
