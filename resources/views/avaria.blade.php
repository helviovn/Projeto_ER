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
<body>
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
            <div class="row" style="column-gap: 170px">
                <div class="col-6" style="padding-right: 11%">
                    <br>
                    <div class="row">
                        <a  style="color: inherit" href="/helvio" class="fa-solid fa-arrow-left fa-2x"></a>
                        <br><br>
                        <h2 style="text-align: left">Estado dos componentes</h2>
                        <br><br>
                        <a class="logo">
                            <img src="img/carroAvaria.png" class="media" alt="" style="border-radius: 20px;width: 130%">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <br><br><br>
                    <div class="veiculo veiculo-1">Bateria</div>
                    <br><br>
                    <div class="veiculo veiculo-1">Motor</div>
                    <br><br>
                    <div class="veiculo veiculo-1">??leo</div>
                    <br><br>
                    <div class="veiculo veiculo-1">
                        <p style="color: red" class="fa-solid fa-triangle-exclamation fa-2x"></p>
                        Pneus
                    </div>
                    <br><br>
                    <div class="veiculo veiculo-1">TRAV??ES</div>
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
