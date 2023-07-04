@extends('front.layouts.app')
    
@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Conseil financier</h1>
          </div>
        </div>
      </div>
    </div>

   
    <div class="single-services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
            <li>
              <a href='#tabs-1'>Due diligence et évaluation d’entreprise <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>Restructuration financière <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/single_service_01.jpg" alt="">
                <h3>Due diligence et évaluation d’entreprise</h3>
                <span class="highlight">Acquisition</span><br/>
                Les acquisitions comme mode de croissance des entreprises présentent des challenges si importants, que la plupart 
                de ces opérations résultent en une destruction de valeur. Notre équipe vous aide à mieux cerner les risques liés 
                à votre transaction, à appréhender la stratégie de l’entreprise à acquérir, à identifier les sources de création 
                de valeur et les synergies, et à conclure la transaction par : 
                <ul>
                  <li>•	Une revue financière, commerciale, stratégique et opérationnelle</li>
                  <li>•	La performance financière et les leviers de création de valeur</li>
                  <li>•	La génération de cash-flow</li>
                  <li>•	Les prévisions de rentabilité</li>
                  <li>•	Les passifs, risques et engagements</li>
                  <li>•	La qualité de l'organisation, du contrôle interne et des systèmes.</li>
                </ul>                          
                </p>
                <p>
                <span class="highlight">Cession</span><br/>
                Dans le cadre de la cession partielle ou totale de votre entreprise, nous vous aidons à contrôler le processus 
                de vente et à optimiser le prix de cession en préparant les supports d’information et en gérant la communication 
                avec les acquéreurs potentiels relativement aux aspects suivants :
                <ul>
                  <li>•	Le business model et les opérations</li>
                  <li>•	La performance financière et les leviers de création de valeur</li>
                  <li>•	La génération de cash-flow</li>
                  <li>•	Les prévisions de rentabilité</li>
                  <li>•	Les passifs, risques et engagements</li>
                  <li>•	La qualité de l'organisation, du contrôle interne et des systèmes.</li>
                </ul>                          
                </p><br/>

              </article>
              <article id='tabs-2'>
                <img src="assets/images/single_service_02.jpg" alt="">
                <h4>Restructuration financière</h4>
                <p>
                  Toute entreprise est susceptible d’avoir à faire face à des difficultés financières liées à un contexte conjoncturel 
                  ou sectoriel difficile, une rentabilité en déclin ou une structure financière ou actionnariale inadaptée aux performances. Ces difficultés entrainent la perte de confiance des partenaires de l’entreprise (banquiers, fournisseurs, clients…).
                  Pour vous aider à faire face à ce genre de situations, nous élaborons et mettons en application un plan d’actions 
                  permettant une création de valeur pérenne. Nos activités dans le cadre d’une opération de restructuration couvrent notamment :
                  <ul>
                  <li>•	l’élaboration de diagnostics stratégique, opérationnel et financier </li>
                  <li>•	l’identification des mesures de restructuration et l’assistance à leur mise en œuvre</li>
                  <li>•	la modélisation financière </li>
                  <li>•	l’assistance dans le cadre de refinancements et de montages financiers</li>
                  <li>•	la recherche de financements en local et à l’international (banques, fonds d’investissement…)</li>
                  <li>•	l’optimisation des différents scénarii de sortie de crise </li>
                  <li>•	l’accompagnement dans la cession d’une activité en difficulté. </li>
                </ul>   
                </p>
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