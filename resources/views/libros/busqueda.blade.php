@if (count($libros))
    <div class="row">
        @foreach ($libros as $libro)
            <div class="input-field col s4">

                <div class="form-group">
                    <center>

                        @if (isset($libro->disponible))




                            <img class="materialboxed"
                                 src="{{ asset('genero/images/libros/' . $libro->id . '.png') }}"
                                 style="
                                                    width: 70%;
                                                   " alt="name" class="circle"
                                 title="Titulo: {{ $libro->nombre }} / Autor: {{ $libro->autor }}">





                            <a disabled class="waves-effect waves-light btn"
                               href="{{ route('solicitar', [$libros[$libro]->id]) }}"><i
                                    class="material-icons left">help</i>Disponible
                                el {{ $libros[$libro]->disponible }}</a>

                        @else

                            <img class="materialboxed"
                                 src="{{ asset('genero/images/libros/' . $libro->id . '.png') }}"
                                 style="
                                                    width: 70%;
                                                   " alt="name" class="circle"
                                 title="Titulo: {{ $libro->nombre }} / Autor: {{ $libro->autor }}">

                            <a class="waves-effect waves-light btn"
                               href="{{ route('solicitar', [$libro->id]) }}"><i
                                    class="material-icons left">cloud</i>Disponible</a>

                            <br>




                        @endif
                    </center>
                </div>
            </div>
        @endforeach
    </div>

@else
    <div class="section p-0 m-0 height-100vh section-maintenance">
        <div class="row">
            <div id="maintenance" class="col s12 center-align white">
                <img src="{{ asset('genero/images/logo/pato.png') }}" class="responsive-img maintenance-img" width="100"
                     height="100" alt="">
                <h4 class="error-code">Lo sentimos</h4>
                <h6 class="mb-2 mt-2">La búsqueda no arrojó ningún resultado.</h6>
            </div>
        </div>
    </div>
@endif



@push('scripts')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.materialboxed');
        var instances = M.Materialbox.init(elems, options);
    });
    // Or with jQuery
    $(document).ready(function () {
        $('.materialboxed').materialbox();
    });


</script>
@endpush
