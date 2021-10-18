<!DOCTYPE html>
<html lang="en">
    
@include('layouts.head')
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="mb-4 img-error" src="sbadmin/assets/img/error-404-monochrome.svg" />
                                    <p class="lead">This requested URL was not found on this server.</p>
                                    <a href="dashboard">
                                        <i class="fas fa-arrow-left me-1"></i>
                                        Return to Dashboard
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        @include('layouts.footer')
    </body>
    </html>
