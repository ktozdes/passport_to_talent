<body>
    <section class="hero is-fullheight is-default is-bold">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="tabs is-right">
								<ul>
                            	@yield('main_menu')
                            	@if (Route::has('login'))
			                    @auth
			                    	<li><a href="{{ url('/logout') }}">Logout</a></li>
			                    @else
			                        <li><a href="{{ route('login') }}">Login</a>
			                        @if (Route::has('register'))
			                            <a href="{{ route('register') }}">Register</a>
			                        @endif
			                        </li>
		                    	@endauth
				            	@endif
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        