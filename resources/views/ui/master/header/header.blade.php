<header>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <i class="fas fa-school fa-3x mx-3"></i> School
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="mr-auto"></div>
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Akademik<span class="sr-only">(current)</span></a>
                    <div class="dropdown">
                        <a href="#" class="nav-link">Humas</a>
                        <div class="dropdown-content">
                            <a href="#">menu 1</a>
                            <a href="#">menu 2</a>
                            <a href="#">menu 3</a>
                            <a href="#">menu 4</a>
                        </div>
                    </div>
                    </a>
                    <a class="nav-link" href="#">Keahlian</a>
                    <a class="nav-link" href="#">Keuangan</a>
                </div>
            </div>
        </nav>
    </div>


    <div class="container text-center">
        @yield('content')
    </div>
</header>