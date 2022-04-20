<!-- App Header -->
<nav>
    <div class="appHeader bg-success scrolled navbar navbar-dark shadow fixed-top ">
        <div class="left">
            <img src="" alt="LOGo">
        </div>
        <div class="pageTitle">
            Discover
        </div>
        <div class="right">
            @guest
            <a href="{{ route('login') }}" class="btn btn-success">Accedi/registrati</a>
            @else
                <a id="navbarDropdown" class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name . ' ' . Auth::user()->surname}}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
        
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
        
                <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-right">
                    <ion-icon name="notifications-outline"></ion-icon>
                    <span class="badge badge-danger">8</span>
                </a>
            @endguest
            
            
            <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
            <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->
    
    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->
</nav>

 <!-- Offcanvas Right -->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-right">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title  d-flex align-items-center fs-5 fw-bold">Notifications &nbsp; <ion-icon name="notifications-outline"></ion-icon></h5>
        <a href="#" class="offcanvas-close" data-bs-dismiss="offcanvas">
            <ion-icon name="close-outline"></ion-icon>
        </a>
    </div>
    <div class="offcanvas-body">
        <ul class="listview image-listview">
            <li>
                <div class="item">
                    <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                    <div class="in">
                        <div>Edward Lindgren</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                    <div class="in">
                        <div>Emelda Scandroot</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <img src="assets/img/sample/avatar/avatar5.jpg" alt="image" class="image">
                    <div class="in">
                        <div>Henry Bove</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- * Offcanvas Right -->