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
            <li><a href="#"><i class="fa-solid fa-car-burst"></i>
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
            <div class="container">
                <div class="row">
                    <div class="col-2"style="margin-top:2.2%">
                        <i class="fa-solid fa-wifi fa-3x"></i>
                        <br><br><br>
                        <i class="fa-solid fa-phone fa-5x"></i>
                        <br><br><br>
                        <a class="fa-solid fa-music fa-5x" href="/media" style="color:inherit; display: block; width: 50%; margin-right: auto;"></a>
                        <br><br><br>
                        <a class="fa-solid fa-map-location fa-5x" href="/nav" style="color:inherit; display: block; width: 50%; margin-right: auto;"></a>
                    </div>

                    <div class="col-6">
                        <div >
                            <br>
                            <div class="row" style="background-color: #1a202c; border-radius: 60px">
                                <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                <div class="col" style="margin-left: 10%">
                                    <i class="fa-solid fa-screwdriver-wrench fa-3x" style="color: white"></i>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-car-battery fa-3x" style="color: white"></i>
                                </div>
                                <div class="col">
                                    <i class="fa-sharp fa-solid fa-temperature-full fa-3x" style="color: white"></i>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-ellipsis fa-3x" style="color: white"></i>
                                </div>
                                <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <img src="img/uni.png" class="universidade" alt="" style="width: 100%">
                    </div>


                    <div class="col-2">
                        <div>
                            <h2 id="clock" style="margin-top: 20%"></h2>
                            <script>
                                function realtimeClock() {
                                    var rtClock = new Date();

                                    var hours = rtClock.getHours();
                                    var minutes = rtClock.getMinutes();
                                    var seconds = rtClock.getSeconds();

                                    var amPm = ( hours > 12 ) ? "PM" : "AM";

                                    hours= (hours > 12) ? hours - 12 : hours;

                                    hours = ("0" + hours).slice(-2);
                                    minutes = ("0" + minutes).slice(-2)
                                    seconds = ("0" + seconds).slice(-2);

                                    document.getElementById('clock').innerHTML = hours + " : " + minutes + " : " + seconds + " " + amPm;

                                    var t = setTimeout(realtimeClock, 500);
                                }
                            </script>

                            <br>

                            <br>
                            <img src="img/tempo.png" class="tempo" alt="" style="width: 100%; border-radius: 20px">

                            <br>
                            <div class="row" style="margin-top: 30%">
                                <div class="col">
                                    <i class="fa-solid fa-gear fa-3x"></i>
                                </div>
                                <div class="col">
                                    <div class="col">
                                        <i class="fa-solid fa-grip fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>
