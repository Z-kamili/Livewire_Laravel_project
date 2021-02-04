@extends('layouts.app')
@section('content')
<h1 class="text-3xl text-green-500 mb-3">{{$job->title}}</h1>
<div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md duration-200 rounded border-2 border-gray-300">
    <p class="text-md text-gray-800"> {{$job->description}}</p>
    <div class="flex items-center">
        <span class="h-2 w-2 bg-green-300 rounded-full mr-1"></span>
    </div>

    <span class="text-sm text-gray-600">{{ number_format($job->price / 100,2,',','')}} $</span>

</div>

<section x-data="{open:false}">
    <a href="#" class="text-green-500" @click="open = true" >
Cliquez ici pour soumettre une candidature.
    </a>
    <form class="w-full max-w-md-20 " x-show="open" method="POST" action="{{route('proposals.store',$job)}}">
        @csrf
      <textarea class="p-3 font-thin border-black" name="content"></textarea>
      <button type="submit" class="block bg-green-700 text-white px-3 py-2">Soumettre ma lettre de motivation</button>
    </form>

</section>

@endsection