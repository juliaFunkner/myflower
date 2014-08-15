<?if (isset($_POST["send"]))
{
 
// Sammeln der Formulardaten
$name = $_POST['name'];
$email = $_POST['email'];
$betreff = $_POST['subject'];
$nachricht = $_POST['message'];
 
// Mailheader UTF-8 fähig machen
$mail_header = 'From:' . $email . "n";
 
// Nachrichtenlayout erstellen
$message = "
Name:       $name
Email:      $email
Betreff:    $betreff
Nachricht:  $nachricht
";
 
// Verschicken der Mail
mail($email, 'Formular: '.$betreff, $message, $mail_header );
};

?>
<!DOCTYPE html >
<html lang="de">
<head>
  <meta charset="utf-8">
  <title>Mayflower</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
  <link href="https://www.google.com/fonts#UsePlace:use/Collection:Ubuntu" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">
	$( document ).ready(function() {
		if($(window).width()>480){
			$('.background').css({height:$(window).width()/2.504});
		}
	});
  </script>
</head>
<body>

<header>
 	<div class="background"></div>
  	<div class="headline">
	    <p class="first">GENAU</p>
	    <p class="second">KICK OFF</p>
	    <p>RICHTIG</p> 
	</div>
	
    <div class="nav">
      <p>MAYFLOWER</p>
      <p><b><a href="#contakt">SCHNELLKONTAKT</a></b> JETZT INFORMIEREN</p>
    </div>
</header>
<div id="wrapper">
	<main>
	  	<article>
		  	<div class="left">
		  		<h1>34</h1>
		  		<p><b>WORKSHOPS</b></p>
		  		<br/>
		  		<a href="">ÜBERBLICK></a>
		  	</div>
		  	<div class="right">
		  		<h2>KNOW-HOW</h2>
		  		<h3>WENN ES DARAUF ANKOMMT</h3>
		  		<br/>
		  		<p><b>AGILES COACHING ° WORKSHOPS ° SCHULUNGEN ° TRAININGS ° <br/>CODING DOJOS</b></p>
		  		<p>FÜR <b>BUSINESS & DEVELOPMENT</b></p>
		  		<br/>
		  		<p class="small">ERFAHRENE SPEAKER & TRAINER MACHEN IHR PROJEKTTEAM<br/>
				FIT FÜR KONKRETE HERAUSFORDERUNGEN</p>
				<br/>
				<p>DES WEITEREN</p>
				<p class="small">TAGES- UND HALBTAGSWORKSHOPS<br/>
				KURZPRÄSENTATIONEN UND GRUNDLAGEN FÜR DEN SCHNELLEINSTIEG</p>
	  		</div>
	  	  <div style="clear:both"></div>
	  	</article>
	  	<article>
		  	<div class="left">
		  		<h1>100</h1>
		  		<p><b>PROZENT<br/> PERFORMANCE</b></p>
		  		<br/>
		  		<a href="">ÜBERBLICK></a>
		  	</div>
		  	<div class="right">
		  		<h2>ANALYSE & OPTIMIERUNG</h2>
		  		<h3>BESTEHENDE LÖSUNGEN AUF TRAB BRINGEN</h3>
		  		<br/>
		  		<p><b>SOFTWARE ASSETS ° DATENBANKOPTIMIERUNGEN °<br/>
				ARCHITEKTURBERATUNG</b></p>
		  		<p>FÜR <b>SOFTWARE & SYSTEME</b></p>
		  		<br/>
		  		<p class="small">TECHNOLOGIE-EXPERTEN ANALYSIEREN IHR LAUFENDES SYSTEM UND DECKEN<br/>
		  		OPTIMIERUNGSPOTENZIAL AUF</p>
		  	</div>
	  		<div style="clear:both"></div>
	 	</article>
	</main>
</div> <!-- wrapper -->
<footer>
  	<a id="contakt"></a>
	<form method="post" action="index.php">
  		<input type="text" id="name" name="name" placeholder="VORNAME UND NAME" required />
  		<input type="email" id="email" name="email" placeholder="E-MAILADRESSE" required />
  		<input type="text" id="subject" name="subject" placeholder="BETREFF" required />
  		<textarea name="message" id="message" placeholder="NACHRICHT"></textarea>
  		<input type="submit" id="send" name="send" value="ABSENDEN" />
  	</form>
</footer>
</body>
</html>
