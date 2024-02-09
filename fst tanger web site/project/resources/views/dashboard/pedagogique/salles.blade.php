<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <title>Gèrer les salles</title>

  </head>
  <body><div class="area">
    <div class="table4">
    <table>
        <thead>
            <tr>
                <th>salle</th>
                <th>Type</th>
                <th>Departement</th>
                <th>Save</th>
            </tr>
        </thead>
        @foreach($locals as $local)
        <tr><form action="{{ url('dashboard/salles/modify/'.$local->ID_loc) }}" method="post">
            <td>Salle {{$local->ID_loc}}</td>
            <td>{{$local->type}}</td>
            <td>
                <select name="dep" id="select">
                    <option value="">Aucune departement</option>
                    @foreach($departements as $departement)
                    <option value="{{$departement->ID_dep}}" @if($local->ID_dep == $departement->ID_dep) selected @endif >{{$departement->Nom_dep}}</option>
                    @endforeach
                </select>
            </td>
            <td>
            @csrf
            @method('PUT')
            <button type="submit" id="bt1"><i class="fa-solid fa-floppy-disk"></i></button>
            </td>
        </form></tr>
        @endforeach
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
                    <a href="{{route("Peda.Salles")}}" id="current">
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
                    <a href="{{route("Peda.Departements")}}">
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