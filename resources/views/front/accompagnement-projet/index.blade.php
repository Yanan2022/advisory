@extends('front.layouts.app')
    
@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Accompagnement de projet d’investissement</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services" style="margin-bottom: 10px">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
            <li>
              <a href='#tabs-4'>ANALYSES SECTORIELLES <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>LANCEMENT DE PROJET <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-2'>
                <img src="assets/images/single_service_02.jpg" alt="">
                <h4>Lancement de projet</h4>
                    <p>
                        Dans le cadre de la mise en œuvre de leurs projets greenfield ou de leur projet d’expansion, nous apportons aux investisseurs 
                        une assistance sur mesure pouvant inclure :                          
                    </p>
                        <ul>
                          <li>-	La réalisation d’étude de marché et de business plan</li>
                          <li>-	Des séances de travail avec les autorités de régulation su secteur</li>
                          <li>-	L’obtention de l’agrément à l’investissement auprès du CEPICI</li>
                          <li>-	L’obtention d’un terrain industriel auprès de l’AGEDI</li>
                          <li>-	L’identification et le recrutement du management local et du personnel clé …</li>
                        </ul>
              </article>
              <article id='tabs-4'>
                <img src="assets/images/single_service_04.jpg" alt="">
                <h4>Analyses sectorielles</h4>
                        <p>
                        Afin d’accompagner les investisseurs dans leur stratégie de développement 
                        en Côte d’Ivoire,nous leur fournissons des analyses approfondies leur permettant 
                        de confirmer leur intérêt sur des secteurs d’activité donnés. Nos analyses incluent 
                        la taille et les principales tendances du marché, l’identification des acteurs majeurs 
                        ainsi que leurs indicateurs de performance clés.
                            
                        </p>
                        <br/>
                        
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>





    <!-- <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <span>Lorem ipsum dolor sit amet</span>
              <h2>Our solutions for your <em>business growth</em></h2>
              <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue. 
              <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut posuere ante tortor ut neque.</p>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">945</div>
                  <div class="count-title">Work Hours</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1280</div>
                  <div class="count-title">Great Reviews</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">578</div>
                  <div class="count-title">Projects Done</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">26</div>
                  <div class="count-title">Awards Won</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    

@endsection