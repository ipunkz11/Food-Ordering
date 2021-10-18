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
                        <h1 class="mt-4">List Admin</h1>
                        <div class="card mb-4">
                            </div>
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                        {{ $item->iteration }}
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->role }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    @include('layouts.footer')
                </body>
                </html>