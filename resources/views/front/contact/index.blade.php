@extends('front.layouts.app')
    
@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Nous contacter</h1>
            <span>N'hésitez pas à nous envoyer un message dès maintenant !</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-phone"></i>
                    <h4>Phone</h4>
                    <p>
                        N'hésitez pas à nous contacter par téléphone pour toute question ou demande d'assistance. Notre équipe dévouée est là pour vous aider.
                    </p>
                    <a href="#">+ 225 27 22 25 11 14 / +225 07 77 21 32 29</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-envelope"></i>
                    <h4>Email</h4>
                    <p>
                        Vous pouvez nous contacter par email pour toute question, demande d'information ou collaboration.
                    </p>
                    <a href="#">info@fjadvisory.com</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-map-marker"></i>
                    <h4>Localisation</h4>
                    <p>
                        Cocody Angré, Bd Latrille, Face à la BHCI
                        <br />
                        08 BP 643 Abidjan 08 - Côte d'Ivoire
                    </p>
                    <a href="#">Voir sur Google Maps</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="callback-form contact-us" sy>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>
                        Envoyer-nous un <em>message</em>
                    </h2>
                    <span>N'hésitez pas à nous contacter pour toute question ou demande</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Nom complet" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Sujet" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Votre message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">
                                        Envoyer le message
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
      <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="partners contact-partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
              <div class="partner-item">
                <img src="assets/images/client-01.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
