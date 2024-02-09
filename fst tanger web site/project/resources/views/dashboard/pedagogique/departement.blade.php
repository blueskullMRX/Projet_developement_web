<html>
  <head>
    <link rel="stylesheet" href="{{url('2.css')}}">
    <title>Chefs des départementss</title>

  </head>
  <body><div class="area">
    <div class="table4">
    <table>
        <thead>
            <tr>
                <th>Departement</th>
                <th>Nom</th>
                <th>Chef de département</th>
                <th>Save</th>
            </tr>
        </thead>   
        @foreach($departements as $departement) 
        <tr>
            <form action="{{ url('dashboard/departements/modify/'.$departement->ID_dep) }}" method="post">
            @csrf
            @method('PUT')
            <td>{{$departement->ID_dep}}</td>
            <td>{{$departement->Nom_dep}}</td>
            <td><select name="chef" id="select">
                <option value="">Aucun chef</option>
                @foreach($chefs as $chef)
                <option value="{{$chef->id}}" @if($chef->id == $departement->Chef_dep) selected @endif>{{$chef->name}} {{$chef->prenom}}</option>
                @endforeach
            </select></td>
            <td><button type="submit" id="bt1"><i class="fa-solid fa-floppy-disk"></i></button></td>
        </form></tr>
        @endforeach

    </table> </div>  
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
                    <a href="{{route("Peda.Salles")}}" >
                        <i class="fa fa-school"></i>
                        <span class="nav-text">
                            Gèrer les salles
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{route("Peda.Emploi.Show")}}">
                        <i class="fa fa-calendar-days" ></i>
                        <span class="nav-text">
                            Gèrer les emplois
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{route("Peda.Departements")}}" id="current">
                        <i class="fa fa-users-gear"></i>
                        <span class="nav-text">
                            Chefs des départements
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="{{route("Peda.Filiere")}}">
                        <i class="fa fa-user-pen"></i>
                        <span class="nav-text">
                            Coordinateurs des filières
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{route("Peda.Module")}}">
                        <i class="fa fa-chalkboard-user"></i>
                        <span class="nav-text">
                            Professeurs responsables
                        </span>
                    </a>
                </li>
                <li>
                   <a href="{{route('Peda.FiliereModify')}}">
                       <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">
                            Modifier les filières
                        </span>
                    </a>
                </li>
                <li>
                   <a href="{{route('Peda.users')}}">
                        <i class="fa fa-users"></i>
                        <span class="nav-text">
                            Gèrer les utilisateurs
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{route("Peda.Create")}}">
                        <i class="fa fa-user-plus"></i>
                         <span class="nav-text">
                             Ajouter un utilisateur
                         </span>
                     </a>
                 </li>
                 <li>
                    <a href="{{route("Peda.CreateEtu")}}" >
                        <i class="fa fa-user-graduate"></i>
                         <span class="nav-text">
                             Ajouter un étudiant
                         </span>
                     </a>
                 </li>
                 <li>
                    <a href="{{route("Peda.CreateProf")}}">
                        <i class="fa fa-user-tie"></i>
                         <span class="nav-text">
                             Ajouter un professeur
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