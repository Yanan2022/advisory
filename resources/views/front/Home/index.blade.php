
@extends('front.layouts.app')
    
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>
                  F&J ADVISORY
                  </h6>
                  <!-- <h4>Financial Analysis<br>&amp; Consulting</h4> -->
                  <p>
                  est un cabinet panafricain de conseil en management et de formation ayant pour vision de contribuer de manière tangible au développement des économies de l’Afrique sub-saharienne par la fourniture de services de conseil aux standards internationaux.
                  </p>
                  <!-- <a href="contact.html" class="filled-button">contact us</a> -->
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
            <span>Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</span>
          </div>
          <div class="col-md-4">
            <a href="contact.html" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div> -->

    <div class="more-info">
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="assets/images/more-info-01.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <span>QUEL EST VOTRE QI FINANCIER ?</span>
                                <h2>
                                    Testons votre QI Financier <em>en 5 minutes !</em>
                                </h2>
                                <p>
                                    Evaluons ensemble votre niveau de connaissance de la finance en cinq minutes.
                                    Équiper les PME et entrepreneurs africains des meilleurs outils pratiques de gestion moderne en offrant des services de conseil et de formation adaptés.
                                </p>
                                <a href="#" class="filled-button button-annimate">
                                    Allons-y
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>


<div class="more-info" style="background-color: #07559E;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content" style="background-color: #07559E;">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/images/objectif.png" style="height: 227px; margin-left:142px" alt="" />
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <h1
                                    ref={titleRef}
                                    style="
                                        margin-left: -220px;
                                        color: white;
                                        font-size: 60px;
                                        transition: opacity 1s, transform 1s;
                                    "
                                >
                                    Notre mission<em></em>
                                </h1>
                                <p
                                    ref={paragraphRef}
                                    style="
                                        margin-left: -220px;
                                        color: white;
                                        font-size: 18px;
                                        transition: opacity 1s, transform 1s;
                                    "
                                >
                                    Équiper les PME et entrepreneurs africains des meilleurs outils pratiques
                                    <br />
                                    de gestion moderne en offrant des services de conseil et de formation adaptés.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1>
                        <em>Nos Métiers</em>
                    </h1>
                    <span>Une expertise internationnale au service des entreprises africaines</span>
                </div>
            </div>
            <div class="col-md-3 hoverable">
                <div class="service-item">
                    {{-- <img src="assets/images/service_04.jpg" style="height: 131px !important;" alt="" /> --}}
                    <div class="down-content">
                        <center>
                            <h4>Accompagnement de projet d'investissemnt</h4>
                        </center>
                        <p>
                            L'accompagnement de projet d'investissement implique la supervision et la coordination des opérations.
                        </p>
                        <br><br>
                        {{-- <a href="{{ route('accompagnement-projet') }}" class="filled-button" style="margin-top: 13px;">
                            En savoir plus
                        </a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 hoverable">
                <div class="service-item">
                    {{-- <img src="assets/images/service_01.jpg" alt="" /> --}}
                    <div class="down-content">
                        <center>
                            <h4>Conseil financier</h4>
                            <br><br>
                        </center>
                        <p>
                            Le conseil financier englobe la supervision et la coordination des activités opérationnelles liées à la gestion des opérations. Il s'agit d'optimiser les processus et les...
                        </p>
                        {{-- <a href="{{ route('conseil-financier') }}" class="filled-button">
                            En savoir plus
                        </a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 hoverable">
                <div class="service-item">
                    {{-- <img src="assets/images/service_02.png" alt="" /> --}}
                    <div class="down-content">
                        <center>
                            <h4>Amélioration de la performance opérationnelle</h4>
                        </center>
                        <p>
                            L'amélioration de la performance opérationnelle est une démarche visant à optimiser les processus...
                        </p>
                        <br>
                        <br>
                        {{-- <a href="{{ route('amelioration-performance') }}" class="filled-button" style="margin-top: 10px;">
                            En savoir plus
                        </a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 hoverable">
                <div class="service-item">
                    {{-- <img src="assets/images/service_03.png" alt="" /> --}}
                    <div class="down-content">
                        <center>
                            <h4>Formation en gestion</h4>
                            <br>
                        </center>
                        <p>
                            La formation en gestion est essentielle pour développer les compétences nécessaires à la gestion efficace des ressources au sein d'une organisation.
                        <br>
                        {{-- <a href="{{ route('formation-gestion') }}" class="filled-button">
                            En savoir plus
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>


{{-- <div class="more-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="assets/images/more-info.jpg" style="height: 400px" alt="" />
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <span>Qui nous sommes?</span>
                                <h2>
                                     <em>A propos de nous</em>
                                </h2>
                                <p>
                                    Nous sommes une entreprise passionnée et engagée qui se spécialise dans la fourniture de solutions innovantes pour répondre aux besoins
                                    de nos clients.
                                    <br />
                                    <br />
                                    Équiper les PME et entrepreneurs africains des meilleurs outils pratiques de gestion moderne en offrant des services de conseil et de formation adaptés.
                                </p>
                                <a href="/about" class="filled-button">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


    

    <!-- <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="assets/images/more-info.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>Who we are</span>
                    <h2>Get to know about <em>our company</em></h2>
                    <p>Curabitur pulvinar sem a leo tempus facilisis. Sed non sagittis neque. Nulla conse quat tellus nibh, id molestie felis sagittis ut. Nam ullamcorper tempus ipsum in cursus<br><br>Praes end at dictum metus. Morbi id hendrerit lectus, nec dapibus ex. Etiam ipsum quam, luctus eu egestas eget, tincidunt</p>
                    <a href="#" class="filled-button">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>George Walker</h4>
                  <span>Chief Financial Analyst</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>John Smith</h4>
                  <span>Market Specialist</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <span>Chief Accountant</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <span>Marketing Head</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Request a <em>call back</em></h2>
              <span>Etiam suscipit ante a odio consequat</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    {{-- <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="1" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="4" alt="4">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="5" alt="5">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <script>
      window.addEventListener('scroll', function() {
          var button = document.querySelector('.button-annimate');
          var buttonPosition = button.getBoundingClientRect().top;
          var screenPosition = window.innerHeight / 1.5;

          if (buttonPosition < screenPosition) {
              button.classList.add('show');
          }
      });
    </script>
@endsection

