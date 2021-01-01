<div class="inline-block" x-data="{open:true}">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <input @click.away="{open = false;@this.resetIndex();}" 
    @click="{open = true }" 
    class="bg-gray-200 text-gray-700 border-2 focus:outline-none rounded-full w-56" 
    wire:model="query" 
    placeholder="Rechercher une mission..." 
    wire:keydown.arrow-down.prevent="IncrementIndex" 
    wire:keydown.arrow-up.prevent="decrementIndex"
    wire:keydown.backspace="resetIndex"
    wire:keydown.enter.prevent="ShowJob"
    >

<div  class="absolute border gb-gray-100 text-md w-56 mt-1" x-show="open">
@if( strlen($query) > 2)
    <div>
     @if(count($jobs) > 0)
        @foreach ($jobs as  $index => $job)
    <p class="p-1 {{$index == $selectedIndex ? 'text-green-500' : ''}}">{{ $job->title }}  </p>
        @endforeach
    @else
    <span class="text-orang p-1"> 0 résultas pour "{{$query}}"</span>
    @endif 
</div>
@endif

</div>


</div>
