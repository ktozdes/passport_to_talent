<body class="@yield('body_class')">
    <section class="hero is-fullheight is-default is-bold">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="tabs is-right">
								<ul>
                            	@yield('main_menu')

                                <li><a href="{{ URL::to('/') }}">Home</a></li>
                                <li class="employer-menu {{ request()->is('employer') ? 'is-active' : '' }}"><a href="{{ URL::route('employer') }}">Employer</a></li>
                                <li class="employer-menu {{ request()->is('company/edit/*') ? 'is-active' : '' }}"><a href="{{ URL::route('company.create') }}">Manage Company</a></li>
                                <li class="employer-menu {{ request()->is('job') || request()->is('job/*') ? 'is-active' : '' }}"><a href="{{ URL::route('job.index') }}">Jobs</a></li>


                                <li class="individual-menu {{ request()->is('individual') ? 'is-active' : '' }}"><a href="{{ URL::route('individual') }}">Search Job</a></li>
                                <li class="individual-menu {{ request()->is('individual/applied') ? 'is-active' : '' }}"><a href="{{ URL::route('individual.applied') }}">Applied Job List</a></li>
                                <li class="individual-menu {{ request()->is('individual/show') || request()->is('individual/edit/*') ? 'is-active' : '' }}"><a href="{{ URL::route('individual.show') }}">Profile</a></li>
                            	
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
        