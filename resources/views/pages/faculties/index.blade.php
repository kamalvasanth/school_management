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
            Faculties
            <div class="float-right">
            <a class="btn btn-primary" href="{{route("faculties.create")}}">Add Faculty</a>
          </div>
        </div>

        <div class="card-body table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($faculties as $faculty)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$faculty->name}}</td>
                <td>{{$faculty->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@stop