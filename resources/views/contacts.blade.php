@extends('layouts.app')

@section('title') Contacts page @endsection

@section('content')

    <h1>Contacts page</h1>

    <form action="{{ route('contacts-form') }}" method="POST">
        @csrf  

        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" name="name" placeholder="Name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="text" name="email" placeholder="Email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Your message" class="form-control"></textarea>
        </div>
        
        <button class="btn btn-success">Submit</button>
    </form>
@endsection