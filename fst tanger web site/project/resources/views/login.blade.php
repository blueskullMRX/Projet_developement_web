<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{url("home/login.css")}}">
        <link rel="stylesheet" href="{{url("home/content.css")}}">
        <link rel="stylesheet" href="{{url("home/1.css")}}">
        <link rel="stylesheet" href="{{url("home/footer.css")}}">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Login</title>
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
    <div class="container">
        <div class="contenst">
            <h2 style="font-size: 50px;text-align: center;"><i class='bx bxs-graduation' ></i>
                FST TANGER</h2>
            <div class="text-sci">
                <h2 >Bienvenue!<br>dans notre site web</h2>
                <p>Notre site web est une plateforme pour les étudiants de la Faculté des Sciences et Technologies de Tanger, il leur permet d’avoir accès à toutes les informations dont ils ont besoin.</p>

                <div class="social-icons">
                    <a href="https://www.instagram.com/fsttanger"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://www.facebook.com/fstt.ac.ma"><i class='bx bxl-facebook-circle' ></i></a>
                    <a href="https://twitter.com/fsttofficielle"><i class='bx bxl-twitter' ></i></a>
                    
                </div>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="{{ route("Login") }}" method="post">
                    @csrf
                    <h2>Sign In</h2>


                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-envelope' ></i>
                        </span>
                        <input type="email" name="email"  required>
                        <label>Email</label>

                    </div>


                    <div class="input-box">
                        <span class="icon">
                            <i class='bx bxs-key' ></i>
                        </span>
                        <input type="password" name="password"  required>
                        <label>Password</label>
                    </div>

                    <button type="submit" class="btn">Sign In</button>
                </form>
            </div>
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
                            <li><a href="/">About us</a></li>
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