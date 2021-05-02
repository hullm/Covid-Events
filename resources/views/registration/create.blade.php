@extends('layouts.layout')

@section('content')
<div class="wrapper">
    <h1>Fill out the form</h1>
    <div><a href="/">Return Home</a></div>
    <form action="/registration" method="POST">
        @csrf
        <div>
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">EMail Address:</label>
            <input type="text" id="email" name="email">
        </div>
            <label for="event">Select the Event:</label>
            <select name="event" id="event" name="event">
                <option value="graduation">Graduation</option>
                <option value="prom">Prom</option>
            </select>
        </div>
        <input type="submit" value="Register">
    </form>
</div>
@endsection