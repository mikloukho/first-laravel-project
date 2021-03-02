@extends('layouts.app')

@section('title') Edit message @endsection

@section('content')

    <h1>Edit</h1>

    <form action="{{ route('contacts-form-update', $data->id) }}" method="POST">
        @csrf  

        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" name="name" placeholder="Name" id="name" class="form-control" value="{{ $data->name }}">
        </div>

        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="text" name="email" placeholder="Email" id="email" class="form-control" value="{{ $data->email }}">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control" value="{{ $data->subject }}">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Your message" class="form-control">{{ $data->message }}</textarea>
        </div>
        
        <button class="btn btn-success">Update</button>
    </form>
@endsection