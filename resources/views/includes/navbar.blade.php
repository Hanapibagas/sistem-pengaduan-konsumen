<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{-- <div class="navbar-brand"> --}}
                <img class="img img-responsive" style="width: 180px; margin-top: 8px" src="{{ asset('frontend/images/Logo Disdag-hitam.png') }}"></a>
            {{-- </div> --}}
        </div>

        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="{{ route('index') }}">Beranda</a></li>
                <li role="presentation"><a href="{{ route('profile.index') }}">Profil</a></li>
                <li role="presentation"><a href="{{ route('berita.index') }}">Berita</a></li>
                <li role="presentation"><a href="about.html">Kebijakan</a></li>
                <li role="presentation"><a href="{{ route('tata-cara-pengaduan.index') }}">Tata Cara Pengaduan</a></li>
                @guest
                <li role="presentation"><a href="{{ route('informasi-registrasi.index') }}">Pengaduan</a></li>
                @endguest

                @auth
                <li role="presentation"><a href="{{ route('kirim-pengadu') }}">Pengaduan</a></li>
                @endauth

                <li role="presentation"><a href="contact.html">Kontak</a></li>

                @guest
                <li role="presentation"><a href="{{ route('login') }}">Login</a></li>
                @endguest

                @auth
                <li>
                    <form class="form-inline d-sm-block d-md-none" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn" type="submit" style="margin-bottom: 5px">
                        Keluar
                        </button>
                    </form>
                    </form>
                </li>
                @endauth

            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
