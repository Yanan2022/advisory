@extends('front.layouts.app')
    
@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Amélioration des performances</h1>
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
            <li><a href='#tabs-2'>Diagnostic intégral de gestion <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-3'>Amélioration des revenus <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-4'>Réduction de coûts <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-1'>Gestion des risques <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/single_service_01.jpg" alt="">
                        <h4>Gestion des risques</h4>
                        <p>
                          L’efficacité opérationnelle d’une entreprise réside dans sa capacité à mettre en place et faire appliquer des procédures opérationnelles rigoureuses garantissant une bonne qualité de service à ses clients et permettant la sauvegarde de ses actifs, tout en clarifiant les responsabilités de ses différents agents. Pour ce faire, nous vous assistons dans la restructuration de votre organigramme ainsi que dans la rédaction et la mise en œuvre de vos manuels de procédures opérationnelles et financières, avec un accent particulier mis sur les axes d’amélioration identifiés suite à notre diagnostic initial.
                        </p>

                        <h4>Gestion Financière et de la Trésorerie</h4>
                        <p>
                          En plus d’une stratégie inappropriée, l’absence de liquidités et une structure de capital inadéquate sont les raisons les plus fréquentes de faillite de sociétés. La gestion du besoin en fonds de roulement est critique pour la survie d’une entreprise. Malheureusement, bon nombre d’entreprises sont peu outillées pour l’élaboration de contrats clients/fournisseurs répondant à leurs impératifs de trésorerie, ou pour négocier des conditions bancaires en adéquation avec leurs besoins. En partant d’une revue de vos activités, nos consultants vous aident à comprendre le cycle de conversion de vos achats et ventes en liquidité, à évaluer vos termes de paiement ainsi que ceux que vous accordez à vos clients, et à réduire votre niveau de stock sans compromettre votre qualité de service. F&J vous assiste également à monter des dossiers de financement bancaire visant à optimiser vos coûts financiers, et négocier avec vos partenaires financiers.
                        </p>

              </article>
              <article id='tabs-2'>
                <img src="assets/images/single_service_02.jpg" alt="">
                <h4>Diagnostic intégral de gestion</h4>
                  <p>
                    Notre cabinet s’est spécialisé dans la réalisation de diagnostics intégraux d’entreprises en usant de la méthodologie FUNDES. Longuement éprouvée par divers bailleurs de fonds dont l’Union Européenne sur plusieurs continents, cette méthodologie permet d’identifier les zones d’amélioration critiques de la gestion d’une entreprise et de déterminer dans le cadre d’un processus de co-construction avec la société, les interventions prioritaires pour en augmenter la performance. Nous accompagnons ensuite les entreprises diagnostiquées dans la réalisation de ces interventions qui touchent aux différentes fonctions de l’entreprise : stratégie, marketing et ventes, finances, opérations, ressources humaines. Nous avons dans ce cadre accompagné diverses PME affiliées à la Confédération Générale des Entreprises de Côte d’Ivoire (CGECI).
                  </p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/single_service_03.jpg" alt="">
                <h4>Amélioration des revenus</h4>
                <p>
                  La croissance des revenus peut être atteinte par une augmentation des volumes de ventes et/ou des prix. F&J analyse votre secteur d’activité et travaille avec vous à la mise en œuvre de stratégies visant à l’accroissement de vos ventes ainsi qu’à la révision appropriée de votre politique de prix et positionnement marketing. Pour ce faire, nous procédons à une analyse fine des acteurs et des tendances de votre secteur d’activité.
                </p>
              </article>
              <article id='tabs-4'>
                <img src="assets/images/single_service_04.jpg" alt="">
                <h4>Réduction de coûts</h4>
                        <p>
                          Par une analyse de la profitabilité individuelle de vos produits et services, nous vous aidons à développer et mettre en œuvre un plan d’amélioration des marges. A travers un examen exhaustif de vos opérations, nous déterminons les zones d’optimisation de coûts, qui peuvent s’avérer très diverses : gestion des stocks et du niveau de service à la clientèle, logistique, désengorgement de goulots d’étranglement, design du package salarial…
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