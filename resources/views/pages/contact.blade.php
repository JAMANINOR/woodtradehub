@extends('layouts.main')

@section('myconten')
<section class="page_banner">
    <div class="container">
      <div class="col-xl-12 text-center">
        <h2>Contact</h2>
        <div class="breadcrumbs">
          <a href="index.php">Home</a><i>|</i><span>Contact Us</span>
        </div>
      </div>
    </div>
  </section>
  <section class="commonSection contactInfoSection noPaddingBottom bgtp">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="icon_box_05">
            <i class="fal fa-map-marker-alt"></i>
            <div class="ib5_inner">
              <h3>Office Location</h3>
              <p>
                70673, banjar, kalimantan selatan, indonesia
              </p>
              <a href="#">Find Us On Map</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="icon_box_05">
            <i class="fal fa-clock"></i>
            <div class="ib5_inner">
              <h3>Office Hours</h3>
              <p>
                Mon - Fri: 09:00am to 07.00pm <span>Sat - Sun: Off Day</span>
              </p>
              <a href="#">Get Directions</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="icon_box_05">
            <i class="fal fa-phone"></i>
            <div class="ib5_inner">
              <h3>Call Us</h3>
              <p>
                +62 85754862997 <br />
              </p>
              <a href="#">Call Now</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="icon_box_05">
            <i class="fal fa-envelope"></i>
            <div class="ib5_inner">
              <h3>Email Address</h3>
              <p>
                <a href="https://themewar.com/cdn-cgi/l/email-protection" class="__cf_email__"
                  data-cfemail="afc6c1c9c0efd8cacdc2cec6c381ccc0c2">janinternationalekspor@gmail.com</a> <br /><a
                  href="https://themewar.com/cdn-cgi/l/email-protection" class="__cf_email__"
                  data-cfemail="eb82858d84ab8e938a869b878ec59c8e89c5888486">info@woodtradehub.com</a>
              </p>
              <a href="#">Mail Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="formSections">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-center">
          <h6 class="sub_title dark_sub_title ">Get In Touch</h6>
          <h2 class="sec_title dark_sec_title mb45">
            <span>Contact Form</span>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="cotactForm">
            <form id="contactForm" method="post" action="#" class="row">
              <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="iconInput">
                  <input class="required" type="text" name="con_name" id="con_name"
                    placeholder="ENTER YOUR NAME HERE" />
                  <i class="fal fa-user"></i>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="iconInput">
                  <input class="required" type="text" name="con_phone" id="con_phone"
                    placeholder="ENTER YOUR NUMBER HERE" />
                  <i class="fal fa-phone"></i>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="iconInput">
                  <input class="required" type="text" name="con_email" id="con_email"
                    placeholder="ENTER YOUR EMAIL HERE" />
                  <i class="fal fa-envelope"></i>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="iconInput">
                  <input class="required" type="text" name="con_subject" id="con_subject"
                    placeholder="ENTER YOUR SUBJECT HERE" />
                  <i class="fal fa-edit"></i>
                </div>
              </div>
              <div class="col-xl-12">
                <div class="iconInput">
                  <textarea class="required" name="con_message" id="con_message"
                    placeholder="ENTER YOUR MESSAGE HERE"></textarea>
                  <i class="fal fa-pencil-alt"></i>
                </div>
              </div>
              <div class="col-xl-12 text-center">
                <input type="submit" value="Send Message" id="con_submit" name="con_submit" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="googleMapSection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12 noPadding">
          <div class="gmap">
            <iframe id="gmap_canvas"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509861.9132957895!2d114.77471203361601!3d-3.2765344039536464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de5d051257bc191%3A0x9bf850bc4af92e66!2sKabupaten%20Banjar%2C%20Kalimantan%20Selatan!5e0!3m2!1sid!2sid!4v1679982178406!5m2!1sid!2sid"
              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
