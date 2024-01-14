@extends('layouts.master')

@section('title', 'contact')

@section('content')
<section id="page" class="d-flex align-items-center">
    <div class="container">
      <h1>Contact Us</h1>
     
    </div>
  </section><!-- End Hero -->

  <div class="my-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13009.818348000597!2d90.44366213125193!3d23.79167269943856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c775164bf631%3A0x97f48a5be913a9fc!2sDhaka%20International%20University%20(DIU)%20~%20SatarKul!5e0!3m2!1sen!2sbd!4v1704977512406!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

<div class="container">
    <div class="row my-5">
        <div class="col-lg-4">
            <div class="contact">
                <h4>CONTACT US</h4>
                <h1>GET IT TOUCH</h1>
                <p>In the 14 years since she first graced our screens in Keeping Up With The Kardashians.</p>

                <h6>PHONE:</h6>
                <h5>(555) 123-4567</h5>
                <h6>EMAIL:</h6>
                <h5>club@gmail.com</h5>
                <h6>LOCATION:</h6>
                <h5>710 1st St. Easton, PA 18042 <i class="fas fa-user" aria-hidden="true"></i></h5>
            </div>
            
    
        </div>
        <div class="col-lg-8">
            <div class="contact-form">
                
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="your name">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="your email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Telephone">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Age">
                        </div>
                    </div>
                  
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Message" style="width:100%;height:150px"></textarea>
                    </div>
                    <a type="submit" class="btn-home">Join Now</a>
                </form>

            </div>

        </div>
    
      </div>
</div>
@endsection