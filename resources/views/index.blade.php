@extends('layout.layout')
@section('content')

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>ACTION</th>
    </tr>
    </thead>
    <tbody>
@foreach($applicants as $applicant)
        <tr>
            <td>{{$applicant->id}}</td>
            <td>{{$applicant->name}}</td>
            <td>{{$applicant->surname}}</td>
            @if($applicant->is_hired)
            <td>
                <form action="{{route('hired', $applicant->id)}}" method="POST">
                    @csrf
                    <button type="submit">hired</button>
                </form>
            </td>
            @else
                <td>
                    <form action="{{route('hired', $applicant->id)}}" method="POST">
                        @csrf
                        <button type="submit">hire</button>
                    </form>
                </td>
            @endif
            <td>
                <button type="submit"><a href="{{route('edit', $applicant->id)}}">EDIT</a></button>
            </td>
            <td>
                <form action="{{route('delete', $applicant->id)}}" method="POST">
                    @csrf{{method_field('delete')}}
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
@endforeach
    </tbody>
</table>
@endsection
