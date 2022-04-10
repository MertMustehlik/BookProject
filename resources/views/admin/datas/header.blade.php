<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <p class="navbar-brand" href="#">@yield('title')</p>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form class="navbar-form">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                        <i class="material-icons">person</i>
                        <p>
                            <span class="d-lg-none d-md-block">Account</span>
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->