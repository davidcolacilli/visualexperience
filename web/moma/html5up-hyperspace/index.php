<?php
if(isset($_POST['submit'])){
    // $to = "monica@moma-translations.com, magdalena@moma-translations.com";
	$to = "davidcolacilli@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Contact form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
	
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
	echo "<aside>";
	echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
	echo "</aside>";
	// You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Moma Translations</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>

<body>

    <!-- Sidebar -->
    <section id="sidebar">
        <div class="inner">
			<div class="logo">
				<img src="images/moma.jpg" alt="Moma Translations">
			</div>
            <nav>
                <ul>
                    <li><a href="#one">About us</a></li>
                    <li><a href="#two">Who we are</a></li>
                    <li><a href="#three">Get in touch</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- One -->
        <section id="one" class="wrapper style1 fade-up">
            <div class="inner">
                <h1>Focused on your business</h1>
                <h2>About us</h2>
                <ul>
                    <li>Literary, Technical &amp; Scientific Certified Senior English&frasl;Spanish Translators</li>
                    <li>Working professionally in the Translation Industry since 2003</li>
                    <li>Trusted by many Translation firms from around the world</li>
                    <li>International Memberships</li>
                </ul>
                <ul class="actions">
                    <li><a href="#two" class="button scrolly">Learn more</a></li>
                </ul>
            </div>
        </section>

        <!-- Two -->
        <section id="two" class="wrapper style2 spotlights">
            <section>
                <div class="content">
                    <div class="inner">
                        <h2>Magdalena Gastaldi</h2>
                        <p>Literary, Technical and Scientific English-Spanish Translator (degree dated December 2003, granted by Instituto Superior No 28 “Olga Cossettini”, Rosario, Santa Fe, Argentina, <a href="http://www.iesoc.com.ar" target="_blank">www.iesoc.com.ar</a>)</p>
                        <p>Licensed by Colegio de Traductores; Province of Santa Fe (<a href="http://www.traductoresrosario.org.ar" target="_blank">www.traductoresrosario.org.ar</a>)</p>
                        <ul class="actions">
                            <li><a href="https://ar.linkedin.com/in/magdalena-gastaldi-486a9421" class="button" target="_blank">LinkedIn</a></li>
                            <li><a href="http://www.proz.com/profile/82652" class="button" target="_blank">Proz.com</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <div class="content">
                    <div class="inner">
                        <h2>Mónica Belén Colacilli</h2>
                        <p>Literary, Technical and Scientific English-Spanish Translator (degree dated March 2003, granted by Instituto Superior Pago de los Arroyos, <a href="http://www.pagodelosarroyos.edu.ar" target="_blank">www.pagodelosarroyos.edu.ar</a>)</p>
                        <p>Post Graduate Studies in English-Spanish Translation (National University of Rosario, <a href="http://www.fhumyar.unr.edu.ar" target="_blank">www.fhumyar.unr.edu.ar</a>)</p>
                        <p>Licensed by Colegio de Traductores; Province of Santa Fe (<a href="http://www.traductoresrosario.org.ar" target="_blank">www.traductoresrosario.org.ar</a>)</p>
                        <ul class="actions">
                            <li><a href="https://ar.linkedin.com/in/mónica-belén-colacilli-95ab8222" class="button" target="_blank">LinkedIn</a></li>
                            <li><a href="http://www.proz.com/profile/54283" class="button" target="_blank">Proz.com</a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100010611916035" class="button" target="_blank">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>

        <!-- Three -->
        <section id="three" class="wrapper style1 fade-up">
            <div class="inner">
                <h2>Get in touch</h2>
                <div class="split style1">
                    <section>
                        <form  action="index.php" method="POST" enctype="multipart/form-data" id="contact-form">
                            <div class="field half first">
                                <label for="name">Name</label>
                                <input name="name" id="name" type="text" value="" size="30" required/>
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input name="email" id="email" type="email" value="" size="30" required/>
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="5" cols="30" required></textarea>
                            </div>
                            <input type="submit" name="submit" value="Send Message"/>
                        </form>
                    </section>
                    <section>
                        <ul class="contact">
                            <li class="email">
                                <h3>E-mail</h3>
                                <a href="mailto:monica@moma-translations.com">monica@moma-translations.com</a>
                                <a href="mailto:magdalena@moma-translations.com">magdalena@moma-translations.com</a>
                            </li>
                            <li class="social">
                                <h3>Social</h3>
                                <ul class="icons">
                                    <!--<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>-->
                                    <li><a href="#" class="fa-facebook"><span class="label">&frasl; Moma Translations</span></a></li>
                                    <!--<li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
                                    <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                                    <li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>-->
                                </ul>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <a href="#one" class="scrolly"><img src="images/moma-dark.jpg" alt="Moma Translations"></a>
        <div></div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>
</body>

</html>