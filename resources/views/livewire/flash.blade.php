<div x-data="{open:false}" @flash-message.window="open = true; setTimeout(()=>{open = false , 3000 });">
   <div x-show="open" class="border-2 text-red-700 bg-red-200 font-semibold px-1 py-2 rounded">

       Message d'erreur

   </div>
</div>
