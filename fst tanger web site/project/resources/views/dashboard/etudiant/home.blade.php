<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <title>Dashboard</title>
  </head>
  <body><div class="area">
    <form  action="{{ route("Peda.Create.Modify") }}" method="post" class="form1">
        @csrf
        <h1>Bienvenue {{Auth::user()->name}}</h1>

        <div class="input-box1">
            <span class="icon1">
                <i class="fa-regular fa-user"></i>
            </span>
            <label>Nom</label>
            <textarea name="" id="" cols="30" rows="10" readonly>{{Auth::user()->name}}</textarea>
        </div>
        <div class="input-box1">
            <span class="icon1">
                <i class="fa-solid fa-user"></i>
            </span>
            <label>Prenom</label>
            <textarea name="" id="" cols="30" rows="10" readonly>{{Auth::user()->prenom}}</textarea>
        </div>

        <div class="input-box1">
            <span class="icon1">
                <i class="fa-regular fa-envelope"></i>
            </span>
            <label>Email</label>
            <textarea name="" id="" cols="30" rows="10" readonly>{{Auth::user()->email}}</textarea>
        </div>
        <div class="input-box1">
            <span class="icon1">
                <i class="fa-solid fa-user-tie"></i>
            </span>
            <label>Role</label>
            <textarea name="" id="" cols="30" rows="10" readonly>@switch(Auth::user()->role)
                @case(0){{"Responsable du service pédagogique"}}
                    @break
                @case(1){{"Étudiant"}}
                    @break
                @case(2){{"Professeur responsable d’un module"}}
                    @break
                @case(3){{"Responsable d’une filière"}}
                    @break
                @case(4){{"Chef d’un département"}}
                    @break
                    
            @endswitch</textarea>
        </div>
    </form>
     
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
                    <a href="{{route("Etu.Demande")}}">
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