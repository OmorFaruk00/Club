@extends('layouts.master')

@section('title', 'home')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <h1>Welcome to Our Club</h1>
    <h2>We are team of talented designers making websites with Bootstrap</h2>
    <div class="d-flex">
      <a href="#about" class="btn-home">Join Our Club</a>
      {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
          class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
    </div>
  </div>
</section><!-- End Hero -->



<section>
  <div class="container my-5">
    <div class="row ">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="d-flex">
          <img src="/img/mask1.png" alt="" style="width:300px">
          <img src="/img/mask2.png" alt="" style="width:300px">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 find">
        <h4>WELCOME TO RUNCLUB</h4>
        <h1>ZUNZO - YOUR ULTIMATE RUNNING COMMUNITY</h1>
        <p>Welcome to our vibrant running community, where we organize exciting running events, provide helpful running
          tutorials, and keep you informed with the latest running news.</p>
        <div class="hr">
        </div>
        <a href="#find" class="btn-home">Get Started</a>
      </div>

    </div>
  </div>
</section>
<!-- ======= Call To Action Section ======= -->
<section id="cta" class="cta">
  <div class="section-title my-4">
    <h2>UPCOMING EVENT</h2>
  </div>
  <div class="container">


    <div class="row g-5">

      <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
        {{-- <h1>Upcoming Event</h1> --}}
        <h3>Alias sunt quas <em>Cupiditate</em> oluptas hic minima</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a class="cta-btn align-self-start" href="#">JOIN NOW</a>
      </div>

      <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
        <div class="img">
          <img src="/img/cta.jpg" alt="" class="img-fluid">
        </div>
      </div>

    </div>

  </div>
</section>
<!-- ======= course Section ======= -->
<x-course></x-course>
<!-- ======= End course Section ======= -->

<x-blog></x-blog>





<!-- ======= Team Section ======= -->
<x-team></x-team>
<!-- ======= End Team Section ======= -->
<!-- ======= Services Section ======= -->
<x-service></x-service>
<!-- ======= EndServices Section ======= -->
<!-- ======= F.A.Q Section ======= -->
<x-faq></x-faq>
<!-- End F.A.Q Section -->






@endsection