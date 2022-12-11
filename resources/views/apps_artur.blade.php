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
            <li><a href="/acidente_artur"><i class="fa-solid fa-car-burst"></i>
                    <p>Acidente</p></a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa-solid fa-phone-volume"></i>
                    <p>Chamada</p></a></li>
            <li><a href="/avaria_artur"><i class="fa-solid fa-triangle-exclamation"></i>
                    <p>Avaria</p></a></li>
            <li><a href="#"><p></p></a></li>
            <li><a href="#"><p></p></a></li>
            <li><a href="#"><p></p></a></li>
            <div class="active"></div>
        </ul>
    </div>

    <div class="ecra">
        <div class="container">
            <div class="row" style="column-gap: 40px">
                <div class="col-1">
                    <h3 style="text-align: center"></h3>
                    <a class="fa-solid fa-arrow-left fa-2x" href="/artur" style="color:inherit; display: block; width: 50%; margin-right: auto;"></a>
                </div>
                <div class="col-2" style="margin-left: -6%">
                    <br>
                    <a href="/contactos2"><img class="radios" src="img/contactos.png"  alt="" style="display: block; margin-left: auto; width: 50%; margin-right: auto"></a>
                    <h3 style="text-align: center">Contactos</h3>
                    <br><br>
                    <a href="/veiculo_artur"> <img class="radios"  src="img/car.png" alt="" style="display: block; margin-left: auto; width: 80%; margin-right: auto"></img></a>

                    <h3 style="text-align: center">Veículo</h3>
                    <br><br>
                    <a href="/radio_artur"> <img class="radios" src="img/radio.png" alt="" style="display: block; margin-left: auto; width: 50%; margin-right: auto"></img></a>
                    <h3 style="text-align: center">Radio</h3>
                </div>
                <div class="col-2">
                    <br>
                    <a href="/media_artur"> <img class="radios" src="img/musica.png" alt="" style="display: block; margin-left: auto; width: 50%; margin-right: auto"></img></a>
                    <h3 style="text-align: center">Música</h3>
                    <br><br>
                    <a href="/nav_artur"> <img class="radios" src="img/gpsapple.png" alt="" style="display: block; margin-left: auto; width: 40%; margin-right: auto"></img></a>
                    <h3 style="text-align: center">Navegação</h3>
                    <br><br>
                    <img class="radios" src="img/minecraft.png" alt="" style="display: block; margin-left: auto; margin-top: 10%; width: 40%; margin-right: auto"></img>
                    <h3 style="text-align: center">Minecraft</h3>
                </div>
                <div class="col-2">
                    <br>
                    <img class="radios" src="img/twitter.png" alt="" style="display: block; margin-left: auto; width: 50%; margin-right: auto"></img>
                    <h3 style="text-align: center">Twitter</h3>
                    <br><br>
                    <img class="radios" src="img/discord.png" alt="" style="display: block; margin-left: auto; width: 40%; margin-right: auto"></img>
                    <h3 style="text-align: center">Discord</h3>
                    <br>
                    <img class="radios" src="img/youtube.png" alt="" style="display: block; margin-left: auto; margin-top: 5%; width: 100%; margin-right: auto"></img>
                    <h3 style="text-align: center">Youtube</h3>
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
                        <br><br><br><br><br><br><br><br><br><br><br><br>
                        <h3 style="padding-left: 22%">
                            <i class="fa-solid fa-gear fa-3x"></i>
                        </h3>

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
