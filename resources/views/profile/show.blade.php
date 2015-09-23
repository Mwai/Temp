@extends('layouts.master')
@section('content')
    <h1>Profile</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Category</th><th>Description</th><th>Phone</th>
            </tr>
            <tr>
                <td>{{ $profile->id }}</td> <td> {{ $profile->category }} </td><td> {{ $profile->description }} </td><td> {{ $profile->phone }} </td>
            </tr>
        </table>
    </div>

@endsection
