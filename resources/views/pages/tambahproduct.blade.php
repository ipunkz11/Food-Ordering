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
                        <h1 class="mt-4">Tambah Product</h1>
                        <div class="card mb-4">
                            </div>
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <form action={{ route('createproduct') }} method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                      </div>
                                      <div class="mb-3">
                                        <input class="form-control" type="file" name="image" required>
                                      </div>
                                      <div class="mb-3">
                                        <input type="text" class="form-control" name="price" placeholder="Price" required>
                                      </div>
                                    <div class="mb-3">
                                      <textarea class="form-control" aria-label="With textarea" name="description" required></textarea>
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