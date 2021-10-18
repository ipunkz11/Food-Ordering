<!DOCTYPE html>
<html lang="en">
    
@include('layouts.head')

    <body class="sb-nav-fixed">
        @include('layouts.navbar')

        <div id="layoutSidenav">
            @include('layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Admin</h1>
                        <div class="card mb-4">
                            </div>
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <form action={{ route('createadmin') }} method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                                      </div>
                                      <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                      </div>
                                      <div class="mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                      </div>
                                    <div class="mb-3">
                                      <input type="hidden" class="form-control" name="role" value="Admin">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    @include('layouts.footer')
                </body>
                </html>