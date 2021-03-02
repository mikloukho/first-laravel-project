@extends('layouts.app')

@section('title') Messages page @endsection

@section('content')
    <h1>Messages</h1>
    
    @foreach ($data as $value)
        <div class="alert alert-info">
            <h3>{{ $value->subject }}</h3>
            <p>{{ $value->email }}</p>
            <p><small>{{ $value->created_at }}</small></p>
            <a href="{{ route('contacts-data-one', $value->id) }}"> <button class="btn btn-primary">More</button> </a>
        </div>
    @endforeach
@endsection