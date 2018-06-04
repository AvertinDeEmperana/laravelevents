@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 m-3 p-4 bg-white">
            <h3>Pending Events</h3>
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Starts At</th>
                    <th>Location</th>
                    <th>Price</th>
                </tr>
                @foreach ($pending as $event)
                <tr>
                    <td><a href="/cp/manage/{{ $event->id }}/edit">{{ $event->title }}</a></td>
                    <td>{{ $event->starts_at->format("M d, Y") }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->price }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-12 m-3 p-4 bg-white">
            <h3>Upcoming Events</h3>
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Starts At</th>
                    <th>Location</th>
                    <th>Price</th>
                </tr>
                @foreach ($future as $event)
                <tr>
                    <td><a href="/cp/manage/{{ $event->id }}/edit">{{ $event->title }}</a></td>
                    <td>{{ $event->starts_at->format("M d, Y") }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->price }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
