@component('components.layout')
    @slot('title')
        HOME
    @endslot
@endcomponent
<header>
    @php
        $items = [['route' => '/', 'text' => 'HOME'],
                 ['route' => '/pedidos', 'text' => 'PEDIDOS'],
                 ['route' => '/reservar', 'text' => 'RESERVAR'],
                 ['route' => '/menu', 'text' => 'MENU']];
                 
    @endphp
    <x-barranavegacion :items="$items"></x-barranavegacion>
    {{-- @include('components.barranavegacion') --}}


<main>
    <div class="Contenedorheader">
        
        <h1 class="CINTE">CINTÉOLT</h1>
        <p class="Descripcion">Un buen restaurante ofrece la comida de mejor calidad
            <br />en un lugar magico, CINTÉOTL cuenta con un ambiente
            <br />agradable, ademas de una gran variedad de comida
            <br />deliciosa y saludable. Pulsa el boton para conocer
            <br />nuestra historia...
        </p>
        <button class="Conocenos">CONOCENOS</button>
        <img class="LogoPrincipal" width="320px" src="https://images.pexels.com/photos/6896393/pexels-photo-6896393.jpeg?cs=srgb&dl=pexels-eiliv-aceron-6896393.jpg&fm=jpg" alt="">
        <img class="LogoPrincipal" width="25px" src="" alt="">
    </div>
    </header>
    <section class="separacion"></section>
    <main class="cajamain">
    <section class="CarrucelSection">
        <img class="fondocarrucel" width="250px" src="https://images.pexels.com/photos/842545/pexels-photo-842545.jpeg?cs=srgb&dl=pexels-valeria-boltneva-842545.jpg&fm=jpg" alt="">
       
        <p class="textolugares">Creando experiencias unicas 
            <br />para tu paladar</p>
    </section>
    </main>
    <section class="separacion"></section>
    <footer>
 @component('components.footer')
       
   @endcomponent
    </footer>
  
</main>
