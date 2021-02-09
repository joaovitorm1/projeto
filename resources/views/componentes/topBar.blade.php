<body class="layout-top-nav" style="height: auto;">
  
    <div class="wrapper">
    
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-primary navbar navbar-default navbar-fixed-top" >
        <div class="container">
          <a href="index3.html" class="navbar-brand">
            <img src="https://portoseguro.ba.gov.br/images/logo.png" alt="AdminLTE Logo" width="150px;"  style="opacity: .8">
            <span class="brand-text font-weight-light"></span>
          </a>
    
          <button class="navbar-toggler order-1 collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="navbar-collapse order-3 collapse" id="navbarCollapse" style="">
            <!-- Left navbar links -->
            <ul class="navbar-nav m-auto">
              <li class="nav-item dropdown">
                <a href="{{route('index')}}" class="nav-link text-light"><i class="far fa-home-lg-alt"></i>inicio</a>
              </li>
              <li class="nav-item">
                <a href="{{route('prefeitura')}}" class="nav-link text-light">Prefeitura</a>
              </li>
              <li class="nav-item">
                <a href="{{route('cidade')}}" class="nav-link text-light">Cidade</a>
              </li>
              <li class="nav-item">
                <a href="{{route('secretarias')}}" class="nav-link text-light">Secretaria</a>
              </li>
              <li class="nav-item">
                <a href="{{route('noticias')}}" class="nav-link text-light">Nóticias</a>
              </li>
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-light">Acesso Rapido</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow bg-primary" style="left: 0px; right: inherit;">
                  <li><a href="#" class="dropdown-item text-light">licitação </a></li>
                  <li><a href="#" class="dropdown-item text-light">diario oficial</a></li>
    
                  <li class="dropdown-divider"></li>
    
                  <!-- Level two dropdown-->
                  <li class="dropdown-submenu dropdown-hover">
                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Para teste 2 em drop</a>
                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                      <li>
                        <a tabindex="-1" href="#" class="dropdown-item">teste 2</a>
                      </li>
    
                      <!-- Level three dropdown-->
                      <li class="dropdown-submenu">
                        <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                        <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                          <li><a href="#" class="dropdown-item">3 teste</a></li>
                          <li><a href="#" class="dropdown-item">3 teste</a></li>
                        </ul>
                      </li>
                      <!-- End Level three -->
    
                      <li><a href="#" class="dropdown-item">teste 2</a></li>
                      <li><a href="#" class="dropdown-item">teste 2</a></li>
                    </ul>
                  </li>
                  <!-- End Level two -->
                </ul>
              </li>
            </ul>
    
            <!-- SEARCH FORM -->
            <!--form class="form-inline ml-0 ml-md-3">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form-->
          </div>
          <!-- Right navbar links -->
        </div>
          
      </nav>
     <div class="row">
        <div class="col-sm-2 bg-success mosaico">
            <hr hidden>	
        </div>
        <div class="col-sm-2 bg-danger mosaico">
            <hr hidden>	
        </div>
        <div class="col-sm-2 bg-warning mosaico">
            <hr hidden>	
        </div>
        <div class="col-sm-2 bg-success mosaico">
            <hr hidden>	
        </div>
        <div class="col-sm-2 bg-danger mosaico">
            <hr hidden>	
        </div>
        <div class="col-sm-2 bg-warning mosaico">
            <hr hidden>	
        </div>
    </div>