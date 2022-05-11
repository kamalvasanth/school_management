@extends('layout')
@section('content')
    <div class="container mt-10">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('error') !!}</li>
                </ul>
            </div>
        @endif
        <div class="card shadow mt-10">
            <div class="card-header font-weight-bolder font-size-h2">
                Subjects
                <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('subjects.create') }}">Add Subject</a>
                </div>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Term</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->term->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@stop
