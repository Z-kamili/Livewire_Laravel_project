<header class="flex justify-between items-center py-5">

    <div class="mr-5 text-black" >LOGO</div>

    <nav>

        
       @guest

         <a href="{{ route('login')    }}" class="mr-5 hover:text-green text-black">Se connecter</a>
         <a href="{{ route('register') }}" class="mr-5 hover:text-green">S'enregistrer</a>
       @else
       <a href="#" class="mr-5 hover:text-green text-black">Nos Missions </a>
         <a href="{{ route('home') }}" class="mr-5 hover:text-green text-black">Tableau de bord</a>
         <a href="{{ route('logout') }}" class="mr-5 hover:text-green text-black" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Se déconnecter</a>
         <form id="logout-form" method="POST" action="{{route('logout')}}" style="display:none;">
        @csrf
        </form> 
        
        
       @endguest
        

    </nav>


</header>