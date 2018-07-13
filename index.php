<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Pani Programistka - Kodowanie responsywnych stron WWW | PSD to HTML | SEO</title>
    <meta name="description" content="Masz projekt strony WWW? Zakoduję ją i wrzucę na serwer. Zadbam o SEO, szybkość ładowania i responsywność. Działajmy razem!">
    <meta name="keywords" content="strony WWW, kodowanie stron WWW, Patrycja Chociej, Michał Iłenda, projektowanie stron, projekt strony internetowej, responsywność, responsywne strony internetowe, pani progamistka, programista stron internetowych, psd to html, WWW, strony internetowe, SEO, RWD, kodowanie projektu psd, kodowanie stron internetowych, html, strona firmowa, wdrażanie stron internetowych, szybka strona internetowa, optymalizacja stron">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66787878-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-66787878-2');
    </script>

    
</head>
<body>
    
    <div id="particles-js">
        <button class="arrow-down goto-promises">
            <img src="img/arrow-pointing-to-down.svg" title="Przewiń w dół" alt="Strzałka w dół">
        </button>
    </div>
    
    <header>
        <div class="header-content">
            <h2><a href="http://paniprogramistka.pl/">Pani<span>.</span>Programistka</a></h2>
            <div class="language">
                <a href="/index.php" class="language-active">PL</a>
                <p>|</p>
                <a href="/en.php">ENG</a>
            </div>
        </div>
    </header>

    <main>

        <section id="presentation">
            <div class="text">
                <h1>Ty projektujesz,<br>ja koduję</h1>
                <h4>Masz projekt strony WWW? Z chęcią go zakoduję<br>i wrzucę na serwer, tak abyś nie musiał się niczym martwić.</h4>
                <button class="btn btn-primary goto-contact">Skontaktuj się</button>
                <button id="noproject" class="btn btn-nocolor">Nie mam projektu</button>
            </div>
            <div class="wave-wrapper wave-animation">
              <div class="wave-wrapper-inner bg-top">
                <div class="wave wave-top"></div>
              </div>
              <div class="wave-wrapper-inner bg-middle">
                <div class="wave wave-middle"></div>
              </div>
              <div class="wave-wrapper-inner bg-bottom">
                <div class="wave wave-bottom"></div>
              </div>
            </div>
        </section>

        <section id="promises">
            <h2>OBIECANKI</h2>
            <div class="container-promises">
                <figure>
                    <img src="img/responsive-design-symbol.svg" alt="RWD symbol">
                    <figcaption>RESPONSYWNOŚĆ<br><span>Nikt nie zostanie na stronie, która się nie dostosuje do jego urządzenia. Dopasowanie się do rozmiaru ekranu to podstawa.</span></figcaption>
                </figure>
                <figure>
                    <img src="img/targeting.svg" alt="SEO symbol">
                    <figcaption>SEO NA 5+<br><span>Optymalizacja pod przeglądarki, czyli wszystko to, co sprzyja pozycji Twojej strony w Google.</span></figcaption>
                </figure>
                <figure>
                    <img src="img/eye-of-god.svg" alt="Oko symbol">
                    <figcaption>PROJEKT JEST ŚWIĘTY<br><span>Niezależnie od tego, co jest w projekcie, strona po wdrożeniu będzie wyglądać tak samo.</span></figcaption>
                </figure>
                <figure>
                    <img src="img/online-support.svg" alt="Support symbol">
                    <figcaption>SUPPORT W PRZYSZŁOŚCI<br><span>Nie martw się tym, że zostawię Cię z niczym. Nawet gdy skończę projekt, nadal możesz liczyć na moją pomoc.</span></figcaption>
                </figure>
                <figure>
                    <img src="img/stars.svg" alt="Gwiazdy symbol">
                    <figcaption>ANGAŻ NA 100%<br><span>Obojgu z nas zależy na stworzeniu świetnej strony, która posłuży na lata. Twój projekt zawsze jest prioretytem.</span></figcaption>
                </figure>
                <figure>
                    <img src="img/talk.svg" alt="Rozmowa symbol">
                    <figcaption>KULTURA NA LUZIE<br><span>Pożegnajmy poważne słówka z kodeksu prawnego. Cieszmy się swobodą języka, ale z kulturą.</span></figcaption>
                </figure>
            </div>
        </section>
        
        <section id="portfolio">
            <h2>CHWALIPIĘTA</h2>
            <div id="slideshow">
                <div class="slide">
                    <div class="portfolio-leftside">
                        <img src="img/panikadrowa-bg-2.png" alt="Pani Kadrowa">
                    </div>
                    <div class="portfolio-rightside">
                        <h3><a href="http://panikadrowa.pl/">Pani Kadrowa</a></h3>
                        <p>Strona WWW zakodowana według projektu PSD na zlecenie Pani Kadrowej. Dodatkowo szablon współpracuje z systemem CMS Wordpress w celu ułatwienia zmiany treści na stronie.</p>
                        <a href="http://panikadrowa.pl/"><strong>ZOBACZ STRONĘ <img src="img/external-link-symbol.svg" alt="Link symbol"></strong></a>
                        <ul class="portfolio-technologies">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript</li>
                            <li>jQuery</li>
                            <li>Wordpress</li>
                            <li>PHP</li>
                            <li>RWD</li>
                        </ul>
                    </div>
                </div>
                <div class="slide fade">
                    <div class="portfolio-leftside">
                        <img src="img/fitfoodies.eu-screen.png" alt="FitFoodies">
                    </div>
                    <div class="portfolio-rightside">
                        <h3><a href="http://fitfoodies.eu/">FitFoodies.eu</a></h3>
                        <p>Strona WWW zakodowana według projektu PSD na zlecenie FitFoodies.</p>
                        <a href="http://fitfoodies.eu/"><strong>ZOBACZ STRONĘ <img src="img/external-link-symbol.svg" alt="link symbol"></strong></a>
                        <ul class="portfolio-technologies">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JQuery</li>
                            <li>RWD</li>
                            <li>PHP</li>
                        </ul>
                    </div>
                </div>
                <div class="slide fade">
                    <div class="portfolio-leftside">
                        <img src="img/paniprogramistka-screen.png" alt="Pani Programistka">
                    </div>
                    <div class="portfolio-rightside">
                        <h3><a href="#">Pani Programistka</a></h3>
                        <p>Strona WWW w pełni zaprojektowana i zakodowana przeze mnie. </p>
                        <a href="#"><strong>ZOBACZ STRONĘ <img src="img/external-link-symbol.svg" alt="Link symbol"></strong></a>
                        <ul class="portfolio-technologies">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript</li>
                            <li>JQuery</li>
                            <li>RWD</li>
                            <li>PHP</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <h4>
                Nie wstydź się,<br>porozmawiajmy.
            </h4>
            <form class="contact-form" name="contact-form" method="post" action="send_form_email.php" onsubmit="return validateForm()">
                <div class="inputs-2">
                    <div class="input-container">
                        <label id="name-label" class="label" for="name">Imię</label>
                        <input id="name" class="input-text" type="text" name="fname" placeholder="Jan Kowalski" >
                    </div>
                    <div class="input-container">
                        <label id="email-label" class="label" for="email">E-mail</label>
                        <input id="email" class="input-text" type="email" name="femail"  placeholder="jan@kowalski.pl">
                    </div>
                </div>
                <div>
                    <label id="message-label" class="label" for="message">Wiadomość</label>
                    <textarea id="message" class="input-text-message" name="ftextmessage" type="text" rows="4" placeholder="Cześć! Chciałbym spytać o..."></textarea>
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="Wyślij">
                    <div class="message-sent">
                    <?php 
                    if ($_SESSION["message_sent"] == "success")
                    {
                        ?>
                        Wiadomość wysłana!<br>Bardzo cenię Twój czas, więc odpowiem najszybciej jak to możliwe!
                        <?php
                        session_unset(); 
                    }
                    ?>
                    </div>
                </div>
            </form>
            <div class="info">
                <figure>
                    <img src="img/close-envelope.svg" alt="E-mail icon">
                    <figcaption>patrycja.chociej@gmail.com</figcaption>
                </figure>
                <figure>
                    <img src="img/phone-receiver.svg" alt="Phone icon">
                    <figcaption>(+48) 692-727-929</figcaption>
                </figure>
                <figure>
                    <img src="img/facebook-placeholder-for-locate-places-on-maps.svg" alt="Location icon">
                    <figcaption>Białystok, Polska</figcaption>
                </figure>
                <div class="social-icons">
                    <a href="https://www.facebook.com/pchociej" target="_blank" title="Znajdź mnie na Facebook'u">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                        <g>
                            <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" fill="#FFFFFF"/>
                        </g>
                    </a>
                    <a href="https://www.instagram.com/fatamorgana_pl/" target="_blank" title="Znajdź mnie na Instagramie">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;" xml:space="preserve">
                        <g>
                            <path d="M421.981,16.562C410.941,5.519,397.711,0,382.298,0H56.248C40.83,0,27.604,5.521,16.561,16.562   C5.52,27.6,0.001,40.828,0.001,56.243V382.29c0,15.413,5.518,28.644,16.56,39.683c11.043,11.04,24.272,16.563,39.687,16.563   h326.046c15.41,0,28.644-5.523,39.684-16.563c11.043-11.039,16.557-24.27,16.557-39.683V56.243   C438.534,40.825,433.021,27.604,421.981,16.562z M157.462,158.025c17.224-16.652,37.924-24.982,62.097-24.982   c24.36,0,45.153,8.33,62.381,24.982c17.228,16.655,25.837,36.785,25.837,60.386c0,23.598-8.609,43.729-25.837,60.379   c-17.228,16.659-38.014,24.988-62.381,24.988c-24.172,0-44.87-8.336-62.097-24.988c-17.228-16.652-25.841-36.781-25.841-60.379   C131.621,194.81,140.234,174.681,157.462,158.025z M388.865,370.589c0,4.945-1.718,9.083-5.141,12.416   c-3.433,3.33-7.519,4.996-12.282,4.996h-305.2c-4.948,0-9.091-1.666-12.419-4.996c-3.333-3.326-4.998-7.471-4.998-12.416V185.575   H89.08c-3.805,11.993-5.708,24.462-5.708,37.402c0,36.553,13.322,67.715,39.969,93.511c26.65,25.786,58.721,38.685,96.217,38.685   c24.744,0,47.583-5.903,68.527-17.703c20.937-11.807,37.486-27.839,49.676-48.112c12.183-20.272,18.274-42.4,18.274-66.38   c0-12.94-1.91-25.406-5.715-37.402h38.547v185.014H388.865z M388.865,115.626c0,5.52-1.903,10.184-5.716,13.99   c-3.805,3.809-8.466,5.711-13.989,5.711h-49.676c-5.517,0-10.185-1.903-13.99-5.711c-3.806-3.806-5.708-8.47-5.708-13.99V68.522   c0-5.33,1.902-9.945,5.708-13.848c3.806-3.901,8.474-5.854,13.99-5.854h49.676c5.523,0,10.185,1.952,13.989,5.854   c3.812,3.903,5.716,8.518,5.716,13.848V115.626z" fill="#FFFFFF"/>
                        </g>
                    </a>
                    <a href="https://www.linkedin.com/in/patrycja-chociej-0963ab12b/" target="_blank" title="Znajdź mnie na LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
                        <g>
                            <path id="LinkedIn" d="M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707   c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21   v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824   C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463   c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z    M5.477,420.56h92.184v-277.32H5.477V420.56z" fill="#FFFFFF"/>
                        </g>
                    </a>
                    <a href="https://www.upwork.com/freelancers/~01769d026a1a74fe5c" target="_blank" title="Znajdź mnie na Upwork'u">
                      <svg style="enable-background:new 0 0 56.7 56.7;" version="1.1" viewBox="0 0 56.7 56.7" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <path d="M42.4,17.7c-5.3,0-9.3,3.5-10.9,9c-2.5-3.9-4.5-8.3-5.6-12.1h-5.6v14.7c0,2.9-2.4,5.3-5.3,5.3c-2.9,0-5.3-2.4-5.3-5.3V14.7  H4.3v14.7c0,6.1,4.9,11,10.9,11c6,0,10.9-4.9,10.9-11v-2.5c1.1,2.2,2.5,4.6,4,6.7l-3.5,16.3h5.7L34.7,38c2.2,1.4,4.7,2.2,7.7,2.2  c6.1,0,11.1-5,11.1-11.4C53.5,22.7,48.5,17.7,42.4,17.7z M42.4,34.6c-2.2,0-4.5-1-6.3-2.5l0.6-2.2v-0.1c0.4-2.4,1.7-6.4,5.8-6.4  c3.1,0,5.6,2.5,5.6,5.6C48,32.1,45.3,34.6,42.4,34.6z" fill="#ffffff"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        Pani Programistka © 2018
    </footer>

    <script src="scripts/particles.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/script.min.js"></script>
</body>
</html>