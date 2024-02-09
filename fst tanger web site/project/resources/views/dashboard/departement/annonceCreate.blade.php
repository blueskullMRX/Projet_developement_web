<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <link rel="stylesheet" href="{{ url('1.css')}}">
    <title>Ajouter une annonce</title>
  </head>
  <body><div class="area">
    <div class="background">
        <div class="container-contact">
          <div class="screen">
            
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>Nouvelle</span>
                  <span>annonce</span>
                </div>
                
              </div>
              <div class="screen-body-item">
                <div class="app-form">
                    <form  action="{{ route("Departement.Annonce.Create") }}" method="post" >
                        @csrf
                    <div class="app-form-group">
                        <label for="" class="app-form-control" >Etat</label>
                    </div>
                  <div class="app-form-group">
                    <select class="app-form-control" name="etat_ann" id="">
                        <option value="publique">publique</option>
                        <option value="private">private</option>
                    </select>
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="objet" name="objet">
                  </div>
                  <div class="app-form-group message">
                    <textarea name="contenue" class="app-form-control" id="" cols="30" rows="10" placeholder="Contenue"></textarea>
                  </div>
                  <div class="app-form-group buttons">
                    <button class="app-form-button" type="submit">ENVOYER</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
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
            <a href="{{route("Departement.Annonce")}}"  id="current">
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
            <a href="{{route("Departement.Emploi.Show")}}">
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