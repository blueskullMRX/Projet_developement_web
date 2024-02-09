<html>
  <head>
    <link rel="stylesheet" href="{{url('2.css')}}">
    <title>Modifier les filières</title>
  </head>
  <body><div class="area">
    <div class="container">
        <form action="{{ route("Peda.FiliereModify") }}" method="get">
        @csrf
        <div  class="select">
            <select id="sel" name="filiere">
                @foreach($filieres as $filiere)
                <option value="{{$filiere->ID_fil}}" @if($filiere->ID_fil==$selected->ID_fil) selected @endif>{{$filiere->Nom_fil}}</option>
                @endforeach
            </select>
        </div>
        <div class="save"><button type="submit" id="bt2"><i class="fa-solid fa-magnifying-glass"></i></button></div>
    </form></div>
    <form action="{{ url("dashboard/filiereModify/modify/".$selected->ID_fil) }}" method="post">
        @method('PUT')
        @csrf
    <div class="table2">
    <table>
        <thead>
            <tr>
                <th><i class="fa-solid fa-check"></i> OBJECTIFS</th>
                <th><i class="fa-solid fa-calendar-day"></i> PROGRAMME</th>
                <th><i class="fa-solid fa-expand"></i> COMPETENCES VISEES ET DEBOUCHES</th>
                <th>Save</th>
            </tr>
        </thead>    
        <tr>
            <td><textarea name="OBJECTIFS" id="txt" cols="20" rows="10">{{$selected->OBJECTIFS}}</textarea></td>
            <td><textarea name="PROGRAMME" id="txt" cols="30" rows="10">{{$selected->PROGRAMME}}</textarea></td>
            <td><textarea name="COMPETENCES" id="txt" cols="30" rows="10">{{$selected->COMPETENCES}}</textarea></td>
            <td><div class="load"><button type="submit" id="bt2"><i class="fa-solid fa-floppy-disk"></i></button></div></td>
        </tr>
    </table></div></form>
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
                   <a href="{{route('Peda.FiliereModify')}}" id="current">
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