<?php
date_default_timezone_set("Europe/Athens");
require "conn.php";
$a = mysqli_real_escape_string($conn,$_SERVER['REQUEST_URI']);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$subject = mysqli_real_escape_string($conn,$_POST["subject"]);
$message = mysqli_real_escape_string($conn,$_POST["msg"]);
if (isset($_POST["submit"])){
if (empty($email) || empty($subject) || empty($message) )
{
	echo '<script type="text/javascript">';
	echo 'alert("Συμπληρώστε όλα τα πεδία.")';
	echo '</script>';
}
else
	{
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			mail("logarasyan@gmail.com", $subject, $message,"From: $email\n");
			echo '<script type="text/javascript">';
			echo 'alert("Ευχαριστούμε πολύ.")';
			echo '</script>';
		} else {
			echo '<script type="text/javascript">';
			echo 'alert("Εισάγετε έγκυρη ηλ.διεύθυνση.")';
			echo '</script>';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Επικοινωνία | Νάξος Πολιτισμός</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="naxos politismos,νάξος πολιτισμός,κοινωνία,θρησκεία,περιβάλλον,αθλητισμός">
<meta name="description" content="Επικοινωνήστε με το διαχειριστή της ιστοσελίδας μας για θέματα σχετικά με τον πολιτισμό της Νάξου.">
<meta name="robots" content="NOODP" />
<meta name="author" content="chryslog" />
<meta name="language" content="EL" />
<meta name="copyright" content="&copy; 2014 NaxosPolitismos" />
<link rel="shortcut icon" href="/images/favicon.ico" type="image/icon">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/slippry.min.js"></script>
<link rel="stylesheet" href="css/slippry.css">
<script src="js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43848735-1', 'auto');
  ga('send', 'pageview');

</script>
<?php
	$cat = mysqli_real_escape_string($conn,$_GET["cat"]);
	if (empty($cat) && ($a=="/" || $a=="/index.php")){
	echo '<title>Νάξος Πολιτισμός | Ειδήσεις | Εκδηλώσεις | Άρθρα</title>';
	}
	else if ($cat == "culture"){echo '<title>Εκδηλώσεις | Νάξος Πολιτισμός</title>';}
	else if ($cat == "society"){echo '<title>Κοινωνία | Νάξος Πολιτισμός</title>';}
	else if ($cat == "religion"){echo '<title>Θρησκεία | Νάξος Πολιτισμός</title>';}
	else if ($cat == "sports"){echo '<title>Αθλητισμός | Νάξος Πολιτισμός</title>';}
	else if ($cat == "ecology"){echo '<title>Περιβάλλον | Νάξος Πολιτισμός</title>';}
	else if ($cat == "artists"){echo '<title>Καλλιτέχνες | Νάξος Πολιτισμός</title>';}
	else if ($cat == "business"){echo '<title>Επιχειρηματικότητα | Νάξος Πολιτισμός</title>';}
	else if (strpos($a,"about")){echo '<title>Σχετικά με | Νάξος Πολιτισμός</title>';}
	else if (strpos($a,"contact")){echo '<title>Επικοινωνία | Νάξος Πολιτισμός</title>';}
?>
</head>
<body>
<div class="wrap">
<div id="header">
	<div id="members"><a href="login.php">Σύνδεση</a></div><br/><br/>
	<div class="wrapper cf">
	<div id="logo">
        <a href="http://www.naxospolitismos.gr" style="color:#5C001C;"><span>νάξος&nbsp;πολιτισμός</span></a>
    </div>
	<nav id="menu">
		<ul>
		<?php
		if (empty($cat) && ($a=="/" || strpos($a,"index.php"))){
		echo '<li class="active"><a href="index.php">Αρχική</a></li>';
		}else{
		echo '<li><a href="index.php">Αρχική</a></li>';
		}
		if ($cat == "culture"){echo '<li class="active"><a href="index.php?cat=culture&page=1">Εκδηλώσεις</a></li>';}else{echo '<li><a href="index.php?cat=culture&page=1">Εκδηλώσεις</a></li>';}
		if ($cat == "society"){echo '<li class="active"><a href="index.php?cat=society&page=1">Κοινωνία</a></li>';}else{echo '<li><a href="index.php?cat=society&page=1">Κοινωνία</a></li>';}
		if ($cat == "religion"){echo '<li class="active"><a href="index.php?cat=religion&page=1">Θρησκεία</a></li>';}else{echo '<li><a href="index.php?cat=religion&page=1">Θρησκεία</a></li>';}
		if ($cat == "sports"){echo '<li class="active"><a href="index.php?cat=sports&page=1">Αθλητισμός</a></li>';}else{echo '<li><a href="index.php?cat=sports&page=1">Αθλητισμός</a></li>';}
		if ($cat == "ecology"){echo '<li class="active"><a href="index.php?cat=ecology&page=1">Περιβάλλον</a></li>';}else{echo '<li><a href="index.php?cat=ecology&page=1">Περιβάλλον</a></li>';}
		if ($cat == "artists"){echo '<li class="active"><a href="index.php?cat=artists&page=1">Καλλιτέχνες</a></li>';}else{echo '<li><a href="index.php?cat=artists&page=1">Καλλιτέχνες</a></li>';}
		if ($cat == "business"){echo '<li class="active"><a href="index.php?cat=business&page=1">Επιχειρηματικότητα</a></li>';}else{echo '<li><a href="index.php?cat=business&page=1">Επιχειρηματικότητα</a></li>';}
		if (strpos($a,"about")){echo '<li class="active"><a href="about.php">Σχετικά με</a></li>';
		}else{echo '<li><a href="about.php">Σχετικά με</a></li>';}
		if (strpos($a,"contact")){echo '<li class="active"><a href="contact.php">Επικοινωνία</a></li>';}
		else{echo '<li><a href="contact.php">Επικοινωνία</a></li>';}
		?>
		</ul>
	</nav>
	<div class="nav-toggler">
		<div class="cont"></div>
		<div class="cont"></div>
		<div class="cont"></div>
	</div>
	</div><!-- wrapper -->
	<div id="slider">
		<ul id="slippry-demo">
			<li>
				<a href="#slide1"><img src="images/slideshow/image-1.jpg"></a>
			</li>
			<li>
				<a href="#slide2"><img src="images/slideshow/image-2.jpg"></a>
			</li>
			<li>
				<a href="#slide3"><img src="images/slideshow/image-3.jpg"></a>
			</li>
		</ul>
	</div>
</div>
<div class="main">
	<iframe style="display:none" name="hidden-form"></iframe>
	<form id="form_790331" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" target="hidden-form" >
	<h2>Επικοινωνήστε μαζί μας</h2>
	<hr/>
	<p>Συμπληρώστε τα στοιχεία σας παρακάτω.</p>
	<label>Ηλ. διεύθυνση</label>
	<input name="email" type="text" maxlength="255" />
	<label>Θέμα</label>
	<input name="subject"type="text" maxlength="255" />
	<label>Μήνυμα</label>
	<textarea name="msg"></textarea>
	<button id="saveForm" type="submit" name="submit">Υποβολή</button>
	</form>
</div><!-- id="main" -->
<?php include 'footer.php'; ?>
</div>
<a href="" class="scrollup">Scroll</a>
</body>
</html>
<?php
mysqli_close($conn);
?>
