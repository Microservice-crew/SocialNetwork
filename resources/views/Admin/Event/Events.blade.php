@extends('layouts.dashboardAdmin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Events</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <div class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                <span class="material-symbols-outlined">
                                    more_horiz
                                </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="files-lists table table-striped mt-4">
                                <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="text-center">
                                            <input type="checkbox" class="form-check-input">
                                        </div>
                                    </th>
                                    <th scope="col">Event image</th>
                                    <th scope="col">Event Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Organizer</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                <input type="checkbox" class="form-check-input">
                                            </div>
                                        </td>
                                        <td>
                                            <img class="rounded-circle img-fluid avatar-40 me-2" src="{{ asset($event->image) }}" alt="profile" loading="lazy">

                                        </td>
                                        <td>
                                            {{ $event->name }}
                                        </td>
                                        <td>
                                            {{ $event->date }}
                                        </td>
                                        <td>{{ $event->location }}</td>
                                        <td>
                                            {{ $event->publisher->name }}
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection