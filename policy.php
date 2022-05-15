<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Νάξος Πολιτισμός | Πολιτική σελίδας</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/slippry.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="css/slippry.css">
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
	<style>
	hr{
		margin: 34px auto -8px;
		width:40%;
	}
	.main{
		width:90%;
	}
	.main b{
		font-size: 19px;
	}
	.main i{
		font-size: 18px;
	}
	.main p{
		font-size: 17px;
		margin: 6px auto 18px;
	}
	.main a{
		font-weight:bold;
		color:#6B0023;
		text-decoration:none;
		max-width:288px;
	}
	.main a:hover{
		text-decoration:underline;
	}
	.sy-box{
		margin: 0 auto 20px;
		box-sizing: border-box;
		border: 8px solid #fff;
	}			
	.sy-pager{
		position: absolute;
		margin: 22px auto;
		left: 0;
		right: 0;
		box-sizing: border-box;
	}	
	</style>
</div>
<hr />
<div class="main">
<p>Αυτή η Πολιτική Απορρήτου διέπει τον τρόπο με τον οποίο το <a href="index.php">Νάξος Πολιτισμός</a> συλλέγει, χρησιμοποιεί, συντηρεί και γνωστοποιεί πληροφορίες που συλλέγονται από τους χρήστες της ιστοσελίδας (<a href="http://www.naxospolitismos.gr"> http:/ / www.naxospolitismos.gr </a>). Αυτή η πολιτική προστασίας της ιδιωτικής ζωής ισχύει και για την ιστοσελίδα και όλα τα προϊόντα και τις υπηρεσίες που προσφέρονται από το <a href="http://www.naxospolitismos.gr">Νάξος Πολιτισμός</a>.</p>  
<b>Προσωπικά στοιχεία προσώπων </b><br>
<p>Μπορούμε να συλλέξουμε τις προσωπικές πληροφορίες αναγνώρισης από τους χρήστες σε μια ποικιλία τρόπων, συμπεριλαμβανομένων, αλλά δεν περιορίζονται σε αυτά, όταν οι χρήστες επισκέπτονται το site μας, εγγράφονται στο newsletter, και σε σχέση με άλλες δραστηριότητες, υπηρεσίες, χαρακτηριστικά ή πόρους που διαθέτουμε στην ιστοσελίδα μας . Οι χρήστες μπορεί να ζητηθεί να δώσουν, ανάλογα με την περίπτωση, το όνομα, τη διεύθυνση ηλεκτρονικού ταχυδρομείου. Οι χρήστες μπορούν, ωστόσο, να επισκεφθούν την ιστοσελίδα μας ανώνυμα. Εμείς θα συλλέγουμε προσωπικές πληροφορίες αναγνώρισης από τους χρήστες μόνον εφόσον υποβάλουν οικειοθελώς τις πληροφορίες αυτές σε μας. Οι χρήστες μπορούν πάντοτε να αρνηθούν να παρέχουν πληροφορίες για τα προσωπικά τους στοιχεία, εκτός αν αυτό μπορεί να τους αποτρέψει από τη συμμετοχή σε ορισμένες δραστηριότητες που σχετίζονται με την ιστοσελίδα.</p> 
<b>Μη προσωπικά στοιχεία αναγνώρισης </b><br>
<p>Ενδέχεται να συλλέξουμε μη προσωπικά στοιχεία αναγνώρισης για τους χρήστες κάθε φορά που αλληλεπιδρούν με την ιστοσελίδα μας. Τα μη προσωπικά στοιχεία αναγνώρισης μπορεί να περιλαμβάνουν το όνομα του προγράμματος περιήγησης, το είδος του υπολογιστή και τεχνικές πληροφορίες σχετικά με τους χρήστες μέσω της σύνδεσης στο site μας, όπως το λειτουργικό σύστημα και τους φορείς παροχής υπηρεσιών Διαδικτύου που χρησιμοποιούνται και άλλες παρόμοιες πληροφορίες.</p> 
<b>Cookies του προγράμματος περιήγησης στο Διαδίκτυο</b><br>  
<p>Η ιστοσελίδα μας μπορεί να χρησιμοποιήσει "cookies" για να ενισχύσει την εμπειρία του χρήστη. το πρόγραμμα περιήγησης του χρήστη στο Διαδίκτυο τοποθετεί cookies στο σκληρό του δίσκο για σκοπούς τήρησης και μερικές φορές για παρακολούθηση πληροφοριών σχετικά με αυτές. Ο χρήστης μπορεί να επιλέξει να ρυθμίσει τον web browser τους να αρνηθεί τα cookies ή να τον ειδοποιεί όταν αποστέλλονται cookies. Αν συμβεί αυτό, λάβετε υπόψη ότι ορισμένα μέρη της ιστοσελίδας ενδέχεται να μην λειτουργούν σωστά.</p>
<b>Πώς χρησιμοποιούμε τις πληροφορίες που συλλέγονται</b><br> 
<p>Η ιστοσελίδα Νάξος Πολιτισμός μπορεί να συλλέξει και να χρησιμοποιήσει προσωπικές πληροφορίες των χρηστών για τους ακόλουθους σκοπούς:</p> 
<ul> 
<li><i>Για να προσαρμόσουμε την εμπειρία του χρήστη </i> 
<p>Μπορούμε να χρησιμοποιήσουμε τις πληροφορίες στο σύνολό τους για να κατανοήσουμε πώς οι χρήστες μας ως ομάδα χρησιμοποιούν τις υπηρεσίες και τους πόρους που παρέχονται στην ιστοσελίδα μας.<p></li> 
<li><i>Για τη βελτίωση της ιστοσελίδας μας, </i> 
<p>Μπορούμε να χρησιμοποιήσουμε τα σχόλιά σας για να βελτιώσουμε τα προϊόντα και τις υπηρεσίες μας.</p></li> 
<li><i>Για να στείλετε περιοδικά emails </i> 
<p>Μπορεί να χρησιμοποιηθεί η διεύθυνση ηλεκτρονικού ταχυδρομείου για την αποστολή πληροφοριών χρήσης και ενημερώσεις σχετικά με την ιστοσελίδα. Μπορεί επίσης να χρησιμοποιηθεί για απάντηση στις ερωτήσεις σας, ερωτήσεις ή / και άλλα αιτήματα. Εάν ο χρήστης αποφασίσει να ενταχθεί στη λίστα μας, θα λάβει μηνύματα ηλεκτρονικού ταχυδρομείου που μπορεί να περιλαμβάνουν εταιρικά νέα, ενημερώσεις, που σχετίζονται με το προϊόν ή την υπηρεσία πληροφοριών, κλπ. Αν σε οποιαδήποτε χρονική στιγμή ο χρήστης θα ήθελε να διαγραφεί από τη λήψη μηνυμάτων ηλεκτρονικού ταχυδρομείου στο μέλλον, μπορεί να το πραγματοποιήσει, επικοινωνώντας μέσω της ιστοσελίδας μας.</p></li> 
</ul> 
<b>Πώς προστατεύουμε τις πληροφορίες σας</b><br>  
<p>Υιοθετούμε κατάλληλη συλλογή δεδομένων για την αποθήκευση και την επεξεργασία και τα μέτρα ασφαλείας για την προστασία από μη εξουσιοδοτημένη πρόσβαση, αλλοίωση, αποκάλυψη ή καταστροφή των προσωπικών πληροφοριών, το όνομα χρήστη, τον κωδικό πρόσβασης, στοιχεία της συναλλαγής σας και τα δεδομένα που είναι αποθηκευμένα στην ιστοσελίδα μας.</p> 
<b>Κοινή χρήση των προσωπικών σας πληροφοριών</b><br> 
<p>Δεν πωλούμε ή ανταλλάσσουμε  προσωπικές πληροφορίες ταυτοποίησης χρήστη σε άλλους. Μπορεί να μοιραστούμε γενικές πληροφορίες που δεν συνδέονται με οποιαδήποτε προσωπικά στοιχεία αναγνώρισης σχετικά με τους επισκέπτες και τους χρήστες με τους επιχειρηματικούς εταίρους μας, αξιόπιστους συνεργάτες και τους διαφημιστές για τους σκοπούς που περιγράφονται παραπάνω.</p>
<b>Οι ιστοσελίδες τρίτων</b><br>  
<p>Οι χρήστες μπορούν να βρουν διαφημίσεις ή άλλου είδους περιεχόμενο στο site μας, που συνδέονται με τις τοποθεσίες και τις υπηρεσίες σχετικά με τους συνεργάτες, προμηθευτές, διαφημιστές, τους χορηγούς, τους δικαιοπαρόχους μας και άλλα τρίτα μέρη. Εμείς δεν ελέγχουμε το περιεχόμενο ή τους συνδέσμους που εμφανίζονται σε αυτές τις περιοχές και δεν είμαστε υπεύθυνοι για τις πρακτικές που χρησιμοποιούνται από ιστοσελίδες που συνδέονται με ή από τον Ιστότοπό μας. Επιπλέον, αυτά τα sites ή υπηρεσίες, συμπεριλαμβανομένων του περιεχομένου και των συνδέσεών τους, μπορεί να αλλάζουν συνεχώς. Αυτές οι περιοχές και οι υπηρεσίες μπορούν να έχουν τις δικές τους πολιτικές προστασίας της ιδιωτικής ζωής και των πολιτικών εξυπηρέτησης πελατών. Περιήγηση και αλληλεπίδραση σε οποιαδήποτε άλλη ιστοσελίδα, συμπεριλαμβανομένων των δικτυακών τόπων που έχουν σύνδεσμο στο site μας, υπόκειται στους δικούς του όρους και τις πολιτικές της εν λόγω ιστοσελίδας.</p>  
<b> Διαφήμιση </b> <br> 
<p>Διαφημίσεις που εμφανίζονται στην ιστοσελίδα μας μπορεί να παραδοθεί σε χρήστες από διαφήμιστικούς εταίρους, οι οποίοι μπορεί να χρησιμοποιούν cookies. Αυτά τα cookies επιτρέπουν στο διακομιστή διαφημίσεων να αναγνωρίζει τον υπολογιστή σας κάθε φορά που σας στέλνουν μια διαφήμιση για την κατάρτιση μη προσωπικών στοιχείων αναγνώρισης σχετικά με εσάς ή άλλους που χρησιμοποιούν τον υπολογιστή σας. Οι πληροφορίες αυτές επιτρέπουν σε διαφημιστικά δίκτυα, μεταξύ άλλων, να παραδώσουν στοχευμένες διαφημίσεις που θεωρούν ότι θα είναι πιο ενδιαφέρουσες για εσάς. Αυτή η πολιτική προστασίας της ιδιωτικής ζωής δεν καλύπτει τη χρήση των cookies από οποιουσδήποτε άλλους διαφημιζόμενους.</p>  
<b> Google Adsense </b> <br>  
<p>Μερικές από τις διαφημίσεις μπορεί να εξυπηρετούνται από τη Google. Η Google για τη χρήση του DART cookie επιτρέπει την προβολή διαφημίσεων στους χρήστες με βάση την επίσκεψή τους στην περιοχή μας και σε άλλους ιστοτόπους στο Διαδίκτυο.Το DART χρησιμοποιεί "μη προσωπικά αναγνωρίσιμες πληροφορίες" και δεν παρακολουθεί προσωπικές πληροφορίες για εσάς, όπως το όνομά σας, τη διεύθυνση ηλεκτρονικού ταχυδρομείου, φυσική διεύθυνση, κλπ. Μπορείτε να αποχωρήσετε από τη χρήση του cookie DART με την επίσκεψη στο Google AdSense και το περιεχόμενο της ιδιωτικής ζωής του δικτύου πολιτικής σε <a href="http://www.google.com/privacy_ads.html"> http://www.google.com/privacy_ads.html </a></p>  
<b> Αλλαγές στην παρούσα πολιτική απορρήτου </b> <br> 
<p>Το Νάξος Πολιτισμός έχει τη διακριτική ευχέρεια να αναπροσαρμόσει αυτήν την πολιτική προστασίας προσωπικών δεδομένων ανά πάσα στιγμή. Όταν το κάνουμε, θα αναθεωρήθει η ενημερωμένη ημερομηνία στο κάτω μέρος αυτής της σελίδας. Ενθαρρύνουμε τους χρήστες να ελέγχετε συχνά αυτή τη σελίδα για τυχόν αλλαγές για να είστε ενημερωμένοι σχετικά με το πώς βοηθάμε στην προστασία των προσωπικών πληροφοριών που συλλέγουμε. Αποδέχεστε και συμφωνείτε ότι είναι δική σας ευθύνη να προβάλλετε αυτήν την πολιτική απορρήτου περιοδικά και να ενημερώνεστε για τις τροποποιήσεις.</p> 
<b>Η εκ μέρους σας αποδοχή των όρων αυτών </b> <br> 
<p>Με τη χρήση αυτής της ιστοσελίδας, δηλώνετε ότι αποδέχεστε την παρούσα πολιτική και τους όρους <a href="policy.php"> της υπηρεσίας</a>. Αν δεν συμφωνείτε με αυτή την πολιτική, παρακαλούμε μην χρησιμοποιήσετε την ιστοσελίδα μας. Η συνεχιζόμενη χρήση της ιστοσελίδας που ακολουθείται από τις αλλαγές στην πολιτική αυτή θα πρέπει να θεωρείται ως αποδοχή σας αυτών των αλλαγών.</p>
<b> Επικοινωνήστε μαζί μας </b> <br>  
<p>Εάν έχετε οποιεσδήποτε απορίες σχετικά με την παρούσα Πολιτική Απορρήτου, τις πρακτικές αυτού του site, ή τις συναλλαγές σας με αυτή την ιστοσελίδα, παρακαλούμε επικοινωνήστε μαζί μας μέσω της φόρμας επικοινωνίας στη σελίδα <a href="contact.php">Επικοινωνία</a>.</p> 
<p>
Το έγγραφο αυτό ενημερώθηκε τελευταία φορά στις 15 Αυγούστου 2016 <br> 
<a href="javascript:history.back()"> Επιστροφή </a>
</p>
</div><!-- id="main" -->
<?php include 'footer.php'; ?>	
<a class="scrollup">Scroll</a>
</body>
</html>