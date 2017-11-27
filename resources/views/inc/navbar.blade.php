<header class="header">
    <div class="row">
        <div class="col-12">
            <nav>              
                <ul class="nav" style="float: left;">
                    <li><a href='/' class="link")>Home</a></li>
                    <li><a href='/about' class="link")>About</a></li>
                    <li><a href='/services' class="link")>Services</a></li>
                    <li><a href='/posts' class="link")>Blog</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                     @guest
                            
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href="/home">Dashboard</a>
                                </li>
                            </ul>
                        </li>
                    @endguest   
                </ul>
            </nav>
        </div>
    </div>
</header>