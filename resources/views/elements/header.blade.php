<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}"> <img src="{{asset('images/logo.png')}}" alt="" /> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navigations">
                <div class="topbar">
                    <ul>
                        <li>
                            <a href="{{ route('user-profile') }}">
                                <span class="icon"><i class="fas fa-user"></i></span><span class="name">{{ auth()->user()->name }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard')}}">
                                <span class="icon"><i class="fas fa-home"></i></span><span class="name">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="window.location.reload()">
                                <span class="icon"><i class="fas fa-sync-alt"></i></span><span class="name">Refresh</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin') }}">
                                <span class="icon"><i class="fas fa-wrench"></i></span><span class="name">Backend</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}"><span class="icon"><i class="fas fa-plane"></i></span><span class="name">Logout</span></a>
                        </li>
                    </ul>
                </div>
                <div class="date-time text-end"><span class="date">Friday December 10, 2021 | 01:14:33 AM</span></div>
            </div>
        </div>
    </nav>
</header>
