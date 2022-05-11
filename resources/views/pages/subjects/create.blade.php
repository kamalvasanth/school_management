@extends('layout')
@section('content')
<div class="col-md-6 col-6 mx-auto">

    <div class="card  shadow my-auto">
        <div class="card-header bg-dark text-white font-weight-bolder font-size-h2">
            Add Subject
        </div>
        <div class="card-body">
            <form action="{{route('subjects.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold font-size-h6" for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter  Name" required>
                </div>
                    <div class="alert alert-danger mt-3" id="name-validation"></div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="form-group">
                      <label for="term_id" class="font-weight-bold">Term</label>
                        <select title="term" class="form-control metadata-control form-control-solid" name="term_id">
                            <option selected disabled>Select Term</option>
                        @foreach($terms as $term)
                        <option value="{{$term->id}}">{{$term->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('term_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
    

@stop

@section('scripts')
<script>
    $(document).ready(function() {
        $('#name-validation').hide();
        $('#name').focusout(function() {
            if ($(this).val() == '' || $(this).val() == "null") {
                $('#name-validation').text('The name field cannot be empty!');
                $('#name-validation').show();
            } else {
                if ($(this).val().length > 200) {
                    $('#name-validation').show();
                    $('#name-validation').text('The Name field cannot be more than 200 characters!');
                } else {
                    $('#name-validation').hide();
                }
            }
        })
    });
</script>
@stop