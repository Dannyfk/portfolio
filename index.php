<?php
// Start the session
session_start();
if(isset($_POST['language'])) { $_SESSION['language'] = $_POST['language']; } else {
    $_SESSION['language'] ="";
}

?>
<!-- Head include -->
<?php
	$title="Danny Fogh Kristensens Portfolio";
	$description="Kom og se mine tidligere projekter og læs lidt om mig";
	include("includes/head.inc.php");
?>

<!-- body start -->
<body>
    
    <!-- Import languagepack -->
<?php
    include("php/languagePack.php");
?>
<header>
    <h1>Dannys Portfolio</h1>
    <h2>Frontend developer and coder</h2>
    <a data-scroll href="#nav"><p id="exploreBtn"><?php echo $languageArray["introBtn"] ?></p></a>
</header>
<!-- nav include -->
<?php
    include("includes/nav.inc.php");
?>
<!-- include portfolio items -->
<div id="portfolioLink"></div>
<section class="contentWindow" id="portfolioSection">
    <h3>Portfolio</h3>
<?php include("php/portfolioItemCreator.php") ?>
</section>

<div id="aboutLink"></div>
<article class="contentWindow" id="aboutSection">
<h3><?php echo $languageArray["about_Intro"] ?></h3> 
<p><?php echo $languageArray["about_Content"] ?></p> 
<br>
<h3><?php echo $languageArray["fromMe_Intro"] ?></h3> 
<p><?php echo $languageArray["fromMe_Content"] ?></p> 
<br>
<h3><?php echo $languageArray["competences_Intro"] ?></h3>
<img id="competences" src="images/competences.png" alt="Competences">
<!--
<aside>
    <p>HTML</p>
    <progress value="80" max="100"></progress>
<aside>
-->
<br>
</article>

<article class="contentWindow" id="contactSection">
<h3><?php echo $languageArray["contact_Intro"] ?></h3> 

<!-- script to hide the email from bots -->
<script type="text/javascript" language="javascript">
// Email obfuscator script 2.1 by Tim Williams, University of Arizona
// Random encryption key feature coded by Andrew Moulden
// This code is freeware provided these four comment lines remain intact
// A wizard to generate this code is at http://www.jottings.com/obfuscator/
{ coded = "3VfUBP0@tiXMse6.IiM"
  key = "ahRMDiSC9G2KB8ZkxH6styNpegYWTU1wucfLd0EXJzn5qjmQobAOIV43P7Fvrl"
  shift=coded.length
  link=""
  for (i=0; i<coded.length; i++) {
    if (key.indexOf(coded.charAt(i))==-1) {
      ltr = coded.charAt(i)
      link += (ltr)
    }
    else {     
      ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
      link += (key.charAt(ltr))
    }
  }
document.write("E-Mail: <a href='mailto:"+link+"'>"+link+"</a>")
}
</script><noscript>Sorry, you need Javascript on to email me.</noscript>

<p>Github:<a href="https://github.com/Dannyfk">Github.com/Dannyfk</a></p>
<br>
</article>
<!-- Footer include -->    
<?php
    include("includes/footer.inc.php");
?>

<script>

</script> 

</body>
</html>
