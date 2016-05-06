@extends('layouts.master')

@section('content')
    <h2>Add a Company</h2>
    <form method='POST' action='/create'>
        {{ csrf_field() }}
        <br><br>
        <label>Date (of most recent activity):</label>
        <br>
        <input type="text" id="contact" name="contact">
        <br><br>
        <label>Name of Company: </label>
        <br>
        <input type="text" id="name" name="name">
        <br><br>
        <label>Action (i.e. "submitted resume"): </label>
        <br>
        <input type="text" id="contact" name="contact">
        <br><br>
        <label>Contact Name: </label>
        <br>
        <input type="text" id="contact" name="contact">
        <br><br>
        <label>Rating: </label>
        <br>
        <input type="text" id="rating" name="rating">
        <br><br>
        <label>Notes: </label>
        <br>
        <input type="text" id="notes" name="notes">
        <br><br><br>
        <button type="submit">Submit</button>
        <br><br>
    </form>
    <br>
@stop  