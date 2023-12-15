<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-dark" style="opacity: 40%" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            @auth
                {{ Auth::user()->name }}
            @else
                No User
            @endauth
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('') }}">Anasayfa</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('about') }}">Hakkımızda</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('services') }}">Hizmetler</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('galeri') }}">Galeri</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('contact') }}">İletişim</a></li>
                <li class="nav-item">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out">Çıkış Yap</button>
                    </form>
                @else
                    @guest
                        <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Giriş yap</a>
                        <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Kayıt Ol</a>
                    @endguest
                @endauth
                
                







                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    function logout() {
        fetch("{{ route('logout') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = "{{ route('home') }}";
            }
        });
    }
</script>


