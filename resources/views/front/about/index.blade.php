@extends('front.layouts.app')
    
@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h1>Qui sommes nous?</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                {{-- <h2>
                                    Connaître <em>notre entreprise</em>
                                </h2> --}}
                                {{-- <p> --}}
                                    <strong>F&J ADVISORY</strong> est un cabinet panafricain de conseil en management et de conseil financier ayant pour 
                                    vision de contribuer de manière tangible au développement des économies de l’Afrique sub-saharienne par la fourniture 
                                    de services de conseil aux standards internationaux. Alliant formation internationale, connaissance approfondie du monde 
                                    des affaires africain et expérience professionnelle pratique, les consultants de F&J adaptent les concepts techniques les 
                                    plus éprouvés à vos problèmes de gestion. Notre expertise se situe dans les domaines suivants: 
                                    <ul>
                                        <li><a class="dropdown-item" href="{{ route('accompagnement-projet') }}">• Accompagnement de projets d’investissement</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('conseil-financier') }}">• Conseil Financier</a></li>
                                        <li><a class="dropdown-item" href="{{ route('amelioration-performance') }}">• Amélioration de la performance opérationnelle</a></li>
                                        <li><a class="dropdown-item" href="{{ route('formation-gestion') }}">• Formation en gestion.</a></li>
                                    </ul>
                                {{-- </p> --}}
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="assets/images/about-image.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="fun-facts" style="margin-bottom: 10px">
      <div class="container">
        <center><h2><em>NOS SECTEURS D’ACTIVITES</em></h2></center>
        <p>
          Notre équipe de professionnels et nos correspondants issus du monde de l'entreprise, du capital-investissement 
          et du conseil en gestion possèdent un savoir-faire et une expertise dans les principaux secteurs suivants :               
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <div class="col-md-12">
                <div class="count-area-content">
                  <div class="count-title">Banques,Micro-finance</div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="count-area-content">
                  <div class="count-title">Mines, Distribution pétrolière</div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="count-area-content">
                  <div class="count-title">Distribution et Consumer Business</div>
                </div>
              </div>
              <!-- <a href="" class="filled-button">Read More</a> -->
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
                        
              
              
              <div class="col-md-12">
                <div class="count-area-content">
                  <div class="count-title">Agriculture et Elevage</div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="count-area-content">
                  <div class="count-title">Organisations Non Gouvernementales</div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-title">Agro-alimentaire</div>
                </div>
              </div>
              
              
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-title">Média et Télécom</div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-title">Eau,Energie</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-title">Hôtellerie</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-title">Industrie </div>
                </div>
              </div>                                      
            </div>
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