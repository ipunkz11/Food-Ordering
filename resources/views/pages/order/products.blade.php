@extends('layouts.order.master')
@section('products')
<div class="featured-products">
    <div class="container">
        <div class="clear"></div>
        <div class="featured-items">
            <!-- Set up your HTML -->
            <div class="owl-carousel">

                @foreach ($products as $item)
                <div class="item featured1">
                    <div class="item-full animated featured1-inner  width0" >
                        {{ $item->iteration }}
                        <a href="#"><h4>{{ $item->name }}</h4></a>
                        <p>{{ $item->description }}</p>
                        <h5>Rp. {{ $item->price }}</h5>
                        <a href="{{ route('cart', ['id' => $item->id])}}" class="btn btn-cart">
                            Add To Cart
                        </a>
                        
                    </div>
                    <a href="#">
                        <img src="{{ asset('storage') }}/{{ $item->image }}" class="img img-responsive" alt="Product1">
                    </a>
                </div> <!-- Single Featured Item -->   
                @endforeach
                             
                
                <!-- Single Featured Item -->   
            </div>
        </div>
    </div>
</div> <!--End Featured products Div-->


<div class="latest-products">
    <div class="container">
        <div class="products">
            @foreach ($products as $item)
            <div class="row">
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="#">
                                <img src="{{ asset('storage') }}/{{ $item->image }}" class="img img-responsive"/>
                            </a> 

                            <div class="product-price">
                                <a href="product_single.html">{{ $item->name }}</a><br />
                                <span class="current-price">
                                   Rp. {{ $item->price }}
                                </span>
                            </div>

                            <a href="{{ route('cart', ['id' => $item->id])}}"  class="btn btn-cart text-center add-to-cart pull-right">
                                <i class="fa fa-cart-plus"></i>
                                Add to cart
                            </a>
                            
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->  
                @endforeach
            </div> <!-- End Latest products row-->
        </div> <!-- End products div-->
    </div> <!-- End container latest products-->
</div> 
@endsection