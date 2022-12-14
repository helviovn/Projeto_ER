<!DOCTYPE html>
<html lang="">

<head>
    <meta name="viewport" content="width=device-width, initial.scale=1.0">
    <title>Side Bar</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body onload="realtimeClock()">
<div class="header" style="background-image: url('img/Info.png');!important; display: block; background-size: cover;">
    <div class="side-nav">
        <a href="/" class="logo">
            <img src="img/LOGO33.png" class="logo-img" alt="">
        </a>
        <ul class="nav-links">
            <li><a href="/acidente"><i class="fa-solid fa-car-burst"></i>
                    <p>Acidente</p></a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa-solid fa-phone-volume"></i>
                    <p>Chamada</p></a></li>
            <li><a href="/avaria"><i class="fa-solid fa-triangle-exclamation"></i>
                    <p>Avaria</p></a></li>
            <li><a href="#"><p></p></a></li>
            <li><a href="#"><p></p></a></li>
            <li><a href="#"><p></p></a></li>
            <div class="active"></div>
        </ul>
    </div>

        <div class="ecra">
            <div class="container">
                <div class="row">
                    <div class="col-2"style="margin-top:2.2%">
                        <i class="fa-solid fa-wifi fa-3x"></i>
                        <br><br><br>
                        <a class="fa-solid fa-phone fa-5x" href="/contactos1" style="color: black"></a>
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
                                    <a class="fa-solid fa-ellipsis fa-3x" href="/veiculo" style="color:white; display: block; width: 50%; margin-right: auto;"></a>
                                </div>
                                <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <a href="/nav"><img src="img/uni.png" class="universidade" alt="" style="width: 100%"></a>
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
                                    <a class="fa-solid fa-gear fa-3x" href="/definicoes" style="color: black"></a>
                                </div>
                                <div class="col">
                                    <div class="col">
                                        <a class="fa-solid fa-grip fa-3x" href="/appshelvio" style="color:inherit; display: block; width: 50%; margin-right: auto;"></a>
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

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5  class="modal-title" id="exampleModalLongTitle">A receber chamada de...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="font-weight: bolder">
                Leonardo (Wara)
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Atender</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Recusar</button>
            </div>
        </div>
    </div>
</div>

</html>
