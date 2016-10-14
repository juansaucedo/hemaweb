<div class="row" id="productMain">
    <div class="col-sm-3">
        <div id="mainImage">
            <img src="http://hema.com.mx/img/renta_soldadura.jpg" alt="" class="img-responsive">
        </div>

            <div class="row" id="thumbs">
            <div class="col-xs-4">
                <a href="http://hema.com.mx/img/renta_soldadura.jpg" class="thumb">
                    <img src="http://hema.com.mx/img/renta_soldadura.jpg" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-4">
                <a href="http://hema.com.mx/img/plantadeluz.jpg" class="thumb">
                    <img src="http://hema.com.mx/img/plantadeluz.jpg" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-4">
                <a href="http://hema.com.mx/img/plasma.jpg" class="thumb">
                    <img src="http://hema.com.mx/img/plasma.jpg" alt="" class="img-responsive">
                </a>
            </div>
        </div>

    </div>
    <div class="col-sm-5">
        <div class="box">

            <form>
                <div class="sizes">

                    <h3>Nombre de artículo</h3>

                </div>

                <p class="price">$124.00</p>

                <p class="text-center">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
                </p>
                <div class="box" id="details">
                    <p>
                        <h4>Descripción</h4>
                        <blockquote>
                            <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                            </p>
                        </blockquote>
                </div>

                <div class="box social" id="product-social">
                    <h4>Show it to your friends</h4>
                    <p>
                        <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="col-md-12 col-sm-12">
            <div class="box text-uppercase">
                <h3>También te puede interesar</h3>
            </div>
        </div>
        @for($i = 0; $i < 2; $i++)
            <div class="col-md-6 col-sm-4">
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
</div>
