@extends('layouts.master')
@section('content')

    <h1>Profiles <a href="{{ url('/profile/create') }}" class="btn btn-primary pull-right btn-sm">Add New Profile</a></h1>
    <div class="table" id="main">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Category</th><th>Description</th><th>Phone</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($profiles as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>
                        {{ $x }}
                    </td>
                    <td>
                        <a href="{{ url('/profile', $item->id) }}">{{ $item->category }}</a>
                    </td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <a href="{{ url('/profile/'.$item->id.'/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> / {!! Form::open(['method'=>'delete','action'=>['ProfileController@destroy',$item->id], 'style' => 'display:inline']) !!}
                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                        {!! Form::close() !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
