<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/variables.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

  <title>club</title>
</head>

<body>
  <style>
    .footer-top {
      background: #000 !important;
      /* background: linear-gradient(to right, #008080, #135C51) !important;
  /* Replace #008080 and #135C51 with your desired gradient colors */
      color: #fff !important;
    }

    .footer-contact p {
      color: #fff !important;
    }

    .footer-links ul li a,
    i {
      color: #fff !important;
    }

    .footer-links h4 {
      color: #fff !important;
    }

    #footer {
      background: #191919 !important;
    }

    .copyright {
      height: 30px;
    }

    .copyright p {
      color: #fff;
      padding-top: 15px;
    }

    .nav-link:hover {
      color: #C3E92E;
    }
  </style>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a
            href="mailto:contact@example.com">club.diu@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+880170000 </span></i>
      </div>

      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter" target="_blank"><img src="img/icon/fb.png" alt="" class="icon"></a>
        <a href="#" class="twitter" target="_blank"><img src="img/icon/ins.png" alt="" class="icon"></a>
        <a href="#" class="twitter" target="_blank"><img src="img/icon/youtube.png" alt="" class="icon"></a>
        <a href="#" class="twitter" target="_blank"><img src="img/icon/twiter.png" alt="" class="icon"></a>

      </div>
    </div>
  </section>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="/img/logo1.png" alt="" style="height:80px;width:100px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blog')}}">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    @yield('content')
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="" class=""><img src="/img/logo1.png" alt="" style="width:120px;;height:60px"></a>
            <p>
              House# 04, Road# 01, Block# F,<br>
              Banani, Dhaka 1213, Bangladesh.<br>
              <br>
              <strong>Phone:</strong> +8801718200985<br>
              <strong>Email:</strong> bcgd.diu@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>QUICK LINKS</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="" target="_blank">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="" target="_blank">Our Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="" target="_blank">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>PAGE</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" target="_blank">Event</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" target="_blank">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" target="_blank">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" target="_blank">Contact</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Get in touch our social network for more information.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><img src="img/icon/fb.png" alt="" class="icon"></a>
              <a href="#" class="facebook" target="_blank"><img src="img/icon/ins.png" alt="" class="icon"></a>
              <a href="#" class="facebook" target="_blank"><img src="img/icon/youtube.png" alt="" class="icon"></a>
              <a href="#" class="facebook" target="_blank"><img src="img/icon/twiter.png" alt="" class="icon"></a>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-flex justify-content-center">
      <div class="copyright">
        <p class=""> © 2023 <strong>DIU</strong>. All rights Reserved. | Developed & Powered by: <strong>IT-Team,
            DIU</strong></p>

        {{-- &copy; Copyright <strong><span></span></strong>. All Rights Reserved --}}
      </div>

    </div>
  </footer><!-- End Footer -->

</body>

</html>