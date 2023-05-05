<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Proyecto Willmaca</title>
@include('willmaca.head_index')
</head>

<body>
    @include('willmaca.index_menu')

    @foreach ($categoria as $category)
    <div class="container">
        <div class="row text-center">
            <h1 class="text-center text-dark">{{ $category->nombre }}</h1>
        </div>
        <div class="row">
            <h4 class="text-center">{{ $category->descripcion }}</h4>
        </div>
    </div>
    @endforeach
    
    <div class="row product-list">
        @foreach ($producto as $product)
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="{{ asset($product->imagen) }}"></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">{{ $product->nombre}}</a></h2>
                    </div>
                    <div class="col-4"><a class="small-text" href="#">compare </a></div>
                </div>
                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                <div class="row">
                    <div class="col-12">
                        {{-- <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p> --}}
                        <p class="product-description"> {{ $product->descripcion }} </p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                            <div class="col-6">
                                <p class="product-price"> {{ $product->precio }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @include('willmaca.index_script')
</body>

</html>