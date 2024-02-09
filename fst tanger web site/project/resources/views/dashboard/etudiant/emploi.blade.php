<html>
  <head>
    <link rel="stylesheet" href="{{ url('2.css')}}">
    <title>Emploi du tempss</title>
  </head>
  <body><div class="area">
    <div class="container">
        <label for="">Filière</label>:<label>{{$filiere}}</label>
    </div>
    <div class="table">
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
            </tr>
        </thead>    
        <tr>
            <td>09h00 - 10h45</td>
            <td>{{$act[0][0][0]}}</td>
            <td>{{$act[1][0][0]}}</td>
            <td>{{$act[2][0][0]}}</td>
            <td>{{$act[3][0][0]}}</td>
            <td>{{$act[4][0][0]}}</td>
            <td>{{$act[5][0][0]}}</td>

        </tr>
        <tr>
            <td>11h00 - 12h45</td>
            <td>{{$act[0][1][0]}}</td>
            <td>{{$act[1][1][0]}}</td>
            <td>{{$act[2][1][0]}}</td>
            <td>{{$act[3][1][0]}}</td>
            <td>{{$act[4][1][0]}}</td>
            <td>{{$act[5][1][0]}}</td>
        </tr>
        <tr>
            <td> 13h00 - 14h45</td>
            <td>{{$act[0][2][0]}}</td>
            <td>{{$act[1][2][0]}}</td>
            <td>{{$act[2][2][0]}}</td>
            <td>{{$act[3][2][0]}}</td>
            <td>{{$act[4][2][0]}}</td>
            <td>{{$act[5][2][0]}}</td>
        </tr>
        <tr>
            <td>15h00 - 16h45</td>
            <td>{{$act[0][3][0]}}</td>
            <td>{{$act[1][3][0]}}</td>
            <td>{{$act[2][3][0]}}</td>
            <td>{{$act[3][3][0]}}</td>
            <td>{{$act[4][3][0]}}</td>
            <td>{{$act[5][3][0]}}</td>
        </tr>
        <tr>
            <td>17h00 - 18h45</td>
            <td>{{$act[0][4][0]}}</td>
            <td>{{$act[1][4][0]}}</td>
            <td>{{$act[2][4][0]}}</td>
            <td>{{$act[3][4][0]}}</td>
            <td>{{$act[4][4][0]}}</td>
            <td>{{$act[5][4][0]}}</td>
        </tr>
    </table></div>  
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
            <a href="{{route("Etu.Emploi")}}" id="current">
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