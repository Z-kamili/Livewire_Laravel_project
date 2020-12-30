@extends('layouts.app')
@section('content')
<h1> Welcom   {{auth()->user()->name}} </h1>
@endsection

