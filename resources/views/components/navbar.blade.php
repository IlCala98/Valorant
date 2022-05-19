<nav class="navbar navbar-expand-lg navbar-dark" id="dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 my-3 me-auto">
            <li class="nav-item dropdown dropdown-custom">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="icon-navbar" src="{{ asset('img/cattura.png') }}" width="80px" alt="" srcset="">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="#"><img src="{{ asset('img/valorant.png') }}" width="25px" alt=""></a>
            </li>
            <li class="nav-item dropdown dropdown-custom mx-3">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  INFORMAZIONI SUL GIOCO
                </a>
                <ul class="dropdown-menu bg-secondary dropdown-custom-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item ms-2 my-2" href="#">AGENTI</a></li>
                    <li><a class="dropdown-item ms-2 my-2" href="#">MAPPE</a></li>
                    <li><a class="dropdown-item ms-2 my-2" href="#">ARSENALE</a></li>
                </ul>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active el-navbar" aria-current="page" href="#">MULTIMEDIA</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active el-navbar" aria-current="page" href="#">NOVITÀ</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-light el-navbar" href="#">CLASSIFICA</a>
            </li>
            <li class="nav-item dropdown dropdown-custom mx-3">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SUPPORTO
                </a>
                <ul class="dropdown-menu bg-secondary dropdown-custom-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item ms-2 my-2" href="#">REQUISITI</a></li>
                    <li><a class="dropdown-item ms-2 my-2" href="#">SUPPORTO <img width="13px" src="{{ asset('img/frecci.png') }}"/></a></li>
                    <li><a class="dropdown-item ms-2 my-2" href="#">Codice della <br> community</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-custom mx-3">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SOCIAL
                </a>
                <ul class="dropdown-menu bg-secondary dropdown-custom-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item ms-2 my-2" href="#">TWITTER <img width="13px" src="{{ asset('img/frecci.png') }}"/></a></li>
                    <li><a class="dropdown-item ms-2 my-2" href="#">YOUTUBE <img width="13px" src="{{ asset('img/frecci.png') }}"/></a></li>
                    <li><a class="dropdown-item ms-2 my-2" href="#">INSTAGRAM <img width="13px" src="{{ asset('img/frecci.png') }}"/></a></li>
                    <li><a class="dropdown-item ms-2 my-2" href="#">FACEBOOK <img width="13px" src="{{ asset('img/frecci.png') }}"/></a></li>
                    <li><a class="dropdown-item ms-2 my-2" href="#">DISCORD <img width="13px" src="{{ asset('img/frecci.png') }}"/></a></li>
                </ul>
            </li>
            <li class="nav-item mx-3 ">
                <a class="nav-link active el-navbar" aria-current="page" href="#">ESPORT <img width="13px" src="{{ asset('img/frecci.png') }}"/></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-light el-navbar" href="#">MERCHANDISE <img width="13px" src="{{ asset('img/frecci.png') }}"/></a>
            </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 my-3 mx-3">
            <li class="nav-item dropdown dropdown-custom">
                <a class="nav-link me-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('img/mondo.png') }}" alt="" srcset="">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item mx-3" href="#">Italiano</a></li>
                    <li><a class="dropdown-item mx-3" href="#">Inglese</a></li>
                    <li><a class="dropdown-item mx-3" href="#">Spagnolo</a></li>
                </ul>
            </li>
            {{-- <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                GIOCA ORA
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li> --}}
            <li class="nav-item">
                <button class="btn btn-danger rounded-pill text-dark " data-bs-toggle="modal" data-bs-target="#exampleModal">GIOCA ORA</button>
            </li>
        </ul>
      </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <h5 class="modal-title text-center text-white" id="exampleModalLabel">\   PREPARATI    \</h5>
        <div class="modal-body text-center">
            <small class="text-center me-5">Non ho ancora un account Riot</small>
            <small class="ms-5">Ho un account Riot</small>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-lg btn-light mx-5 px-5" data-bs-dismiss="modal">CREANE UNO</button>
            
            <button class="btn btn-large btn-home">GIOCA GRATIS</button>
        </div>
      </div>
    </div>
  </div>
  </nav>