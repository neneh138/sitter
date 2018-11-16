                    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
                        <div class="container">
                            <a class="navbar-brand" href="{{config('app.name', 'Sitters')}}"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                                <a class="nav-link" href="/">Sitters</a>
                                        </li>
                                </ul>
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                                <a class="nav-link" href="/sitters">Babysitters</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/parents">Parents</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/posts">Blog</a>
                                            </li>
                                    <!-- Authentication Links -->

                                    @guest
                                    
                                        <li class="nav-item">
                                            <a class="mr-2  btn btn-success btn-md" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            @if (Route::has('register'))
                                                <a class="btn btn-primary btn-md" href="{{ route('register')}}">{{ __('Register') }}</a>
                                            @endif
                                        </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
