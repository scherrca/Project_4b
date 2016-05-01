@extends('layouts.master')

@section('header')
    <h1>Career Set</h1>
    <h2>Set Yourself up for Success</h2>
@stop

@section('content')
    <br><br>
    <br><br>
    {{ Html::link('/lorem', 'Placeholder1', array('class'=>'button'))}}
    {{ Html::link('/user', 'Placeholder2', array('class'=>'button'))}}    
    <br><br>
    <br><br>
    <p id="subtitle">How it Works</p>
    <p>Track the important things.</p>
    <p>Organize information on the companies (or departments) you're looking at, and rate each one</p>
    <br>
@stop  