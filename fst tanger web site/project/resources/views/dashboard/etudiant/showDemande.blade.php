<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <title>Demande</title>
  </head>
  <body><div class="area">
    <div class="announcements-container">
        @foreach($demandes as $demande)
        <div class="announcement"><a href="">
            <div class="announcement-title">{{$demande->Objet}}:</div>
            <div class="announcement-content">
                <p> {{$demande->Contenue}}
                </p>
            </div>
            <div class="announcement-title">Reponses:</div>
            <div class="announcement-content">{{$demande->Reponse}}
                <p> </p>
            </div>
        </div>
        @endforeach
    </div> 
  </div><nav class="main-menu">
    <ul>
        <li>
            <a href="{{route("Dashboard")}}">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">
                    Acceuil
                </span>
            </a>
          
        </li>
        <li class="has-subnav">
            <a href="{{route("Etu.Emploi")}}" >
                <i class="fa fa-calendar-days" ></i>
                <span class="nav-text">
                    Emploi du temps
                </span>
            </a>
            
        </li>
        <li class="has-subnav">
            <a href="{{route("Etu.Annonce")}}">
                <i class="fa fa-scroll"></i>
                <span class="nav-text">
                    Annonces
                </span>
            </a>
            
        </li>
        <li class="has-subnav">
            <a href="{{route("Etu.Demande")}}">
                <i class="fa fa-hand-holding-medical"></i>
                <span class="nav-text">
                    Faire une demande
                </span>
            </a>
            
        </li>
        <li class="has-subnav">
            <a href="{{route("Etu.Demande.Show")}}" id="current">
                <i class="fa fa-envelope-open"></i>
                <span class="nav-text">
                    Demande
                </span>
            </a>
        </li>
    </ul>
            <ul class="logout">
                <li>
                    <a href="{{ url('/')}}">
                        <i class="fa fa-house-user"></i>
                         <span class="nav-text">
                             Home
                         </span>
                     </a>
                 </li>
                <li>
                   <a href="{{ route('Logout')}}">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
  </body>
    </html>