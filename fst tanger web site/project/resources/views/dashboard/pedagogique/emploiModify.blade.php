<html>
<head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <title>Gèrer les emplois</title>

</head>
<body><div class="area">
    <div class="container">
        <form action="{{ route("Peda.Emploi.Show") }}" method="get">
        @csrf
        <div  class="select">
            <select id="sel" name="local">
                @foreach($locals as $local)
                <option value="{{$local->ID_loc}}" @if($local->ID_loc==$selected->ID_loc) selected @endif>Salle {{$local->ID_loc}}</option>
                @endforeach
            </select>
        </div>
        <div class="save"><button type="submit" id="bt2"><i class="fa-solid fa-magnifying-glass"></i></button></div>
        </form>
    </div>
    <div class="table">
        <form action="{{ url("/dashboard/pedaEmploi/modify/".$selected->ID_loc) }}" method="post">
            @method('PUT')
            @csrf
    <table>
        
        <thead>
            <tr>
                <th>Heure/Jour</th>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
                <th>Samedi</th>
                <th>Save</th>
            </tr>
        </thead>    
        <tr>
            <td>09h00 - 10h45</td>
            @for($i = 0 ; $i <6 ; $i++)
            <td> <select name="act{{$i}}{{0}}" id="select">
            <option value="" selected>--</option>
            @foreach($modules as $module)
            <option value="{{$module->ID_mod}}" @if($acts[$i][0][0]==$module->Nom_mod) {{ "selected" }}@endif>{{$module->Nom_mod}}</option>
            @endforeach
            </select>  </td>
            @endfor

            <td rowspan="5"><button type="submit" id="bt2"><i class="fa-solid fa-floppy-disk"></i></button></td>

        </tr>
        <tr>
            <td>11h00 - 12h45</td>
            @for($i = 0 ; $i <6 ; $i++)
            <td> <select name="act{{$i}}{{1}}" id="select">
            <option value="" selected>--</option>
            @foreach($modules as $module)
            <option value="{{$module->ID_mod}}" @if($acts[$i][1][0]==$module->Nom_mod) {{ "selected" }}@endif>{{$module->Nom_mod}}</option>
            @endforeach
            </select>  </td>
            @endfor
        </tr>
        <tr>
            <td> 13h00 - 14h45</td>
            @for($i = 0 ; $i <6 ; $i++)
            <td> <select name="act{{$i}}{{2}}" id="select">
            <option value="" selected>--</option>
            @foreach($modules as $module)
            <option value="{{$module->ID_mod}}" @if($acts[$i][2][0]==$module->Nom_mod) {{ "selected" }}@endif>{{$module->Nom_mod}}</option>
            @endforeach
            </select>  </td>
            @endfor
        </tr>
        <tr>
            <td>15h00 - 16h45</td>
            @for($i = 0 ; $i <6 ; $i++)
            <td> <select name="act{{$i}}{{3}}" id="select">
            <option value="" selected>--</option>
            @foreach($modules as $module)
            <option value="{{$module->ID_mod}}" @if($acts[$i][3][0]==$module->Nom_mod) {{ "selected" }}@endif>{{$module->Nom_mod}}</option>
            @endforeach
            </select>  </td>
            @endfor
        </tr>
        <tr>
            <td>17h00 - 18h45</td>
            @for($i = 0 ; $i <6 ; $i++)
            <td> <select name="act{{$i}}{{4}}" id="select">
            <option value="" selected>--</option>
            @foreach($modules as $module)
            <option value="{{$module->ID_mod}}" @if($acts[$i][4][0]==$module->Nom_mod) {{ "selected" }}@endif>{{$module->Nom_mod}}</option>
            @endforeach
            </select>  </td>
            @endfor
        </tr>
        
    </table></form></div> 
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
            <a href="{{route("Peda.Salles")}}" >
                <i class="fa fa-school"></i>
                <span class="nav-text">
                    Gèrer les salles
                </span>
            </a>
            
        </li>
        <li class="has-subnav">
            <a href="{{route("Peda.Emploi.Show")}}" id="current">
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