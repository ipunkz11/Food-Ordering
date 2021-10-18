
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                @if (auth()->user()->role == 'Owner')
                <a class="nav-link" href="{{ ('tambahadmin') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Tambah Admin
                </a>
                @endif
                
                <a class="nav-link" href="{{ ('listadmin') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    List Admin
                </a>
                <a class="nav-link" href="{{ ('tambahproduct') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-plus-square"></i></div>
                    Tambah Product
                </a>
            </div>
        </div>
    </nav>
</div>