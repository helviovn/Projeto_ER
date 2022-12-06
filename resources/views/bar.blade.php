<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial.scale=1.0">
    <title>Side Bar</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="caixote">

            <div class="box">
                <label>
                    <input type="range" class="range" value="23"  min="15" max="28" onmousemove="rangeSlider(this.value)">
                    <span class="rangeValue"> 0 </span>
                </label>
            </div>

            <script>
                function rangeSlider(value){
                    document.getElementById('rangeValue').innerHTML = value;
                }
            </script>
    </div>

</body>
</html>
