<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <title>Ajouter un étudiant</title>
  </head>
  <body><div class="area">
    <form  action="{{ route("Peda.CreateEtu.Modify") }}" method="post" class="form">
        @csrf
        <h2>Ajouter un étudiant</h2>

        <div class="input-box">
            <input type="nom" required placeholder="Nom" name="nom">
            <span class="icon">
                <i class="fa-regular fa-user"></i>
            </span>
            <label>Nom</label>
        </div>
        <div class="input-box">
            <input type="prenom" required placeholder="Prenom" name="prenom">
            <span class="icon">
                <i class="fa-solid fa-user"></i>
            </span>
            <label>Prenom</label>
        </div>

        <div class="input-box">
            <input type="email" required placeholder="Email" name="email">
            <span class="icon">
                <i class="fa-regular fa-envelope"></i>
            </span>
            <label>Email</label>

        </div>


        <div class="input-box">
            <input type="password" required placeholder="Password" name="password">
            <span class="icon">
                <i class="fa-solid fa-lock"></i>
            </span>
            <label>Password</label>
        </div>

        <div class="input-box">
            <input type="nom" required placeholder="CNE" name="cne">
            <span class="icon">
                <i class="fa-regular fa-address-card"></i>
            </span>
            <label>CNE</label>
        </div>

        <div class="input-box">
            
            <select name="delegue" id="" >
                <option value="1">Oui</option>
                <option value="0" selected>Non</option>
            </select>
            <span class="icon">
                <i class="fa-solid fa-user-tie"></i>
            </span>
            <label>Délégué</label>
        </div>

        <div class="input-box">
            
            <select name="filiere" id="" >
                @foreach($filieres as $filiere)
                <option value="{{$filiere->ID_fil}}">{{$filiere->Nom_fil}}</option>
                @endforeach
            </select>
            <span class="icon">
                <i class="fa-solid fa-graduation-cap"></i>
            </span>
            <label>Filiere</label>
        </div>

        <button type="submit" class="btn">Ajouter</button>
    </form>
    <nav class="main-menu">
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
                <a href="{{route("Peda.CreateEtu")}}" id="current">
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