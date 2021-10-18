<!DOCTYPE html>
<html>
@include('layouts.order.head')
<body>
    <div class="wrapper">
        <!-- Header part  -->
        <div class="header" id="top">
            <!-- Start Top Header -->
            @include('layouts.order.breadcumb')
            <!-- End Top Header -->


            <!-- Start Header Main, logo, search bar,cart -->
            <!-- End Model -->

        </div>
    </div>
    <!-- End Header Main, logo, search bar,cart -->


<div class="content-area">

    <div class="login-page">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Sign In Your Account</h2>
                    <form method="post" class="cmxform" action="" id="loginForm">

                        <div class="form-group row">
                            <label for="username" class="col-sm-2 form-control-label">Username/Email:</label>
                            <div class="col-sm-8">
                                <input type="text" name="username" class="form-control" id="username" placeholder="akash90" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 form-control-label">Password:</label>
                            <div class="col-sm-8">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required />
                            </div>
                        </div>

                        <div class="form-group row col-sm-offset-2">

                            <input type="checkbox" id="remember" name="remember" />
                            <label for="remember" style="color:#093; font-weight: normal"><span style="opacity:.5"></span>Remember Me</label><br />
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-8">
                                <input type="submit" class="btn btn-success btn-lg btn-block" id="submitForm" value="Sign In" />
                            </div>
                        </div>

                        <div class="forget">
                            <p class="pull-left"><a href="forgot_password.html">Forgot Password</a></p>
                            <p class="pull-right">Not a memeber yet.. 
                                <a href="register.html">Create a new account</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>

                    </form>

                    


                </div>
            </div> <!--End Row-->

        </div>
    </div> <!--End Registration page div-->

</div> <!-- End content Area class -->


</body>
</html>