<header>
    <!--header top-->
    <div class="header-top">
        <div class="container">
            <ul class="nav-header-top">
                <li>
                    <a href="#">DC Power™ Visa®</a>
                </li>
                <li>
                    <a href="#">Additional DC Sites &#9660</a>
                </li>
            </ul>
        </div>
    </div>

    <!--Header bottom -->
    <div class="header-bottom">
        <div class="container">
            <!-- Start Logo -->
            <div class="logo">
                <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo">
            </div>
            <!-- End Logo -->

            <!-- Start Nav -->
            <nav>
                <ul class="menu">
                    <li><a href="#">Characters</a></li>
                    <li class="{{Request::route()->getName() == 'home' || Request::route()->getName() == 'comic' ? 'active' : ''}}">
                        <a href="{{ route('home') }}">Comics</a>
                    </li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Tv</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Collectibles</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Fans</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Shop <span>&#9660</span></a></li>
                </ul>
            </nav>

            
                <div class="search"> 
                    <input type="text" placeholder="Search"> 
                    <i class="fas fa-search"></i>
                </div>
           
            <!-- End Nav -->

        </div>
    </div>
    <!-- End Header Bottom -->

    <!-- Start Jumbotron -->
    <div class="jumbotron"></div>
    <!-- End Jumbotron -->
</header>