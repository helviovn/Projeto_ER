<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial.scale=1.0">
    <title>Side Bar</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="header" style="background-image: url('img/Info.png');!important; display: block; background-size: cover;">
    <div class="side-nav">
        <a href="#" class="logo">
            <img src="img/LOGO33.png" class="logo-img" alt="">
        </a>
        <ul class="nav-links">
            <li><a href="#"><i class="fa-solid fa-car-burst"></i>
                    <p>Acidente</p></a></li>
            <li><a href="#"><p>Acidente</p></a></li>
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
                <h1 style="text-align: center">Menu navegação</h1>
                <br><br><br><br><br><br>
                <div class=""></div><div class=""></div><div class=""></div><div class=""></div><div class=""></div><div class=""></div><div class=""></div>
                <div class=""></div><div class=""></div><div class=""></div><div class=""></div><div class=""></div><div class=""></div>

                <div class="col-6">
                    <i class="fa-solid fa-6x fa-map-pin"></i>
                    <i class="fa-solid fa-cars"></i>
                    <h3 style="text-align: center">Partida</h3>

                    <div class="input-group flex-nowrap">
                        <input selected stype="text" class="form-control" placeholder="Localização atual"
                               aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <br><br><br>
                    <i class="fa-solid fa-car fa-6x"></i>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Rota menos congestionada</label>
                    </div>
                </div>
                <div class="col-6">
                    <i class="fa-solid fa-6x fa-location-crosshairs "></i>
                    <h3 style="text-align: center">Destino</h3>
                    <div class="input-group flex-nowrap">

                        <input selected stype="text" class="form-control" placeholder="Ex: Universidade da Madeira"
                               aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <br><br><br>
                    <i class="fa-solid fa-dollar-sign fa-6x"></i>
                    <div class="form-check form-switch">

                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Rota mais económica</label>
                    </div>
                </div>
            </div>
            <br><br><br>
            <a href="/nav2">
                <button type="button" class="btn btn-outline-success">Iniciar viagem</button>
            </a>



        </div>
    </div>
</div>
</body>
</html>
