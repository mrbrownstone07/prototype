<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<nav id="nav" class="navbar fixed-top navbar-expand-sm navbar-light navbar-laravel bg-transparent">
    <div class="no_wrap container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item main-nav-item">
                    <a class="nav-link" href="/about_us">About Us</a>
                </li>
                <li class="nav-item main-nav-item">
                    <a class="nav-link" href="/contact_us">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item main-nav-item">
                    <a id="nav-logo" class="navbar-brand hide" href="/about_us">Maverick Eye</a>
                </li>
            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item main-nav-item">
                    <a class="nav-link" href="/faq">Projects</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link main-nav-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Services
                    </a>
                    <div class="dropdown-menu shadow-lg dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown" style="">
                        <a class="dropdown-item nav-link" href="/profile/">
                            3D
                        </a>
                        <a class="dropdown-item nav-link" href="/findPeople">
                            Interior
                        </a>
                        <a class="dropdown-item nav-link" href="/dicussion_rooms">
                            Design
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>

</script>