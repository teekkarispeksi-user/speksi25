<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Teekkarispeksi 25 vuotta</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
              offset: 500,
              currentClass: 'active',
              changeHash: false,
              filter: ':not(.external)'
      });
      var hashTagActive = "";
      $(".scroll").click(function (event) {
        if(hashTagActive != this.hash) { //this will prevent if the user click several times the same link to freeze the scroll.
            event.preventDefault();
            //calculate destination place
            var dest = 0;
            if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
                dest = $(document).height() - $(window).height();
            } else {
                dest = $(this.hash).offset().top;
            }
            //go to destination
            $('html,body').animate({
                scrollTop: dest
            }, 1000, 'swing');
            hashTagActive = this.hash;
        }
    });
    });
    </script>
   	<div class="container-fluid nohpadding">
      <nav class="navi navbar-default navbar-fixed-top navbar" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-uppercase" href="#"><img src="img/nappi.png" class="img-responsive pull-left nappi">Teekkarispeksi<br>25 vuotta</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul id="nav" class="nav navbar-nav navbar-right text-uppercase">
              <li><a href="#sect-naytelma">Revyy</a></li>
              <li><a href="#sect-juhla">Juhlagaala</a></li>
              <li><a href="kauppa/" class="external">Liput</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div>
  	<div class="container-fluid nohpadding">
      <div class="row nomargin image-bar-container">
        <img id="img-top" class="image-bar" src="img/top.jpg" />
        <div id="juhlaviikko" class="row nomargin text-center text-uppercase">Teekkarispeksin 25-vuotisjuhlaviikko</div>
        <div id="sect-ohjelma" class="section"></div>
      </div>
      <div id="ohjelma" class="row row-centered nomargin content-bar valkoinen">
        <div class="col-lg-1 col-centered"></div>
        <div class="col-xs-12 col-sm-9 col-lg-8 col-centered">
          <h2>Vuosijuhlaviikon tapahtumat</h2>
          <p>
            Teekkarispeksi juhlii 25-vuotista taivaltaan tänä syksynä. Juhlaviikon ohjelma tarjoaa nähtävää ja koettavaa sekä uusille että vanhoille speksiläisille. 
          </p>
          <h3>Ohjelma</h3>
          <ul class="media-list">
            <a class="btn btn-link btn-ohjelma scroll" href="#sect-naytelma">
              <li class="media revyy">
                <div class="media-body">
                  <h4 class="media-heading">Juhlarevyy</h4>
                  Aleksanterin teatterissa ma 13.10.2014 ja ti 14.10.2014
                </div>
              </li>
            </a><br>
            <a class="btn btn-link btn-ohjelma external" href="http://teekkarispeksi.fi/speksi/tapahtumat/vanhan-speksin-katseluilta-gorsussa">
              <li class="media">
                <div class="media-body katseluilta">
                  <h4 class="media-heading">Vanhojen speksien katseluilta</h4>
                  Gorsussa to 16.10.2014
                </div>
              </li>
            </a><br>
            <a class="btn btn-link btn-ohjelma scroll" href="#sect-juhla">
              <li class="media gaala">
                <div class="media-body">
                  <h4 class="media-heading">Vuosijuhlagaala</h4>
                  Suvilahden Kattilahallissa la 18.10.2014
                </div>
              </li>
            </a>
          </ul>
        </div>
      </div>
      <div class="row nomargin image-bar-container">
        <img class="image-bar" src="img/3.jpg" />
        <div id="sect-naytelma" class="section"></div>
      </div>
  		<div id="naytelma" class="row row-centered nomargin content-bar keltainen">
        <div class="col-lg-1 col-centered"></div>
        <div class="col-xs-12 col-sm-9 col-lg-8 col-centered">
          <h2>25-vuotisjuhlarevyy 13.-14.10.2014</h2>
          <p>
          Teekkarispeksin 25-vuotisjuhlarevyy on koko illan teatterispektaakkeli, joka tarjoaa kahdessa näytöksessä 13.-14.10.2014 mahdollisuuden nähdä Aleksanterin teatterin lavalla läpileikkauksen Teekkarispeksin neljännesvuosisadan historiaan. Yhteensä yli 60 näyttelijää ja tanssijaa aina 1990-luvun hämäristä viime vuosiin saakka palaavat parrasvaloihin vielä kerran viihdyttämään juuri sinua.
        </p>
        <p>
          <b>Näytösajat:</b> 13.-14.10.2014 kello 19.00<br>
          <b>Paikka:</b> Aleksanterin teatteri, Albertinkatu 32, Helsinki<br>
          <b>Liput:</b> 15 &euro; (opiskelijat), 20/25 &euro; (muut)
        </p>
        <p>
          <a href="kauppa/" class="btn btn-default btn-lg" role="button">Osta lippuja</a>
          <a href="https://www.facebook.com/events/640057099442093" class="btn btn-default btn-lg btn-fb" role="button">Facebook-tapahtuma</a><br>
        </p>
        <p>
          Juhlarevyyssä menneiden vuosien speksihahmot nähdään niin klassisissa kohtauksissa kuin myös uusissa ja odottamattomissakin tilanteissa, orkesteri koostuu menneiden speksibändien legendaarisista jäsenistä, musiikki on speksibiisien parhaimmistoa - ja kokonaisuuden kruunaavat luonnollisesti yleisön omstart-huudot sekä niiden aiheuttamat ainutlaatuiset käänteet.
        </p>
        <p>
          Esitys ei kuitenkaan ole vain ilotulitusta aisteille, vaan ohjelmanumerot nivoo yhteen tarina speksiläisyydestä. Mitä tarkoittaa, että speksissä ovat komeimmat miehet ja kauneimmat naiset? Että speksi on älyn voitto materiasta ja luovuuden voitto rutiineista? Että speksi on ja voi?
        </p>
        <p>
          <b>Tule ottamaan selvää – ja näkemään parhaat palat 25 vuoden teekkarispeksihistoriasta!</b>
        </p>
        </div>
    </div>
    <div class="row nomargin image-bar-container">
        <img class="image-bar" src="img/5.jpg" />
        <div id="sect-juhla" class="section"></div>
    </div>
      <div id="juhla" class="row row-centered nomargin content-bar mustavalkoinen">
        <div class="col-lg-1 col-centered"></div>
        <div class="col-xs-12 col-sm-9 col-lg-8 col-centered">
          <h2>Vuosijuhlagaala 18.10.2014</h2>
          <p>
          Teekkarispeksin 25. juhlavuosi huipentuu lauantaina 18.10.2014 juhlagaalaan, johon ovat lämpimästi tervetulleita kaikki Teekkarispeksin tekemiseen neljännesvuosisadan aikana osallistuneet vanhat ja uudet speksiläiset seuralaisineen. Luonnollisesti myös aikaisempien vuosikymmenten teekkaritempausten speksiläiset ovat tervetulleita mukaan juhliin, sillä nykymuotoinen Teekkarispeksi edistää jo 1930-luvulla alkanutta teekkareiden speksiperinnettä.
        </p>
        <p>
          Kyseessä on speksihenkinen iltajuhla, josta kaikenlainen jäykistely on kaukana: mukana on ruokaa, juomaa sekä esityksiä pikkutunneille saakka. Pukukoodi on juhlava mutta vapaamuotoinen. Juhlapaikan hulppeat puitteet tarjoaa Suvilahden Kattilahalli Helsingissä.
        </p>
        <p>
          Juhlagaalan jatkoilla on saunomismahdollisuus, ja pyydämme tästä kiinnostuneita varautumaan omalla pyyhkeellä.
        </p>
        <p>
          <b>Aika:</b> Lauantai 18.10.2014 kello 19 <span class="glyphicon glyphicon-arrow-right glyph-nuoli"></span><br>
          <b>Paikka:</b> Suvilahden Kattilahalli, Sörnäisten rantatie 22, Helsinki<br>
          <b>Illalliskortit:</b> 50/85 euroa
        </p>
        <p>
          <a href="kauppa/#/gaala" class="btn btn-default btn-lg" role="button">Ilmoittaudu</a>
          <a href="https://www.facebook.com/events/679685888786138" class="btn btn-default btn-lg btn-fb" role="button">Facebook-tapahtuma</a><br>   
        </p>
        <h3>VIP-vieraaksi?</h3>
        <p>
          Tunnetko itsesi tärkeämmäksi kuin muut? Haluatko jakaa menestystäsi meille muille? Haluatko omaa tilaa ja erinomaisempaa palvelua?
        </p>
        <p>
        Vuosijuhlagaalaan on myynnissä myös rajoitettu erä VIP-paketteja, jotka antavat erinomaisen tavan tukea Teekkarispeksi ry:n toimintaa. VIP-vierailla on oma sisäänkäynti ohi jonojen, erillinen VIP-lounge tarjoiluineen, mahdollisuus päästä backstagelle tapaamaan illan esiintyjiä sekä paljon muuta!
        </p>
        <p>
          Lisätietoja <a href="kauppa/#/gaala">lippukaupasta.</a>
        </p>
        </div>
      </div>
      <div class="row nomargin image-bar-container">
        <img class="image-bar" src="img/1.jpg" />
        <div id="sect-mikaspeksi" class="section"></div>
      </div>
      <div id="mikaspeksi" class="row row-centered nomargin content-bar valkoinen">
        <div class="col-lg-1 col-centered"></div>
        <div class="col-xs-12 col-sm-9 col-lg-8 col-centered">
          <h2>Teekkarispeksin historia</h2>
          <h3>Speksin ensiaskeleet Suomessa</h3>
          <p>
            Suomeen speksi rantautui vuonna 1933 Teknillisen Korkeakoulun Ylioppilaskunnan menestyksekkäänä tempauksena. Tempausmuotoisia teekkarispeksejä toteutettin parinkymmenen vuoden tauon jälkeen vielä viisi kappaletta 1950- ja 1960-luvuilla. Teekkarispeksi saavutti suunnattoman suosion niin teekkareiden kuin suurenkin yleisön keskuudessa. Näiden jo legendaarisen maineen saavuttaneiden produktioiden jälkeen koitti kuitenkin pitkä hiljaisuus. Aatteen palo sammutti speksiperinteen 60-luvulla ja viimeinen vanhan ajan Teekkarispeksi Vanhat portaat esitettiin vuonna 1967. Speksiperinne hiipui ja unohtui. Ainoastaan 1950-luvulla alkanut ruotsinkielinen Medicinarklubben Thoraxin speksi porskutti eteenpäin ja onkin nykyään kiistatta vanhin suomalainen speksi.
          </p>
          <h3>Speksin toinen tuleminen</h3>
          <p>
            Speksiperinne alkoi heräillä henkiin, kun Lääketieteellisen kandidaattiseuran ensimmäinen speksi sai ensi-iltansa vuonna 1988, vieden toisiksi vanhimman suomalaisen speksin arvonimen. Kului vielä kaksi vuotta ennen kuin tekniikan ylioppilaista löytyi jälleen se tarvittava kipinä, jonka speksin tekeminen vaatii. Kaksi kunnianhimoista teekkaria päätti herättää speksiperinteen henkiin ja näin syntyi Gordon. Se oli menestys: kahdessa esityksessä kävi lähes tuhat katsojaa. Suomen kolmanneksi vanhin speksi oli saanut alkunsa. Kun pyörä oli saatu pyörimään, ei sitä voinut pysäyttää enää mikään. Toinen toistaan upeammat Teekkarispeksit seurasivat Gordonia. Tänä vuonna uuden ajan Teekkarispeksi juhlii 25. syntymäpäiväänsä.
          </p>
          <p><strong>Lisää tietoa Teekkarispeksistä löydät yhdistyksen sivuilta: <a href="http://www.teekkarispeksi.fi/">www.teekkarispeksi.fi.</a></strong>
        </div>
      </div>
      <div class="row nomargin image-bar-container">
        <img class="image-bar" src="img/2.jpg" />
        <div id="sect-juhla" class="section"></div>
      </div>
	  </div>
	</body>
</html>
