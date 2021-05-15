@extends('layout.layout')
@section('content')

    <form method="POST" enctype="multipart/form-data" action="{{route('edit_save',$applicant->id)}}">
        @method('PUT')
        <div class="box-body">
            <div class="form-group">
                <input type="text" placeholder="name" name="name" value="{{old('name', $applicant->name)}}">
            </div>
            <div>
                <input type="number" placeholder="experience_years" name="experience_years"  value="{{old('experience_years', $applicant->experience_years)}}">
            </div>
        </div>
        <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary mx-32">განახლება</button>
        </div>

    </form>
@endsection
