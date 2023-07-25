<!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <header class="">
      <nav class="navbar navbar-expand-lg" style="background-color: white;height: 100px;">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <!-- <h2>Finance Business</h2> -->
            <img src="{{ asset('logo.jpeg') }}" alt="Logo" style="margin-left: 15px; height: 52px;">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Accueil
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about.index') }}">A propos</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Notre expertise
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('accompagnement-projet') }}">Accompagnement de projet d’investissement</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('conseil-financier') }}">Conseil financier</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('amelioration-performance') }}">Amélioration de la performance opérationnelle</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('formation-gestion') }}">Formation en gestion</a>
              </div>
            </li>  
              <li class="nav-item">
                <a class="nav-link" href="{{ route('formation-gestion') }}">Formations</a>
              </li>                          
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>