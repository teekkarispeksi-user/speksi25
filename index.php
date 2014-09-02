<?php
if($_GET['salaisuus'] != 666) {
  header("Location: /", 302);
} else {
  // Ääkköset nodetalle
  header("Content-type: text/html; charset=utf-8");
}
?>
<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Speksi 25v</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <script>
    $(document).ready(function() {
      $('#nav').onePageNav({
              scrollOffset: 512,
              currentClass: 'active',
              changeHash: false,
              filter: ':not(.external)',
              begin: function() {
                //Hack so you can click other menu items after the initial click
                $('body').append('<div id="device-dummy" style="height: 1px;"></div>');
              },
              end: function() {
                $('#device-dummy').remove();
              }
          });
    });
    </script>
   	<div class="container-fluid nohpadding">
      <div class="navi navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-uppercase" href="#">Speksi 25v</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul id="nav" class="nav navbar-nav navbar-right text-uppercase">
              <li><a href="#juhla">Vuosijuhla</a></li>
              <li><a href="#naytelma">Näytelmä</a></li>
              <li><a href="#">Liput</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
    </div>
  	<div class="container-fluid nohpadding">
      <div class="row nomargin image-bar-container">
        <img class="image-bar" src="img/top.jpg" />
        <div id="juhlaviikko" class="row nomargin text-center text-uppercase">Speksin 25-vuotisjuhlaviikko</div>
      </div>
  		<div id="naytelma" class="row row-centered nomargin">
        <div class="col-xs-1 col-centered"></div>
        <div class="col-xs-8 col-centered">
          <h2>25-VUOTISJUHLAREVYY 13.-14.10.2014</h2>
          <p>
          Teekkarispeksin 25-vuotisjuhlarevyy on koko illan teatterispektaakkeli, joka tarjoaa vain kahdessa näytöksessä 13.-14.10.2014 mahdollisuuden nähdä Aleksanterin teatterin lavalla läpileikkauksen Teekkarispeksin neljännesvuosisadan historiaan. Yhteensä yli 60 näyttelijää ja tanssijaa aina 1990-luvun hämäristä viime vuosiin saakka palaavat parrasvaloihin vielä kerran viihdyttämään juuri sinua.
          </p>
          <p>
          Menneiden vuosien speksihahmot nähdään niin klassisissa kohtauksissa kuin myös uusissa ja odottamattomissakin tilanteissa, orkesteri koostuu menneiden speksibändien legendaarisista jäsenistä, musiikki on speksibiisien parhaimmistoa – ja kokonaisuuden kruunaavat luonnollisesti yleisön omstart-huudot sekä niiden aiheuttamat ainutlaatuiset käänteet.
          </p>
          <p>
          Esitys ei kuitenkaan ole vain ilotulitusta aisteille, vaan ohjelmanumerot nivoo yhteen tarina speksiläisyydestä. Mitä tarkoittaa, että speksissä ovat komeimmat miehet ja kauneimmat naiset? Että speksi on älyn voitto materiasta ja luovuuden voitto rutiineista? Että speksi on ja voi?
          </p>
          <p>
          Tule ottamaan selvää – ja näkemään samalla parhaat palat 25 vuoden teekkarispeksihistoriasta!
          </p>
        </div>
    </div>
    <div class="row nomargin image-bar-container">
        <img class="image-bar" src="img/mid.jpg" />
    </div>
      <div id="juhla" class="row row-centered nomargin">
        <div class="col-xs-1 col-centered"></div>
        <div class="col-xs-8 col-centered">
          <h2>Teekkarispeksin 25-vuotisjuhla 18.10.2014</h2>
          <p>
          Teekkarispeksin 25. juhlavuosi huipentuu lauantaina 18.10.2014 juhlagaalaan, johon ovat lämpimästi tervetulleita kaikki Teekkarispeksin tekemiseen neljännesvuosisadan aikana osallistuneet vanhat ja uudet speksiläiset seuralaisineen.
          </p>
          <p>
Kyseessä on speksihenkinen iltajuhla, josta kaikenlainen jäykistely on kaukana: mukana on ruokaa, juomaa sekä esityksiä - ja toivottavasti myös juuri sinä! Pukukoodi on juhlava mutta vapaamuotoinen, juhlapaikka salaisuuden verhon kätköissä mutta huhujen mukaan Helsingin keskusta-alueen liepeillä.
          </p>
        </div>
      </div>
      <div id="bw" class="row row-centered nomargin">
        <div class="col-xs-1 col-centered"></div>
        <div class="col-xs-8 col-centered">
          <h2>Yleistä tietoa</h2>
          <p>
            Put a bird on it flannel mlkshk before they sold out tattooed, Banksy Blue Bottle Wes Anderson. Helvetica Pinterest hella brunch. Forage slow-carb organic, biodiesel typewriter cred Brooklyn butcher deep v sartorial authentic. Viral post-ironic Wes Anderson pop-up. Bushwick tousled Tonx Thundercats, XOXO drinking vinegar lo-fi sustainable actually cliche flannel squid. Ethnic brunch church-key Pinterest. Ethnic readymade 8-bit XOXO pork belly, single- origin coffee fingerstache farm-to-table jean shorts Banksy iPhone paleo vinyl quinoa sustainable.
          </p>
        </div>
      </div>
	</div>
	</body>
</html>