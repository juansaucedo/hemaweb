@for($i = $index; $i < $limit; $i++)
@if($i < $tam)
    <div class="col-md-3 col-sm-3 col-linea-articulos">
        <div class="team-member" data-animate="fadeInUp">
            <div class="image">
                <a href="{{ route('productos') }}">
                    <img src="http://hema.com.mx/img/soldar.jpg" alt="" class="img-responsive img-circle">
                </a>
            </div>
            <h3><a href="{{ route('productos') }}">Test</a></h3>
            {{-- <p class="role">Alguna característica interesante </p>                             --}}
        </div>
        <!-- /.team-member -->
    </div>
@else
    
@endif

@endfor