<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSTT</title>
    <link rel="stylesheet" href="{{url("style2.css")}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>       
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
</head>
<body >
    <script src="{{url("script.js")}}"></script>

    <header class="header">
        <nav class="navbar">
            <a href="/">Home</a>
            @auth
            <a href="{{route("Dashboard")}}">Dashboard</a>
            <a href="{{route("Logout")}}">Logout</a>
            @else
            <a href="{{route("Form.Login")}}">Login</a>
            @endauth
        </nav>
        
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
    </header>

    <!-- Header -->
    <!-- Start Landing -->
    <div class="landing animation">
      <div class="overlay"></div>
      <div class="text box" id="animate">
        <div class="content">
          <h2><a href="#">
            Bonjour<br />
            <span>de la Faculté des Sciences et Techniques à Tanger</span> 
          </a>
          </h2>
          <p>
          Créée en 1995, la FST de Tanger est un des huit établissements de l’Université Abdelmalek Essaâdi
          . Elle regroupe actuellement une trentaine de programmes d'études repartis sur quatre cycles offerts par neuf 
            départements de formation.
          </p>
        </div>
      </div>
      <i class=" fleft "></i>
      <i class=" fright "></i>
      <ul class="bullets ">
        <li class="one"></li>
        <li class="active two"></li>
        <li class="tri"></li>
      </ul>
    </div>
    <!-- End Landing -->
    <!-- Start annonces -->
    <div class="annonces">
      <div class="container">
        <div class="main-heading">
          <h2>Annonces</h2>
        </div>
        <div class="annonces-container">
          <div class="srv-box">
              <a href="#"><h3>DÉMARRAGE DES ENSEIGNEMENTS DU SEMESTRE DU PRINTEMPS 2023-2024</h3>
              <p>
                Le Doyen de la Faculté des Sciences et Techniques à Tanger porte à la connaissance de tous les étudiants, que les enseignements du semestre...
              </p></a>
          </div>
          <div class="srv-box">
            <a href="#">
              <h3>CALENDRIER ET LISTES DES EXAMENS DE LA SESSION DE RATTRAPAGE – SEMESTRE D’AUTOMNE 2023-2024</h3>
              <p>
                Le Doyen de la Faculté des Sciences et Techniques de Tanger porte à la connaissance des étudiants du cycle licence que les examens de la session de rattrapage du semestre ...
              </p>
            </a>
          </div>
          <div class="srv-box">
            <a href="#">
              <h3>
                10ÈME ÉDITION DU CONCOURS FRANCOPHONE INTERNATIONAL « MA THÈSE EN 180 SECONDES »</h3>
              <p>
                L’Université Abdelmalek Essaaâdi informe ses doctorants de toutes les disciplines que le Centre National pour la Recherche Scientifique et Technique (CNRST) et l’Université Mohammed V de Rabat (UM5-R) ont ouvert les inscriptions pour le Concours...
              </p>
            </a>
          </div>
          <div class="srv-box">
            <a href="#">
              <h3>
                COMPÉTITION « HULT PRIZE »</h3>
              <p>
                Joignez-vous à nous pour la Cérémonie d’Ouverture du Hult Prize à la FSTT, une matinée captivante dédiée à l’inspiration, à l’innovation et à la création d’un impact positif...
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--  annonces -->
    <!-- duest -->
    <div class="design">
      <div class="cont">
        <h2><b>Diplôme d’Etudes Universitaires Scientifiques et Techniques (DEUST)</b></h2>
       <p class="txt"><br>
         un diplôme national de l'enseignement supérieur. Il peut être délivré à la demande des intéressés ayant validé les quatre premiers semestres de la filière de Licence sciences et techniques.
      <br><br>actuellement délivré durant le parcours de formation menant à la licence. Le diplôme d’études universitaires scientifiques et techniques sanctionnait le premier cycle des études universitaires générales, d'une durée de deux ans.</p>
      </div>
      <div class="text animations">
        <h1>filiéres deust information</h1>
        <ul>
          <li><a href="#">MIPC</a></li>
          <li><a href="#">MIP</a></li>
          <li><a href="#">GEGM</a></li>
          <li><a href="#">BCG</a></li>
        </ul>
      </div>
    </div>
    <!-- duest -->
 
    <footer class="footer">
        <div class="container">
            <div class="row grid-container">
                <div class="footer-col  grid-item">
                    <h4>FSTT</h4>
                    <ul>
                        <li><a href="https://www.google.com/maps?ll=35.736441,-5.89535&z=14&t=m&hl=en&gl=MA&mapclient=embed&cid=14076712857883792000">Location</a> </li>
                        <li><a href="#">Contact us</a> </li>
                       <p class="whit"> <i class='bx bx-envelope'></i>+ 212 (0) 5 39 39 39 54 / 55</p>
                       <p class="whit"><i class='bx bxs-phone'></i> administration.fstt@uae.ac.ma</p>
                    </ul>
                </div>
                <div class="footer-col grid-item ">
                    <h4>Go Back Home</h4>
                    <div class="logo">
                        <a href="#"><img src="img/fst.png" alt="home" width="300" ></a>
                    </div>
                    
                </div>
                <div class="footer-col grid-item">
                    <h4>follow us</h4>
                    <div class="socials ">
                        <a href="https://www.facebook.com/fstt.ac.ma"><i class=" fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/fsttanger"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/fsttofficielle"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/school/fsttanger"><i class="fab fa-linkedin-in"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>
        <script src="{{url("script.js")}}"></script>

    </footer>
