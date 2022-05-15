<?php
date_default_timezone_set("Europe/Athens");
$a = htmlspecialchars($_SERVER['REQUEST_URI']);
if($a=="/" || $a=="/index.php") header('Location: index.php?page=1');

global $conn;
global $images;
global $category;

require "conn.php";

//user variables
$uid = htmlspecialchars($_GET["id"]);
$category = $_GET['cat'];
$page = intval($_GET['page']);
$pages = 0;
$rows_len = 0;
$pagination = 5;
$begin = 0;

//calculate articles to paginate
if (filter_var($page, FILTER_VALIDATE_INT)){
	$begin = ($page - 1) * $pagination;
}else{
	$begin = 0;
}

function paginate($pages)
{
	echo '<div class="pag-wrap">';
		if(!isset($_POST["srchBtn"]))
			if(isset($_GET["cat"]))
			{
					if($pages>1)
					{
						echo 'Σελίδες :';
						for ($i = 1;$i <= $pages;$i++)
							echo '<a href="index.php?cat='.htmlspecialchars($_GET["cat"]).'&page='.$i.'">'.$i.' </a>';
					}
			}
			else if(isset($_GET["page"]))
			{
					if($pages>1)
					{
						echo 'Σελίδες :';
						for ($i = 1;$i <= $pages;$i++)
							echo '<a href="index.php?page='.$i.'">'.$i.' </a>';
					}
			}
	echo '</div>';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="naxos politismos,νάξος πολιτισμός,κοινωνία,θρησκεία,περιβάλλον,αθλητισμός">
<meta name="description" content="Αναζητήστε και διαβάστε ποικιλία άρθρων σχετικά με τα πολιτιστικά γεγονότα που λαμβάνουν χώρα στο νησί της Νάξου.">
<meta name="robots" content="NOODP">
<meta name="author" content="chryslog">
<meta name="language" content="EL">
<meta name="copyright" content="&copy; 2019 NaxosCulture">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/icon">
<?php
	if ($category=="culture") echo '<title>Εκδηλώσεις | Νάξος Πολιτισμός</title>';
	else if ($category=="society") echo '<title>Κοινωνία | Νάξος Πολιτισμός</title>';
	else if ($category=="religion") echo '<title>Θρησκεία | Νάξος Πολιτισμός</title>';
	else if ($category=="sports") echo '<title>Αθλητισμός | Νάξος Πολιτισμός</title>';
	else if ($category=="ecology") echo '<title>Περιβάλλον | Νάξος Πολιτισμός</title>';
	else if ($category=="artists") echo '<title>Καλλιτέχνες | Νάξος Πολιτισμός</title>';
	else if ($category=="business") echo '<title>Επιχειρηματικότητα | Νάξος Πολιτισμός</title>';
	else if (strpos($a,"about")) echo '<title>Σχετικά με | Νάξος Πολιτισμός</title>';
	else if (strpos($a,"contact")) echo '<title>Επικοινωνία | Νάξος Πολιτισμός</title>';
	else	
		echo '<title>Νάξος Πολιτισμός | Ειδήσεις | Εκδηλώσεις | Άρθρα</title>';
?>
</head>
<body>
<div class="wrap">
<div id="header">
	<div id="members"><a href="login.php">Σύνδεση</a></div><br/><br/>
	<div class="wrapper cf">
	<div id="logo">
        <a href="https://www.naxosculture.com" style="color:#5C001C;"><span>νάξος&nbsp;πολιτισμός</span></a>
    </div>
	<nav id="menu">
		<ul>
		<?php
		if (empty($category) && ($a=="/" || strpos($a,"index.php"))){
		echo '<li class="active"><a href="index.php">Αρχική</a></li>';
		}else{
		echo '<li><a href="index.php">Αρχική</a></li>';
		}
		if ($category=="culture"){echo '<li class="active"><a href="index.php?cat=culture&page=1">Εκδηλώσεις</a></li>';}else{echo '<li><a href="index.php?cat=culture&page=1">Εκδηλώσεις</a></li>';}
		if ($category=="society"){echo '<li class="active"><a href="index.php?cat=society&page=1">Κοινωνία</a></li>';}else{echo '<li><a href="index.php?cat=society&page=1">Κοινωνία</a></li>';}
		if ($category=="religion"){echo '<li class="active"><a href="index.php?cat=religion&page=1">Θρησκεία</a></li>';}else{echo '<li><a href="index.php?cat=religion&page=1">Θρησκεία</a></li>';}
		if ($category=="sports"){echo '<li class="active"><a href="index.php?cat=sports&page=1">Αθλητισμός</a></li>';}else{echo '<li><a href="index.php?cat=sports&page=1">Αθλητισμός</a></li>';}
		if ($category=="ecology"){echo '<li class="active"><a href="index.php?cat=ecology&page=1">Περιβάλλον</a></li>';}else{echo '<li><a href="index.php?cat=ecology&page=1">Περιβάλλον</a></li>';}
		if ($category=="artists"){echo '<li class="active"><a href="index.php?cat=artists&page=1">Καλλιτέχνες</a></li>';}else{echo '<li><a href="index.php?cat=artists&page=1">Καλλιτέχνες</a></li>';}
		if ($category=="business"){echo '<li class="active"><a href="index.php?cat=business&page=1">Επιχειρηματικότητα</a></li>';}else{echo '<li><a href="index.php?cat=business&page=1">Επιχειρηματικότητα</a></li>';}
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
	<div id="left_sb">
	<form method="post" style="position: relative;">
	<input class="input_box" name="srch" type="text" placeholder="Αναζήτηση" />
	<button name="srchBtn" style="cursor:pointer;float: right;position: absolute;right: 4px;bottom: 4px;">
		<img src="images/glass.png" alt="search"/>
	</button>
	</form>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12728.628628772673!2d25.380071099999995!3d37.101376349999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1498092c5c021ca3%3A0x400bd2ce2b9c690!2zzp3OrM6-zr_Pgg!5e0!3m2!1sel!2sgr!4v1402593731118" style="float:left;width:99%;border:2px solid #868686;" height="200"></iframe>
	</div>
	<div id="content">
	<?php

		$sql1 = "";
		$sql2 = "";
		$stmt1 = "";
		$stmt2 = "";


		//customize queries to show valid results
		if(isset($_POST["srchBtn"]))
		{
			$search = "%".$_POST["srch"]."%";
			$sql1 = "SELECT * FROM articles WHERE postitle LIKE ? OR postext LIKE ? ";
			$sql2 = $sql1;// . " LIMIT ?,?";
			$stmt1 = $conn->prepare($sql1);
			$stmt1->bind_param("ss",$search,$search);
			$stmt1->execute();
			$result1 = $stmt1->get_result();
			$rows_len = $result1->num_rows;
			$pages = ceil($rows_len / $pagination);
			//
			$stmt2 = $conn->prepare($sql2);
			$stmt2->bind_param("ss", $search,$search);
			$stmt2->execute();
			$result2 = $stmt2->get_result();
		}
		else if (strpos($a, "id"))
		{
			//article page - only one sql statement
			$sql2 = "SELECT * from articles WHERE id=?";
			$stmt2 = $conn->prepare($sql2);
			$stmt2->bind_param("i",$uid);
			$stmt2->execute();
			$result2 = $stmt2->get_result();
			$rows_len = $result2->num_rows;
		}
		else if(strpos($a,"cat"))
		{
			//main page- calculate total rows to paginate properly
			$sql1 = "SELECT *, (SELECT DISTINCT URL FROM images WHERE articles.id = articleID GROUP BY URL LIMIT 0,1) AS prevImg FROM articles WHERE cat=? ORDER BY date DESC ";
			$sql2 = $sql1 . " LIMIT ?,?";
			$stmt1 = $conn->prepare($sql1);
			$stmt1->bind_param("s", $category);
			$stmt1->execute();
			$result1 = $stmt1->get_result();
			$rows_len = $result1->num_rows;
			$pages = ceil($rows_len / $pagination);

			//category page - show articles by page
			$stmt2 = $conn->prepare($sql2);
			$stmt2->bind_param("sii", $category,$begin,$pagination);
			$stmt2->execute();
			$result2 = $stmt2->get_result();
		}
		else
		{
			//main page - calculate total rows to paginate properly
			$sql1 = "SELECT *, (SELECT DISTINCT URL FROM images WHERE articleID=articles.id GROUP BY URL LIMIT 0,1) AS prevImg FROM articles ORDER BY date DESC "; //correct
			$sql2 = $sql1 . " LIMIT ?,?;";
			$result1 = $conn->query($sql1);
			$rows_len = $result1->num_rows;
			$pages = ceil($rows_len / $pagination);

			//main page - show specific articles per page
			$stmt2 = $conn->prepare($sql2);
			$stmt2->bind_param("ii",$begin,$pagination);
			$stmt2->execute();
			$result2 = $stmt2->get_result();
		
		
			
		}			
		//begin process
		if ($rows_len > 0)
		{
			while($article = $result2->fetch_assoc())
			{
			?>
			<article>
			<?php
			$posid = $article['id'];
			$postitle = $article['postitle'];
			$postext  = $article['postext'];
			$postext = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $postext);
			$postext = preg_replace('#(\\\r|\\\r\\\n|\\\n)#', '<br/>',$postext);
			$postext = stripslashes($postext);
			$posimage1 = $article["prevImg"];
			$altimg1 = $article['alt'];
			$posdate = $article['date'];
			$posauthor = $article['author'];
			$shrtext = mb_substr($postext,0,239, "utf-8");
			$datec = date("d/m/Y", $posdate);
			$timec = date("H",$posdate);
			$minc = date("i",$posdate);
			$published = $article['published'];

			if($published)
			{
			?>
			<div class="image_wrap"><img src="/images/articles/<?php echo $_SESSION["image"] = $posimage1; ?>" width="120" height="90" onclick="window.location.href = '/images/articles/<?php echo $posimage1; ?>';" style="float:left;margin-top:0;" alt="<?php echo $altimg1; ?>" />
			</div>
			<div class="par-id">
			<h2><a href="index.php?id=<?php echo htmlspecialchars($posid); ?>"><?php echo htmlspecialchars($postitle); ?></a></h2>
			<div class="date">Δημοσιεύθηκε στις <?php echo htmlspecialchars($datec).', ώρα '.$timec.':'.$minc.' <br/>Συγγραφέας : '.$posauthor; ?></div>
			<p>
			<?php
			}
						
			if(strpos($a,"id"))
			{
				echo $postext;
			}
			else
			{
				echo $shrtext;
			?>
			<a href="?id=<?php echo htmlspecialchars($posid); ?>">...Περισσότερα</a></p>
			<?php
			}
	
			?>
			</div>
			</article>
			<?php								
				paginate($pages);
			}
		}
		else 
		{
			echo "<center>Δεν υπάρχουν άρθρα σε αυτή την κατηγορία.</center>";
		}
		//end process 
	?>
