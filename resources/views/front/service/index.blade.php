@extends('front.layouts.app')
    
@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h1>Nos services</h1>
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
              <a href='#tabs-4'>ACCOMPAGNEMENT DES PROJETS <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'>CONSEIL FINANCIER <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-1'>AMELIORATION DES PERFORMANCES <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>FORMATION EN GESTION <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/single_service_01.jpg" alt="">
                <h3>Améliorations des performances</h3>
                        <p>
                        Chez F&J, nous croyons qu’en Afrique plus qu’ailleurs, l’adoption des « best practices » de gestion des opérations 
                        et une prise de décisions motivée par l’analyse pertinente des données de gestion constituent un avantage concurrentiel significatif. 
                        C’est la raison pour laquelle, dans le cadre de mandats de gestion qui nous sont confiés par des fonds de capital investissement ou 
                        des entrepreneurs,nos consultants mettent leur expérience opérationnelle au service d’entreprises diverses dans les domaines suivants:
                            <br />
                        </p>
                        <h4>Diagnostic intégral de gestion</h4>
                        <p>
                          Notre cabinet s’est spécialisé dans la réalisation de diagnostics intégraux d’entreprises en usant de la méthodologie FUNDES. Longuement éprouvée par divers bailleurs de fonds dont l’Union Européenne sur plusieurs continents, cette méthodologie permet d’identifier les zones d’amélioration critiques de la gestion d’une entreprise et de déterminer dans le cadre d’un processus de co-construction avec la société, les interventions prioritaires pour en augmenter la performance. Nous accompagnons ensuite les entreprises diagnostiquées dans la réalisation de ces interventions qui touchent aux différentes fonctions de l’entreprise : stratégie, marketing et ventes, finances, opérations, ressources humaines. Nous avons dans ce cadre accompagné diverses PME affiliées à la Confédération Générale des Entreprises de Côte d’Ivoire (CGECI).
                        </p>

                        <h4>Amélioration des revenus</h4>
                        <p>
                          La croissance des revenus peut être atteinte par une augmentation des volumes de ventes et/ou des prix. F&J analyse votre secteur d’activité et travaille avec vous à la mise en œuvre de stratégies visant à l’accroissement de vos ventes ainsi qu’à la révision appropriée de votre politique de prix et positionnement marketing. Pour ce faire, nous procédons à une analyse fine des acteurs et des tendances de votre secteur d’activité.
                        </p>

                        <h4>Réduction de coûts</h4>
                        <p>
                          Par une analyse de la profitabilité individuelle de vos produits et services, nous vous aidons à développer et mettre en œuvre un plan d’amélioration des marges. A travers un examen exhaustif de vos opérations, nous déterminons les zones d’optimisation de coûts, qui peuvent s’avérer très diverses : gestion des stocks et du niveau de service à la clientèle, logistique, désengorgement de goulots d’étranglement, design du package salarial…
                        </p>

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
                <h4>Formation en gestion</h4>
                        <p>
                        Chez F&J, nous pensons qu’une culture financière est un droit et surtout un devoir pour toute partie prenante au développement de l’entreprise : chefs d’entreprise, administrateurs, conseils juridiques, employés, actionnaires en bourse... 
                        Dans un monde idéal, tous devraient avoir une bonne culture financière sous-tendant leurs analyses et prises de décision. Une compréhension partagée des enjeux financiers permet un meilleur développement de l’entreprise. Les administrateurs, dirigeants et conseils prennent ainsi de meilleures décisions stratégiques et les managers de meilleures décisions opérationnelles. Quant aux employés qui comprennent mieux l’impact de leurs actions sur la santé financière de l’entreprise, ils se sentent plus impliqués au quotidien et acceptent mieux les décisions du management.<br/>

                        Afin de vous donner une idée objective de votre aisance ou de celle de vos collaborateurs avec les finances, F&J vous offre d’évaluer gratuitement votre QI financier ou celui de vos collaborateurs grâce à notre test anonyme en ligne, dont les résultats seront communiqués individuellement, puis agrégés pour le compte du management.<br/> 
                        En nous fondant sur ces résultats, nous vous proposerons un accompagnement sur-mesure pour développer la culture financière au sein de votre entreprise. Cette assistance prendra en compte le contexte particulier de votre organisation, ainsi que son vocabulaire financier. Elle inclura des formations appropriées au niveau de responsabilité des participants, qui seront mises en œuvre grâce à notre méthode inédite de formation qui allie sens logique, outils de visualisation ludiques et pratique de cas réels.<br/>
                        Nous vous accompagnerons également dans la mise en œuvre d’une stratégie de dissémination de l’information financière au sein de votre entreprise, notamment à l’occasion d’évènements internes majeurs ou d’arrêtés comptables intermédiaires.<br/>

                        F&J ADVISORY est habilité comme cabinet privé de formation par le Fonds de Développement de la Formation Professionnelle (FDFP). <br />
                        Ces entités nous ont fait confiance en matière de formation : EUROCHAM, CIMAF, CIPREL, SERVAIR, COFINA, FIDRA, AERIA, SODEXAM, BIA, INCLUSIVE GUARANTEE, IECD

                        </p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/single_service_03.jpg" alt="">
                <h4>Conseil Financier</h4>
                <h5>Due diligence et évaluation d’entreprise</h5>
                <p>
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
                <h5>Restructuration financière</h5>
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
              <article id='tabs-4'>
                <img src="assets/images/single_service_04.jpg" alt="">
                <h4>Accompagnement de projets</h4>

                <h5>Analyses sectorielles</h5>
                        <p>
                        Afin d’accompagner les investisseurs dans leur stratégie de développement 
                        en Côte d’Ivoire,nous leur fournissons des analyses approfondies leur permettant 
                        de confirmer leur intérêt sur des secteurs d’activité donnés. Nos analyses incluent 
                        la taille et les principales tendances du marché, l’identification des acteurs majeurs 
                        ainsi que leurs indicateurs de performance clés.
                            
                        </p>
                        <br/>
                        <h5>Lancement de projet</h5>
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
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="callback-form callback-services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Request a <em>call back</em></h2>
              <span>interdum nisl ac urna tempor mollis</span>
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

    <div class="partners">
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