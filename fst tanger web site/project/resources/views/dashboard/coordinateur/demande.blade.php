<html>
<head>
  <link rel="stylesheet" href="{{ url('2.css')}}">
  <title>Répondre aux demandes</title>
</head>
<body><div class="area">
  <div class="table">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Objet</th>
                <th>Contenue</th>
                <th>Reponse</th>
                <th>Envoyer</th>
            </tr>
        </thead> 
        @for($y = 0 ; $y < $size ; $y++) 
        <form action="{{ url('dashboard/coordDemande/reply/'.$demandes[$y][5]) }}" method="post">
          @csrf
          @method('PUT')
        <tr>
            <td>{{$demandes[$y][0]}}</td>
            <td>{{$demandes[$y][1]}}</td>
            <td>{{$demandes[$y][2]}}</td>
            <td>{{$demandes[$y][3]}}</td>
            <td><textarea name="reponse" id="txt" cols="30" rows="10">{{$demandes[$y][4]}}</textarea></td>
            <td><button type="submit" id="bt1"><i class="fa fa-paper-plane"></i></button></td>
        </tr>
        @endfor
    </table></div> 
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
        <a href="{{route("Coord.Annonce.Show")}}" >
            <i class="fa fa-scroll"></i>
            <span class="nav-text">
                Gèrer les annonces
            </span>
        </a>
        
    </li>
    <li class="has-subnav">
        <a href="{{route("Coord.Demande")}}"  id="current">
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