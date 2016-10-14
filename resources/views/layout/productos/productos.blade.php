<div id="content">
            <div class="container">
                <p class="text-muted lead text-center">CONTAMOS CON 30 AÑOS DE EXPERIENCIA EN LA VENTA DE EQUIPOS PARA SOLDAR. MANEJAMOS LAS SOLDADORAS DE LAS MEJORES MARCAS PARA TODOS LOS PROCESOS (MIG, TIG, STICK, ARCO, SUMERGIDO)</p>

                <div class="row products">

                    @for($i = 0; $i < 4; $i++)
                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="image">
                                    <a href="{{ route('producto') }}">
                                        <img src="http://hema.com.mx/img/renta_soldadura.jpg" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="shop-detail.html">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                    <br><br>
                                        <a href="{{ route('producto') }}" class="btn btn-default">Ver detalles</a>
                                        <a href="{{ route('producto') }}" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                    @endfor
                </div>
                <!-- /.products -->

                <div class="col-sm-12">

                    <div class="pages">
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /.col-sm-12 -->

            </div>
            <!-- /.container -->
        </div>