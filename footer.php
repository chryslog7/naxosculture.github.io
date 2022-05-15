<div id="footer" style="clear:both">
	<div class="wrap-headers">
	<ul>
		<h3>Χάρτης Ιστοτόπου</h3>
		<li><a href="index.php">Αρχική</a></li>
		<li><a href="index.php?cat=culture">Εκδηλώσεις</a></li>
		<li><a href="index.php?cat=society">Κοινωνία</a></li>
		<li><a href="index.php?cat=religion">Θρησκεία</a></li>
		<li><a href="index.php?cat=sports">Αθλητισμός</a></li>
		<li><a href="index.php?cat=ecology">Περιβάλλον</a></li>
		<li><a href="index.php?cat=artists">Καλλιτέχνες</a></li>
		<li><a href="index.php?cat=business">Επιχειρηματικότητα</a></li>
		<li><a href="about.php">Σχετικά με</a></li>
		<li><a href="contact.php">Επικοινωνία</a></li>
	</ul>
	<ul>
	<h3>Πολιτικές Ιστοσελίδας</h3>
	<li><a href="policy.php">Όροι Χρήσης</a></li>
	<li><a href="policy.php">Πολιτική απορρήτου</a></li>
	</ul>
	<ul>
	<h3>Δημοφιλέστερα άρθρα</h3>
	<?php
     	$sql = "SELECT * FROM articles ORDER BY views DESC LIMIT 4";
	 	$res = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($res)){
	 		$posid = mysqli_real_escape_string($conn, $row['id']);
			$postitle = mysqli_real_escape_string($conn, $row['postitle']);
			$postitle = explode(" ", $postitle);
			echo '<li><a href="index.php?id='.htmlspecialchars($posid).'">'.htmlspecialchars($postitle[0].' '.$postitle[1].' '.$postitle[2].' '.$postitle[3].' '.$postitle[4]).'..</a></li>';
		}
	?>
	</ul>
	<ul>
	<h3>Κοινωνικές Σελίδες</h3>
	<li><a href="http://www.facebook.com/naxospolitismos">Facebook</a></li>
	<li><a href="http://twitter.com/naxospolitismos">Twitter</a></li>
	<li><a href="http://google.com/+NaxospolitismosGrmain" rel="Publisher">Google+</a></li>
	<li><a href="#">RSS</a></li>
	</ul>
	</div>
</div>
<div class="copyright"><strong><a href="https://www.naxosculture.com">Νάξος Πολιτισμός</a> &copy; <?php echo htmlspecialchars(date('Y'));?></strong> <br/>Σχεδίαση και συντήρηση ιστοσελίδας από <a href="https://www.chryslogaras.me">chryslogaras</a></div>
