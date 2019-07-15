<?php
  $birthdate = (new DateTime("1990-12-5 12:00:00"))->getTimestamp();
  $now = (new DateTime(date('Y-m-d H:i:s')))->getTimestamp();
  $age = $now - $birthdate;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cyrill-lehmann.ch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <meta name="description" content="Cyrill Lehmann, WebDev by chance"/>
  	<meta property="og:title" content="Cyrill Lehmann, WebDev by chance" />
  	<meta property="og:url" content="https://www.cyrill-lehmann.ch" />
  	<meta property="og:type" content=”website” />
    <meta property="og:image" content="./dist/screenshots/portfolio.jpg" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143821656-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143821656-1', { 'anonymize_ip': true });
    </script>
    <link rel="stylesheet" href="./dist/css/styles.min.css">
  </head>
  <body>

    <section class="observer">

      <h1 class="observer__title">
        Cyrill Lehmann
        <br>
        <span class="observer__subtitle">webdev by chance</span>
      </h1>

      <span class="observer__bait" id="observerBait"></span>
      <div class="fish__wrapper">
        <div class="fish__donut fish__donut--top"></div>
        <div class="fish">
          <div class="fish__donut"></div>
          <div class="fish__gills_wrapper">
            <div class="fish__gills fish__gills--left">
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
            </div>
            <div class="fish__gills fish__gills--center">
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
            </div>
            <div class="fish__gills fish__gills--right">
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
              <div class="fish__gill"></div>
            </div>
          </div>
          <div class="fish__eyes">
            <div class="observer__lid">
              <div class="observer__sclera observer__sclera--runAnimation">
                <div class="observer__iris">
                  <div class="observer__pupil">
                  </div>
                </div>
              </div>
            </div>
            <div class="observer__lid">
              <div class="observer__sclera observer__sclera--runAnimation">
                <div class="observer__iris">
                  <div class="observer__pupil">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="fish__tentacles">
          <div class="fish__tentacle"></div>
          <div class="fish__tentacle"></div>
          <div class="fish__tentacle"></div>
          <div class="fish__tentacle"></div>
          <div class="fish__tentacle"></div>
        </div>
      </div>
    </section>

    <section class="info">
      <ul class="info__journey_list">
        <li class="info__journey_listelement info__journey_listelement--title">name</li>
        <li class="info__journey_listelement">cyrill</li>
        <li class="info__journey_listelement">lehmann</li>
      </ul>
      <ul class="info__journey_list">
        <li class="info__journey_listelement info__journey_listelement--title">homebase</li>
        <li class="info__journey_listelement">chur</li>
        <li class="info__journey_listelement">switzerland</li>
      </ul>
      <ul class="info__journey_list">
        <li class="info__journey_listelement info__journey_listelement--title">age</li>
        <li class="info__journey_listelement"><span id="ageSeconds"><?= $age ?></span>s</li>
      </ul>
      <ul class="info__journey_list">
        <li class="info__journey_listelement info__journey_listelement--title">dayjob</li>
        <li class="info__journey_listelement">webdev</li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="https://clus.ch" target="_blank">clus</a></li>
      </ul>
      <ul class="info__journey_list">
        <li class="info__journey_listelement info__journey_listelement--title">interests</li>
        <li class="info__journey_listelement">skis</li>
        <li class="info__journey_listelement">code</li>
        <li class="info__journey_listelement">salad</li>
        <li class="info__journey_listelement">3d</li>
      </ul>
      <ul class="info__journey_list">
        <li class="info__journey_listelement info__journey_listelement--title">experience</li>
        <li class="info__journey_listelement">processwire</li>
        <li class="info__journey_listelement">django</li>
        <li class="info__journey_listelement">wordpress</li>
        <li class="info__journey_listelement">laravel</li>
        <li class="info__journey_listelement">stylus</li>
        <li class="info__journey_listelement">react</li>
        <li class="info__journey_listelement">threejs</li>
      </ul>
      <ul class="info__journey_list">
        <li class="info__journey_listelement info__journey_listelement--title">online</li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="https://github.com/adabs-urdum" target="_blank">github</a></li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="mailto:cyrill@adabs.ch">email</a></li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="https://www.instagram.com/adabs_urdum/" target="_blank">instagram</a></li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="https://www.facebook.com/cyrill.intressierts" target="_blank">facebook</a></li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="https://www.linkedin.com/in/cyrill-lehmann-500a55130/" target="_blank">linkedin</a></li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="https://steamcommunity.com/profiles/76561198149743749/" target="_blank">steam</a></li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="https://www.patreon.com/user/creators?u=5977648" target="_blank">patreon</a></li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="https://www.udemy.com/user/cyrill-lehmann/" target="_blank">udemy</a></li>
        <li class="info__journey_listelement"><a rel="noreferrer" href="https://cssbattle.dev/player/adabs" target="_blank">cssbattle</a></li>
      </ul>
    </section>

    <section class="showoff">

      <div class="showoff__wrapper">

        <div class="showoff__grid">
          <div class="showoff__gridelement">
            <div class="showoff__imagegrid">
              <img class="showoff__image" src="./dist/screenshots/portfolio.jpg" alt="cyrill-lehmann.ch">
            </div>
          </div>
          <div class="showoff__gridelement">
            <div class="showoff__text">
              <h2 class="showoff__title">this very page</h2>
              <div class="showoff__description">
                <p>code and design</p>
              </div>
              <div class="showoff__links">
                <p>
                  <a rel="noreferrer" href="https://cyrill-lehmann.ch/" target="_blank">cyrill-lehmann.ch</a>
                </p>
              </div>
              <ul class="showoff__toollist">
                <li class="showoff__toollistelement">javascript</li>
                <li class="showoff__toollistelement">css</li>
                <li class="showoff__toollistelement">not img</li>
                <li class="showoff__toollistelement">not svg</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="showoff__grid">
          <div class="showoff__gridelement">
            <div class="showoff__imagegrid">
              <img class="showoff__image" src="./dist/screenshots/smartenergy_2.jpg" alt="smart-energy.ibc-chur.ch">
              <img class="showoff__image" src="./dist/screenshots/smartenergy_1.jpg" alt="smart-energy.ibc-chur.ch">
              <img class="showoff__image" src="./dist/screenshots/smartenergy_3.jpg" alt="smart-energy.ibc-chur.ch">
            </div>
          </div>
          <div class="showoff__gridelement">
            <div class="showoff__text">
              <h2 class="showoff__title">smart check</h2>
              <div class="showoff__description">
                <p>code</p>
              </div>
              <div class="showoff__links">
                <p>
                  <a rel="noreferrer" href="https://smart-energy.ibc-chur.ch/" target="_blank">smart-energy.ibc-chur.ch</a>
                </p>
                <p>
                  <a rel="noreferrer" href="https://clus.ch/projekt/smart-energy/" target="_blank">clus</a>
                </p>
              </div>
              <ul class="showoff__toollist">
                <li class="showoff__toollistelement">wordpress</li>
                <li class="showoff__toollistelement">jquery</li>
                <li class="showoff__toollistelement">css transitions</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="showoff__grid">
          <div class="showoff__gridelement">
            <div class="showoff__imagegrid">
              <img class="showoff__image" src="./dist/screenshots/rubiksclus_1.jpg" alt="rubiksclus.cyrill-lehmann.ch">
              <img class="showoff__image" src="./dist/screenshots/rubiksclus_2.jpg" alt="rubiksclus.cyrill-lehmann.ch">
              <img class="showoff__image" src="./dist/screenshots/rubiksclus_3.jpg" alt="rubiksclus.cyrill-lehmann.ch">
            </div>
          </div>
          <div class="showoff__gridelement">
            <div class="showoff__text">
              <h2 class="showoff__title">rubik's clus</h2>
              <div class="showoff__description">
                <p>code and 3d</p>
              </div>
              <div class="showoff__links">
                <p>
                  <a rel="noreferrer" href="https://rubiksclus.cyrill-lehmann.ch/" target="_blank">rubiksclus.cyrill-lehmann.ch</a>
                </p>
              </div>
              <ul class="showoff__toollist">
                <li class="showoff__toollistelement">threejs</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="showoff__grid">
          <div class="showoff__gridelement">
            <div class="showoff__imagegrid">
              <img class="showoff__image" src="./dist/screenshots/envmap.jpg" alt="three2.cyrill-lehmann.ch">
            </div>
          </div>
          <div class="showoff__gridelement">
            <div class="showoff__text">
              <h2 class="showoff__title">threejs envmap</h2>
              <div class="showoff__description">
                <p>code and 3d</p>
              </div>
              <div class="showoff__links">
                <p>
                  <a rel="noreferrer" href="https://three2.cyrill-lehmann.ch" target="_blank">three2.cyrill-lehmann.ch (25mb pageload!)</a>
                </p>
              </div>
              <ul class="showoff__toollist">
                <li class="showoff__toollistelement">threejs</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="showoff__grid">
          <div class="showoff__gridelement">
            <div class="showoff__imagegrid">
              <img class="showoff__image" src="./dist/screenshots/vsg_1.jpg" alt="vsg.rtk.ch">
              <img class="showoff__image" src="./dist/screenshots/vsg_2.jpg" alt="vsg.rtk.ch">
              <img class="showoff__image" src="./dist/screenshots/vsg_3.jpg" alt="vsg.rtk.ch">
            </div>
          </div>
          <div class="showoff__gridelement">
            <div class="showoff__text">
              <h2 class="showoff__title">vsg.rtk.ch</h2>
              <div class="showoff__description">
                <p>multi step form with image upload, emails and save to database. using vanilla php on the backend.</p>
              </div>
              <div class="showoff__description">
                <p>code and design</p>
              </div>
              <div class="showoff__links">
                <p>
                  <a rel="noreferrer" href="https://vsg.rtk.ch" target="_blank">vsg.rtk.ch</a>
                </p>
              </div>
              <ul class="showoff__toollist">
                <li class="showoff__toollistelement">react</li>
                <li class="showoff__toollistelement">php</li>
                <li class="showoff__toollistelement">mysql</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="showoff__grid">
          <div class="showoff__gridelement">
            <div class="showoff__imagegrid">
              <img class="showoff__image" src="./dist/screenshots/leafpi_1.jpg" alt="leafpi">
              <img class="showoff__image" src="./dist/screenshots/leafpi_2.jpg" alt="leafpi">
              <img class="showoff__image" src="./dist/screenshots/leafpi_3.jpg" alt="leafpi">
            </div>
          </div>
          <div class="showoff__gridelement">
            <div class="showoff__text">
              <h2 class="showoff__title">leafpi</h2>
              <div class="showoff__description">
                <p>configured a raspberry pi to control nanoleaf aurora light panels within same wifi</p>
              </div>
              <div class="showoff__description">
                <p>code and design</p>
              </div>
              <div class="showoff__links">
                <p>
                  <a rel="noreferrer" href="https://leafpi.adabs.ch/" target="_blank">leafpi.adabs.ch</a>
                </p>
              </div>
              <ul class="showoff__toollist">
                <li class="showoff__toollistelement">react</li>
                <li class="showoff__toollistelement">apache</li>
                <li class="showoff__toollistelement">raspberrypi</li>
                <li class="showoff__toollistelement">python</li>
                <li class="showoff__toollistelement">php</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="showoff__grid">
          <div class="showoff__gridelement">
            <div class="showoff__imagegrid">
              <img class="showoff__image" src="./dist/screenshots/hartezeiten.jpg" alt="hartezeiten.ch">
            </div>
          </div>
          <div class="showoff__gridelement">
            <div class="showoff__text">
              <h2 class="showoff__title">harte zeiten für träumer</h2>
              <div class="showoff__description">
                <p>small shop using stripe as payment method</p>
              </div>
              <div class="showoff__description">
                <p>code</p>
              </div>
              <div class="showoff__links">
                <p>
                  <a rel="noreferrer" href="https://hartezeiten.ch/" target="_blank">hartezeiten.ch</a>
                </p>
              </div>
              <ul class="showoff__toollist">
                <li class="showoff__toollistelement">processwire</li>
                <li class="showoff__toollistelement">react</li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </section>

    <script src="./dist/js/main.js"></script>
  </body>
</html>
