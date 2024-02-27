<!-- resources/views/contact.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Us</h1>
        <p>Feel free to contact us using the form below:</p>
        <form method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection


@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif