<!DOCTYPE html>
<html lang="">

<head>
    <meta name="viewport" content="width=device-width, initial.scale=1.0">
    <title>Side Bar</title>
    <link rel="stylesheet" href="css/app.css">
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
        <div class="contactos">
            <!--  SEARCH FORM -->
            <div class="headerXX">


                <!--  ADD-CONTACT BUTTON/ICON -->
                <a href="/helvio" ><i class="fa-solid fa-arrow-left fa-2x"></i></a>
                <a href="#"><i class="fas fa-plus-circle add"></i></a>
            </div>

            <!--  CONTACT LIST -->
            <div class="contacts-library">

                    <hr class="new5">
                    <a href="#">
                        <div class="contact-section" onclick="openPopup()" >
                            <li class="list__item">

                                <p class="contact-name"> <i class="fa-solid fa-user add space icon-gradient"></i>Andr?? Caires</p>
                            </li>
                            <i class="fas fa-phone"></i>

                        </div>
                    </a>


                    <hr class="new5">

                    <a href="#">
                        <div class="contact-section" onclick="openPopup()">
                            <li class="list__item">
                                <p class="contact-name" id="nome" value="Maria"><i class="fa-solid fa-user add space icon-gradient"></i>Jo??o Pedro Freitas</p>
                            </li>
                            <i class="fas fa-phone"></i>
                        </div>
                    </a>

                    <hr class="new5">

                    <a href="#">
                        <div class="contact-section" onclick="openPopup()" >
                            <li class="list__item">
                                <p class="contact-name" id="nome" value="Martim"><i class="fa-solid fa-user add space icon-gradient"></i>Toguro</p>
                            </li>
                            <i class="fas fa-phone"></i>
                        </div>
                    </a>

                </ul>
            </div>
        </div>

        </div>
    </div>
</div>

<div class="container">

    <div class="popup" id="popup">
        <img class="imgpopup" src="/img/cellphoneBall.png">
        <h1 id="nomeChamada"></h1>
        <label id="minutes">00</label>:
        <label id="seconds">00</label> <br>
        <img src="/img/soundwave.png" style="width: 200px">
        <form >
            <button class="button" type="submit"  onclick="closePopup()">Desligar</button>
        </form>
    </div>
</div>
</body>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5  class="modal-title" id="exampleModalLongTitle">A receber chamada de...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: #fff; color: black; font-weight: bold;">
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




<script>
    //Nome dos contactos


    function setName(value){
        document.getElementById("nomeChamada").innerHTML = value ;
    }

//popup
    let popup = document.getElementById("popup");
    function openPopup(){
        popup.classList.add("open-popup")
    }
    function closePopup(){
        popup.classList.remove("open-popup")
    }
    </script>

<script type="text/javascript">
    var minutesLabel = document.getElementById("minutes");
    var secondsLabel = document.getElementById("seconds");
    var totalSeconds = 0;
    setInterval(setTime, 1000);

    function setTime()
    {
        ++totalSeconds;
        secondsLabel.innerHTML = pad(totalSeconds%60)+ " ";
        minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
    }

    function pad(val)
    {
        var valString = val + "";
        if(valString.length < 2)
        {
            return "0" + valString;
        }
        else
        {
            return valString;
        }
    }
</script>
</html>



