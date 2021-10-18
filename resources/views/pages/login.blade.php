<!DOCTYPE html>
<html lang="en">
    
@include('layouts.head')
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            @if (session()->has('Error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('Error') }}
                              </div>
                            @endif

                            @if (session()->has('LoginError'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('LoginError') }}
                              </div>
                            @endif
                            <div class="card shadow-lg border-0 rounded-lg mt-5 ">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                    <form action="{{ 'login' }}" method="POST">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" placeholder="name@example.com" required value="{{ old('email') }}"/>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" required/>
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" >login</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href={{ ('register') }}>Need an account? Sign up!</a></div>
                                </div>
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
