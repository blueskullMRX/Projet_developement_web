<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <title>Annonces</title>
  </head>
  <body><div class="area">
    <div class="announcements-container">
        @foreach($filieres as $filiere)
        <div class="announcement"><a href="">
            <div class="announcement-title">{{$filiere->Objet}}</div>
            <div class="announcement-content">
                <p>{{$filiere->Contenue}}
                </p>
            </div>
        </div>
        @endforeach

        @foreach($departements as $departement)
        <div class="announcement"><a href="">
            <div class="announcement-title">{{$departement->Objet}}</div>
            <div class="announcement-content">
                <p>{{$departement->Contenue}}
                </p>
            </div>
        </div>
        @endforeach

        @foreach($modules as $module)
        <div class="announcement"><a href="">
            <div class="announcement-title">{{$module->Objet}}</div>
            <div class="announcement-content">
                <p>{{$module->Contenue}}
                </p>
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
            <a href="{{route("Etu.Annonce")}}" id="current" >
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
            <a href="{{route("Etu.Demande.Show")}}">
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