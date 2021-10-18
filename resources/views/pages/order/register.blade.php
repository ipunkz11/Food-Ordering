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

    <div class="registration-page">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Create Your Account</h2>
                    <form method="post" class="cmxform" action="" id="signUpForm">

                        <div class="form-group row">
                            <label for="firstname" class="col-sm-2 form-control-label">First Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Maniruzzaman" name="name" minlength="2" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-sm-2 form-control-label">Last Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Akash">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 form-control-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" name="email" class="form-control email" id="email" placeholder="test@example.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-sm-2 form-control-label">Username:</label>
                            <div class="col-sm-8">
                                <input type="text" name="username" class="form-control" id="username" placeholder="akash90">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 form-control-label">Password:</label>
                            <div class="col-sm-8">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirm_password" class="col-sm-2 form-control-label">Confirm Password:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Same password previously entered">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-sm-2 form-control-label">BirthDate:</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Enter Birthdate" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-8">
                                <input type="submit" class="btn btn-success btn-lg btn-block" id="submitForm" value="Sign Up Now" />
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!--End Row-->

        </div>
    </div> <!--End Registration page div-->

</div> <!-- End content Area class -->


</body>
</html>