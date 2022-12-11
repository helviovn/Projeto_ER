<!DOCTYPE html>
<html lang="">

<head>
    <meta name="viewport" content="width=device-width, initial.scale=1.0">
    <title>Side Bar</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body onload="realtimeClock()">
<div class="header" style="background-image: url('img/Info.png');!important; display: block; background-size: cover;">
    <div class="side-nav">
        <a href="#" class="logo">
            <img src="img/LOGO33.png" class="logo-img" alt="">
        </a>
        <ul class="nav-links">
            <li><a href="/acidente"><i class="fa-solid fa-car-burst"></i>
                    <p>Acidente</p></a></li>
            <li><a data-toggle="modal" data-target="#exampleModalCenter" href="/atender"><i class="fa-solid fa-phone-volume"></i>
                    <p>Chamada</p></a></li>
            <li><a href="#"><p>Acidente</p></a></li>
            <li><a href="#"><p>Acidente</p></a></li>
            <li><a href="#"><p>Acidente</p></a></li>
            <li><a href="#"><p>Acidente</p></a></li>
            <div class="active"></div>
        </ul>
    </div>

    <div class="ecra">
        <div class="contactos">
            <!--  SEARCH FORM -->
            <div class="headerXX">


                <!--  ADD-CONTACT BUTTON/ICON -->
                <a href="#"><i class="fas fa-plus-circle add"></i></a>
            </div>

            <!--  CONTACT LIST -->
            <div class="contacts-library">

                    <hr class="new5">
                    <a href="#">
                        <div class="contact-section">
                            <li class="list__item">
                                <p class="contact-name"><i class="fa-solid fa-user add space icon-gradient"></i>Afonso</p>
                            </li>
                            <i class="fas fa-phone"></i>
                        </div>
                    </a>

                    <hr class="new5">

                    <a href="#">
                        <div class="contact-section">
                            <li class="list__item">
                                <p class="contact-name"><i class="fa-solid fa-user add space icon-gradient"></i>Marco</p>
                            </li>
                            <i class="fas fa-phone"></i>
                        </div>
                    </a>

                    <hr class="new5">



                </ul>
            </div>
        </div>

        </div>
    </div>
</div>
</body>
</html>



