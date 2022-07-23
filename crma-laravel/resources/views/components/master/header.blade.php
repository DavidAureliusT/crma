<div class="header">
    <!-- Logo -->
    <div class="header-left">
        <a href="{{ route("crews.index") }}" class="logo ">
            <img src="{{ asset("images/ENL-logo.png") }}" height="30" alt="ENL-logo">
        </a>
    </div>
    <!-- /Logo -->
    <!-- Header Title -->
    <div class="page-title-box">
        <h3>Eka Nusantara Line</h3>
    </div>
    <!-- /Header Title -->
    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
    <!-- Header Menu -->
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img">
                    <img src="{{ asset("images/crew_default_image.jpeg") }}">
                    <span class="status online">
                    </span>
                </span>
                <span>Admin Name</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" >Logout</a>
            </div>
        </li>

    </ul>
    <!-- /Header Menu -->
    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" >Logout</a>
        </div>
    </div>
    <!-- /Mobile Menu -->
</div>