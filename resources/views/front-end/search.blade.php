@extends('front-end.layouts.app_front-end')
@section('content')
    <ul>
            @foreach($searchQuery as $key => $id)
                <li>{{ $id->name }}</li>
                @endforeach

    </ul>
    @endsection
