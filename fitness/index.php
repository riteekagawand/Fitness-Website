<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Physical Fitness</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <?php
         session_start();
        ?>
        <div class="main">
            <nav>
                <div class="logo">
                    <img src="2.png" alt="logo">
                </div>
                <div class="nav-links">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="exercise.html">Exercise</a></li>
                        <li><a href="aboutus.html">About us</a></li>
                        <li><a href="registration.php">Login</a></li>
                    </ul>
                </div>
            </nav>
            <div class="information">
                <div class="overlay"></div>
                <img src="fitness.jpg" class="fitness">
                <div id="circle">
                    <div class="feature one">
                        <h4>360° View</h4>
                    </div>
                    <div class="feature two">
                        <h4>User-Friendly</h4>
                    </div>
                    <div class="feature three">
                        <h4>Animated Video</h4>
                    </div>
                    <div class="feature four">
                        <h4>Easy To Use</h4>
                    </div>
                </div>

            </div>
            <div class="controls">
                <img src="arrow.png" id="upBtn">
                <h4>Features</h4>
                <img src="arrow.png" id="downBtn">
            </div>
        </div>
        <div id="demo">
            <button type="button" onclick="loadDoc()">More Info</button>
          </div>
        <script>
            var circle = document.getElementById("circle");
            var upBtn = document.getElementById("upBtn");
            var downBtn = document.getElementById("downBtn");

            var rotateValue = circle.style.transform;
            var rotateSum;
            upBtn.onclick =function(){
                rotateSum = rotateValue+ "rotate(-90deg)";
                circle.style.transform=rotateSum;
                rotateValue= rotateSum;
            }

            downBtn.onclick =function(){
                rotateSum = rotateValue+ "rotate(+90deg)";
                circle.style.transform=rotateSum;
                rotateValue= rotateSum;
            }

            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
        </script>
    </body>
</html>