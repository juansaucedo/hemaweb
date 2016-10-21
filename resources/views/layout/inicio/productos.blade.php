<section class="bar background-white no-mb">
    <div class="container">
        <div class="col-md-12">
            <div class="heading text-center">
                <h2>Productos</h2>
            </div>
            
            @for($i = 0; $i < count($lineas); $i = $i + $colLineas)
                <div class="row">
                    @include('layout.inicio.lineas.col', ["index" => $i, "tam" => count($lineas), "limit" => $i + $colLineas, "lineas" => $lineas])
                </div>
            @endfor            
            <!-- /.row -->
        </div>
    </div>
</section>