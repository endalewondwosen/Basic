<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ route('home') }}"><span>Com</span>pany</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('home') }}">Home</a></li>

          <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="{{ URL('/pages/about') }}">About Us</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="{{ URL('/pages/service') }}">Services</a></li>
          <li><a href="{{ URL('portfoloio') }}">Portfolio</a></li>
          <li><a href="{{ route('price') }}">Pricing</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <li><a href="{{ route('pages.contact') }}">Contact</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ URL('register') }}">Register</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="https://twitter.com/" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://facebook.com/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://instagram.com/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://linkedin/com/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header>