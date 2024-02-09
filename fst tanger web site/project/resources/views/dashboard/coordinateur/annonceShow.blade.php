<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <title>Gèrer les annonces</title>
  </head>
  <body><div class="area">
    <div class="announcements-container">
        @foreach($annonces as $annonce)
        <form action="{{ url('dashboard/coordAnnonces/delete/'.$annonce->ID_ann) }}" method="post">
          @csrf
          @method('PUT')
        <div class="announcement"><a href="">
            <div class="announcement-title">{{$annonce->Objet}}</div>
            <div class="announcement-content">
                <p>{{$annonce->Contenue}}
                </p>
            </div>
            <div class="announcement-delete"><button type="submit"><i class="fa-solid fa-trash-can"></i></button></div>
        </div>
        </form>
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
                <a href="{{route("Coord.Annonce")}}" >
                    <i class="fa fa-square-plus"></i>
                    <span class="nav-text">
                        Ajouter une annonce
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="{{route("Coord.Annonce.Show")}}" id="current" >
                    <i class="fa fa-scroll"></i>
                    <span class="nav-text">
                        Gèrer les annonces
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="{{route("Coord.Demande")}}">
                    <i class="fa fa-reply-all"></i>
                    <span class="nav-text">
                        Repondre aux demandes
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