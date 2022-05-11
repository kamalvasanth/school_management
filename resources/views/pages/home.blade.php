@extends('layout')
@section('content')
    <div class="col-md-6 col-12 mx-auto">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Subjects
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subjects.create') }}">Add Subject</a>
                        </div>
                    </div>
                    <div class="card-body">
                        Total Subjects count: {{ $count['subjects'] ?? 0}}
                    </div>
                </div>
            </div>
            <div class="col-12" style="margin-top:20px">
            <div class="card">
                <div class="card-header">
                    Faculties
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('faculties.create') }}">Add Faculty</a>
                    </div>
                </div>
                <div class="card-body">
                    Total Faculties count: {{ $count['faculties'] ?? 0}}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
