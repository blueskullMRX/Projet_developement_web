<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <title>Error</title>
  </head>
  <body><div class="area">
    <h2>Error : aucune salle trouvée</h2>

     
  </div><nav class="main-menu">
            <ul>
                <li>
                    <a href="{{route("Dashboard")}}" id="current">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Acceuil
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="{{route("Departement.Annonce")}}" >
                        <i class="fa fa-square-plus"></i>
                        <span class="nav-text">
                            Ajouter une annonce
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{route("Departement.Annonce.Show")}}" >
                        <i class="fa fa-scroll"></i>
                        <span class="nav-text">
                            Gèrer les annonces
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{route("Departement.Emploi.Show")}}" >
                        <i class="fa fa-calendar-days"></i>
                        <span class="nav-text">
                            Gèrer les emplois
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