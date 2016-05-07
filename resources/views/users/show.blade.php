@extends('layouts.master')

@section('content')
    <br><br>
    <p id="subtitle">How it Works</p>
    <p>Track the important things.</p>
    <p>Organize information on the companies (or departments) you're looking at, and rate each one</p>
    <br>
    {{ Html::link('/register', 'Register', array('class'=>'button'))}}
    {{ Html::link('/login', 'Login', array('class'=>'button'))}}
@stop  