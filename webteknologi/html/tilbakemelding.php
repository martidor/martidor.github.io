<?php
  if( $_REQUEST["name"] || $_REQUEST["epost"] || $_REQUEST["melding"] )
  {
     header("Location: index.html");
     exit();
  }
?>
<html>
<head>
	
	<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/greeting.js" type="text/javascript"></script>
    <script src="js/dropdown.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/map.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="images/favicon.ico">

<title>Tilbakemelding | turist.no</title>

</head>
<body>
    <section id="menu">
        <ul class="topnav">
            <li><a href="index.html">Hjem</a></li>

            <li>
                <a href="#">Om Trondheim</a>
                    <ul class="subnav">
                        <li><a href="generelt.html">Generelt</a></li>
                        <li><a href="historie.html">Historie</a></li>
                    </ul>
            </li>

            <li>
                <a href="#">Attraksjoner</a>
                <ul class="subnav">
                    <li><a href="tyholttaarnet.html">Tyholttårnet</a></li>
                    <li><a href="nidarosdommen.html">Nidarosdommen</a></li>
                    <li><a href="festningen.html">Festningen</a></li>
                    <li><a href="trondheimtorg.html">Trondheim Torg</a></li>
                    <li><a href="munkholmen.html">Munkholmen</a></li>
                    <li><a href="studentersamfundet.html">Studentersamfundet</a></li>
                    <li><a href="solsiden.html">Solsiden</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Spisesteder</a>
                <ul class="subnav">
                    <li><a href="spisesteder/baklandet_skydsstation.html">Baklandet Skydsstation</a></li>
                    <li><a href="spisesteder/credo.html">Credo</a></li>
                    <li><a href="spisesteder/palmehaven.html">Palmehaven</a></li>
                    <li><a href="spisesteder/sponhuset.html">Sponhuset</a></li>
                    <li><a href="spisesteder/tavern.html">Tavern</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Utesteder</a>
                <ul class="subnav">
                    <li><a href="utesteder/dengodenabo.html">Den Gode Nabo</a></li>
                    <li><a href="utesteder/samfundet.html">Studentersamfundet</a></li>
                    <li><a href="utesteder/studio26.html">Studio 26</a></li>
                    <li><a href="utesteder/trondheim_mikrobryggeri.html">Trondheim Mikrobryggeri</a></li>
                </ul>

            </li>

            <li><a href="galleri/galleri.html">Galleri</a></li>
            <li><a href="ordliste.html">Trøndersk Ordliste</a></li>
            <li><a href="tilbakemelding.php">Tilbakemelding</a></li>
            <li><a href="sitemap.html">Sidekart</a></li>
            <li><div id="greet">
                    <div id="message"></div>
                    <div id="clock"></div>
              </div>
            </li>

        </ul>
    </section>

    <section id="sidebar">

        <iframe id="forecast_embed" height="205" width="200" src="http://forecast.io/embed/#lat=63.4310&amp;lon=-10.3921&amp;name=Trondheim&amp;units=ca"> </iframe> 
        <!--http://forecast.io/#/f/63.4310,10.3921 http://blog.forecast.io/forecast-embeds/--> 

    </section>

    <section id="content">
        <header> 
                <img src="images/header.png" alt="byvaapen">
        </header>
        <h2>Tilbakemelding</h2>


        <p>
            <form action="<?php $_PHP_SELF ?>" method="POST">
                <fieldset>
                    <legend>Gi oss tilbakemelding på siden!</legend>
                    <label>Navn:</label> <input type="text" name="name" required style="width:200px;margin-left:3px"><br>
                    <label>Email:</label> <input type="email" name="epost" required style="width:200px"><br><br>
                    <label>Kommentarer: <br><textarea name="melding" required style="width:250px;height:100px"></textarea><br><br>
                    <input type="submit" name="submit">
                </fieldset>
            </form>
        </p>

    </section>

    <section id="footer">
    <p class="footerp"> Laget av martinbn, uyendn og martidor</p>
    <p class="footerp"> Webteknologi IT2805 </p>
    </section>

    

</body>
</html>