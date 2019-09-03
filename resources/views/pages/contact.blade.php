@extends('layouts.secondary')

@section('styles')
    <style>
        .contact-us {
            margin: 100px auto 400px auto;
            width: 80%;
        }
    </style>
@endsection

@section('content')
    <div class="container contact-us">
        <h1 class="text-center">Contact Us</h1>
        <form action="https://formspree.io/munrovisualsmedia@gmail.com" method="POST" />
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="email" />
            </div>
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" id="feedback" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
