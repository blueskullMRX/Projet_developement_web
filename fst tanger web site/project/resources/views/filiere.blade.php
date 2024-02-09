<!DOCTYPE html>
<html>
    <head>
      <title>Filière</title>
      <link rel="stylesheet" href="{{url("home/fil.css")}}">
      <link rel="stylesheet" href="{{url("home/content.css")}}">
      <link rel="stylesheet" href="{{url("home/1.css")}}">
      <link rel="stylesheet" href="{{url("home/footer.css")}}">
        <script src="{{url("home/1.js")}}"></script>
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
            <div class="announcements-container">
                @foreach($filieres as $filiere)
                <div class="announcement">
                    <button type="submit" class="bt1" onclick="myFunction(this)">{{$filiere->Nom_fil}}</button>
                    <div class="announcement-content">
                        <table id="table">
                            <tr>
                                <th><i class="fa-solid fa-check"></i> OBJECTIFS</th>
                                <th><i class="fa-solid fa-calendar-day"></i> PROGRAMME</th>
                                <th><i class="fa-solid fa-expand"></i> COMPETENCES VISEES ET DEBOUCHES</th>
                            </tr>
                            <tr>
                                <td>{{$filiere->OBJECTIFS}}</td>
                                <td>{{$filiere->PROGRAMME}}</td>
                                <td>{{$filiere->COMPETENCES}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <footer class="footer">

            <div class="container-fot">
                <div class="row grid-container">
                    <div class="footer-col  grid-item">
                        <h4>FSTT</h4>
                        <ul>
                            <li><a href="">Location</a> </li>
                            <li><a href="">Contact us</a> </li>
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