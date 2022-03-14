<ul class="sidenav sidenav-collapsible  leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
    data-menu="menu-navigation" data-collapsible="menu-accordion">
    <h1 class="logo-wrapper img">
        <a class="brand-logo center darken-1" style="color: #000000; text-align: center !important;" href="">
            <img src="{{ asset('genero/images/libros/logo_legislatura.png') }}" alt=" avatar" width="100%"/>
        </a>
    </h1>

    <li><a href="{{route('home')}}"><i class="material-icons ">home</i><span data-i18n="Modern Menu">Inicio</span></a></li>
    @if(auth()->user()->rfc =='DEGC941209' || auth()->user()->rfc =='DIRG940621' || auth()->user()->rfc =='MATD810802' || auth()->user()->rfc =='DOOJ900120')
        {{-- <li><a href="{{route('solicitudes')}}"><i class="material-icons ">book</i><span data-i18n="Modern Menu">Libros</span></a></li> --}}
        <li><a href="{{route('control')}}"><i class="material-icons ">insert_chart</i><span data-i18n="Modern Menu">Estatus</span></a></li>
{{--        <li><a href="{{route('libros.index')}}"><i class="material-icons ">book</i><span data-i18n="Modern Menu">Prestamo de Libros</span></a></li>--}}
    @endif
    <li><a href="{{route('historico')}}"><i class="material-icons ">assignment_ind</i><span data-i18n="Modern Menu">Mis libros</span></a></li>
</ul>

