<!DOCTYPE html>
<html>
    <head>
        <title>FST - Tanger</title>
        <link rel="stylesheet" href="{{url("home/home.css")}}">
        <link rel="stylesheet" href="{{url("home/content.css")}}">
        <link rel="stylesheet" href="{{url("home/1.css")}}">
        <link rel="stylesheet" href="{{url("home/footer.css")}}">
        <script>
          document.addEventListener("DOMContentLoaded", function() {
              let currentIndex = 0; 
              const interval = 2000; 
              let intervalId;
              function switchSlide() {
                  const radios = document.querySelectorAll('input[name="switch"]');
                  radios[currentIndex].checked = true;
                  currentIndex = (currentIndex + 1) % radios.length;
              }
              intervalId = setInterval(switchSlide, interval);
              const slides = document.querySelectorAll('.content');
              slides.forEach(function(slide) {
                  slide.addEventListener('mouseover', function() {
                      clearInterval(intervalId); 
                  });

                  slide.addEventListener('mouseout', function() {
                      intervalId = setInterval(switchSlide, interval);
                  });
              });
          });
      </script>
    </head>
    <body>
        <header class="header">
              <img src="https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/fst-1024x383.png" alt="" width="250" style="margin-left: 5%;">
              <img src="https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/logo-uae-1024x297.png" alt="" width="250" style="float: right;margin-right: 5%;">
              <nav>
                <a href="/"><i class="fa fa-home"></i> Home</a>
                <a href="{{route("Annonce")}}"><i class="fa fa-scroll"></i> Annonces</a>
                <a href="{{route("Filiere")}}"><i class="fa fa-graduation-cap"></i> filières</a>
                @auth
                <a href="{{route("Logout")}}"><i class="fa fa-user-pen"></i>           Logout</a>
                <a href="{{route("Dashboard")}}"><i class="fa fa-user-pen"></i>           Dashboard</a>
                @else
                <a href="{{route("Form.Login")}}"><i class="fa fa-user-pen"></i>           Login</a>
                @endauth
                <div class="animation start-home"></div>
              </nav>
          </header>
          <div class="area">
            <div class="contentt">
            <input type="radio" name="switch" id="i_1"  checked>
            <input type="radio" name="switch" id="i_2">
            <input type="radio" name="switch" id="i_3">
            <input type="radio" name="switch" id="i_4">
            <input type="radio" name="switch" id="i_5">
            <input type="radio" name="switch" id="i_6">
        <div class="wrapper">
          <div class="slide">
            <div class="content content1">
              <h1 class="title">Bienvenue  <br>à la faculté des sciences<br>et techniques de Tanger</h1>
              <div class="presenat"></div>
            </div>   
          </div>
          <div class="slide">
            <div class="content content2">
              <h1 class="title1">Histoire</h1>
              <div class="page2">
                <p id="histoire">La Faculté des Sciences et Techniques de Tanger (FSTT), relevant de l’Université Abdelmalek Essaâdi a été créée en 1995. Elle fait partie des établissements de l’enseignement supérieur à accès régulé et a pour missions la formation initiale dans les domaines scientifiques et techniques, la formation continue ainsi que la recherche et le développement dans les domaines des sciences et techniques.</p>
              </div>
            </div>    
          </div>
          <div class="slide">
            <div class="content content3">
              <h1 class="title1">Formation Initiale</h1>
              <div class="page2">
                <p id="formation">La FST de Tanger offre des cursus de formation qui préparent aux diplômes suivants : <br>

                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9733 DEUST : Diplôme d’Etudes Universitaire en Sciences et Techniques (Bac +2). <br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9733 LST : Diplôme de Licence en Sciences et Techniques (Bac +3). <br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9733 MST : Diplôme de Master en Sciences et Techniques (Bac +5). <br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9733 DI : Diplôme d’Ingénieur d’État (Bac +5). <br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9733 Doctorat en Sciences et Techniques (Bac +8). <br>
                  La FST de Tanger propose une panoplie de formation riches et diversifiées répondant aux divers besoins du monde socio-économique (12 filières LST, 13 filières MST, 4 filières Ingénieurs).</p>
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="content content4">
              <h1 class="title1">Formation continue</h1>
              <div class="page2">
                <p id="formation_continue">
                  Les programmes de la formation continue sont destinés aux professionnels qui souhaitent acquérir des nouvelles compétences ou approfondir leurs connaissances dans leur domaine d’activité. <br>

Les formations proposées couvrent des programmes variés dans les domaines des sciences et de la technologie tels que : <br>

Les sciences de l’ingénierie de l’Informatique- Civil –Mécanique-Electrotechnique – Industrielle et autres. 
                </p>
              </div>
            </div>    
          </div>
          <div class="slide">
            <div class="content content5">
              <h1 class="title1">Recherche scientifique</h1>
              <div class="page2"><p id="recherche">La recherche scientifique à la FST de Tanger est structurée autour de 7 laboratoires, 11 équipes de recherche, 2 centres (CDI : Centre de Développement et de l’Innovation et le CFA : Centre de Fabrication Additive) et un Observatoire Digital de l’Environnement. Les thématiques de recherches développées par ces structures concernent : <br>

                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9737 L’agro-alimentaire, la biotechnologie, Biologie et santé. <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9737 L’Énergie et l’Efficacité Énergétique. <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9737 L’Eau et l’Environnement. <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9737 Les Matériaux et les Nanomatériaux. <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9737 Les Mathématiques et Informatique. <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#9737 Autres.</p></div>
            </div>    
          </div>
          <div class="slide">
            <div class="content content6">
              <h1 class="title1">Les clubs des Etudiants</h1>
              <div class="page2">
                <p id="formation_continue">
                  Les clubs des étudiants peuvent apporter une valeur ajoutée significative à la vie universitaire. Tout d’abord, les clubs offrent une occasion aux étudiants de s’engager dans des activités qui les passionnent et de rencontrer des personnes partageant les mêmes intérêts. <br>

De plus, les clubs peuvent aider à renforcer les compétences de leadership et à développer des compétences professionnelles, ce qui peut être bénéfique pour les futurs parcours professionnels des étudiants.
                </p>
              </div>
            </div>   
          </div>  
        </div>
        <div class="controls">
          <label for="i_1">⬤</label>
          <label for="i_2">⬤</label>
          <label for="i_3">⬤</label>
          <label for="i_4">⬤</label>
          <label for="i_5">⬤</label>
          <label for="i_6">⬤</label>
        </div>
            </div>
          </div>
          <footer class="footer">

            <div class="container-fot">
                <div class="row grid-container">
                    <div class="footer-col  grid-item">
                        <h4>FSTT</h4>
                        <ul>
                          <li><a href="https://maps.app.goo.gl/B4dKthCNYseUioio9">Location</a> </li>
                          <li><a href="https://mail.google.com/mail/u/0/?su=كلية+العلوم+و+التقنيات+طنجة&body=كلية+العلوم+و+التقنيات+طنجة+على+خرائط+Google%0Ahttps://maps.app.goo.gl/B4dKthCNYseUioio9&hl=ar&gl=ma&url=https://maps.app.goo.gl/B4dKthCNYseUioio9&fs=1&tf=cm">Contact us</a> </li>
                          <li><a href="">About us</a></li>
                        </ul>
                    </div>
                    <div class="footer-col grid-item ">
                        <h4>Go Back Home</h4>
                        <div class="logo">
                            <a href="#"><img src="https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/fst-1024x383.png" alt="home" width="300" ></a>
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
    
        </footer>
    </body>
</html>