</div>
<div id="right_sb">
	<form method="post" id="emform">
	<input name="mailad" class="input_box" type="text" placeholder="Εγγραφή" /><a style="cursor:pointer;float:right;" onclick="document.getElementById(\'emform\').submit();"><img src="images/mail.png" class="mail" alt="newsletter"/></a>
	</form>
	<?php if (!empty($_POST["mailad"])) subscribe(); ?>
	<a href="//www.accuweather.com/en/gr/naxos/182878/weather-forecast/182878" class="aw-widget-legal"></a>
	<div id="weather" class="aw-widget-current" data-locationkey="182878" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1402589265553"></div>
	<script type="text/javascript" src="//oap.accuweather.com/launch.js"></script>
</div>
<?php
	//if (!empty($_POST["mailad"])) subscribe();
?>
</div><!-- id="main" -->
<?php include 'footer.php'; ?>
</div>
<a href="#" class="scrollup">Scroll</a>
</body>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/slippry.min.js"></script>
<link rel="stylesheet" href="css/slippry.css">
<style>
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
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
}
</style>
<script src="js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43848735-1', 'auto');
  ga('send', 'pageview');

</script>
</html>

<?php
	if (strpos($a, "id")){
		echo '<style>#right_sb,#left_sb,.pag-wrap{
			display:none;
		}
		#content{
			display:table;
			width:99%;
		}
		</style>';
	}
	$conn->close();
?>
