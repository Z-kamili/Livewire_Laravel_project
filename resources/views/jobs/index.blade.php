@extends('layouts.app')
@section('content')
<h1 class="text-3xl text-green-500 mb-3">Nos derniers missions</h1>

@foreach ($jobs as $job)

 <livewire:job :job="$job"/>

@endforeach


@endsection