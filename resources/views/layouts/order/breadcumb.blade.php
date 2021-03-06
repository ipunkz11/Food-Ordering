<div class="header" id="top">

    <!-- Start Header Main, logo, search bar,cart -->
    <div class="top-header">
        <div class="container">
            <div class="header-logo pull-left">
                <a href="{{ 'dashboard' }}">
                    <img src="{{ asset('order/images/logo.png') }}" alt="Your Shop Logo" class="img img-responsive">
                </a>
            </div>

            <div class="header-search pull-left">
                <form action="#" method="post">
                    <input type="search" name="Search" placeholder="Search for a Product..." required="">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                </form>
            </div>

            <!-- Cart Modal -->
            <div id="cart-item" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;
                    </button>
                    <h4 class="modal-title">Cart Products</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item Name</th>
                                <th>Item Image</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Digital Camera</td>
                                <td><img src="{{ asset('order/images/product-slide/product2.png') }}" class="img img-responsive img-thumbnail" alt=""></td>
                                <td>3</td>
                                <td>200$</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Samsung Galaxy 7</td>
                                <td><img src="{{ asset('order/images/product-slide/product3.png') }}" class="img img-responsive img-thumbnail" alt=""></td>
                                <td>1</td>
                                <td>500$</td>
                            </tr>
                            <tr>
                                <td colspan="5" rowspan="5">
                                    Total Price <span class="bold text-primary" style="margin-left: 73%">800$</span>
                                </td>
                            </tr>
                            <div class="clearfix"></div>
                        </tbody>
                    </table>
                    <p class="text-right text-danger">There are <span style="font-weight: bold">2</span> more products in the cart. Click Checkout now to buy the items..</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel
                    </button>
                    <a href="cart.html" class="btn btn-yellow">Check Out</a>
                </div>
            </div>

        </div>
    </div> <!-- End Model -->

</div>
</div>