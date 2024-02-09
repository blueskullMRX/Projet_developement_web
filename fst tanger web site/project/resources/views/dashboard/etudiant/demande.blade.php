<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <link rel="stylesheet" href="{{ url('1.css')}}">
    <title>Faire une demande</title>
  </head>
  <body><div class="area">
    <div class="background">
        <div class="container-contact">
          <div class="screen">
            
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>Effectuer</span>
                  <span>une demande</span>
                </div>
                
              </div>
              <div class="screen-body-item">
                <div class="app-form">
                    <form action="{{ route("Etu.Demande.Create") }}" method="post">
                    @csrf
                    <div class="app-form-group">
                        <label for="" class="app-form-control" >Destinataire</label>
                    </div>
                  <div class="app-form-group">
                    <select class="app-form-control" name="id" id="">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}} {{$user->prenom}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="app-form-group">
                    <label for="" class="app-form-control" >Type de demande</label>
                </div>
              <div class="app-form-group">
                <select class="app-form-control" name="type" id="">
                    <option value="lettre de recommandation">lettre de recommandation</option>
                    <option value="rendez-vous avec un professeur">rendez-vous avec un professeur</option>
                    <option value="justifier une absence">justifier une absence</option>
                    <option value="demander le changement de groupe de TP">demander le changement de groupe de TP</option>
                    @if(DB::table('etudiant')->where('id_user', Auth::user()->id)->first()->is_délégué)
                    <option value="pannes matérielles">pannes matérielles</option>
                    @endif

                </select>
              </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="objet" name="objet">
                  </div>
                  <div class="app-form-group message">
                    <textarea class="app-form-control" id="" cols="30" rows="10" placeholder="Message" name="contenue"></textarea>
                  </div>
                  <div class="app-form-group buttons">
                    <button type="submit" class="app-form-button">ENVOYER</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div> 
  </div><nav class="main-menu">
    <ul>
        <li>
            <a href="{{route("Dashboard")}}" >
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
            <a href="{{route("Etu.Annonce")}}" >
                <i class="fa fa-scroll"></i>
                <span class="nav-text">
                    Annonces
                </span>
            </a>
            
        </li>
        <li class="has-subnav">
            <a href="{{route("Etu.Demande")}}" id="current">
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