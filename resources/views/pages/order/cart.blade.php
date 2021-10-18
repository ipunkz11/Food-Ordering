@extends('layouts.order.master')
@section('cart')
<div class="content-area">
    <div class="container">
        <div class="cart-page">
            <h2>Cart</h2>
            <form action="{{ ('checkout') }}">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50%">Item</th>
                            <th width="10%">Quantity</th>
                            <th width="20%">Unit Price</th>
                            <th width="20%">Total Price</th>
                        </tr>
                    </thead>

                    <tbody>     

                        @foreach ($carts as $item)
                        <tr>
                            <td>
                                <img src="{{ asset('storage') }}" width="50" alt="" class="img img-thumbnail pull-left">
                                <span class="pull-left cart-product-option">

                                    <strong>{{ $item->products->name }}</strong><br />
                                    <form action="cart_remove.php" method="get" accept-charset="utf-8">
                                        <input type="hidden" name="product_id" value="1">
                                        <input type="submit" class="btn btn-red btn-sm" name="" value="Remove Item">
                                    </form>

                                </span>
                                <div class="clearfix"></div>
                            </td>
                            <td><input type="number" min="1" name="product_quantity_p2" value="4" class="form-control product_quantity_p2" /></td>
                            <td>{{ $item->products->price }}</td>
                            <td><p class="total_ammount_p2">{{ $item->total_price }}</p></td>
                        </tr>
                        @endforeach 

                        <tr>
                            <td></td>
                            <td colspan="1"><strong>Total:</strong></td>
                            <td></td>
                            <td>
                                <p><span class="total_product_sum">{{ $item->total }}</span></p>
                            </td>
                            <div class="clearfix"></div>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <a href="{{ ('checkout') }}" class="btn btn-yellow btn-lg pull-right margin-bottom-20" > Continue to Check Out </a>
                                <a href="{{ ('products') }}" class="btn btn-success btn-lg pull-right margin-right-20">
                                    <i class="fa fa-plus"></i> Add More Products</a>

                                    <div class="clearfix"></div>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </form>
            </div> <!--End Cart page-->
            <script type="text/javascript">
                $(document).ready(function(){

                    var product_price_p1 = 200;
                    var product_price_p2 = 300;
                    var total_product_sum = 0;

                    $('.product_quantity_p1, .product_quantity_p2').bind('keyup mouseup change click keydown focus', (function(){

                        var quantity_p1 = $('.product_quantity_p1').val();
                        var quantity_p2 = $('.product_quantity_p2').val();

                        total_ammount_p1 = quantity_p1 * product_price_p1;
                        total_ammount_p2 = quantity_p2 * product_price_p2;

                        $('.total_product_sum').html(total_product_sum+"$");
                        $('.total_ammount_p1').html(total_ammount_p1+"$");
                        $('.total_ammount_p2').html(total_ammount_p2+"$");
                        total_product_sum = total_ammount_p1 + total_ammount_p2;
                        $('.total_product_sum').html(total_product_sum+"$");
                    }));
                });

            </script>
        </div> <!-- End Container inside Content Area -->
    </div> <!-- End content Area class -->
@endsection