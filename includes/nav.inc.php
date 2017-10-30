
<nav id="nav">
<a href="index.php"><img class="logo" src="images/logo_white.png"></a>
<ul>
  <li><a data-scroll href="#portfolioLink">Portfolio</a></li>
  <li><a data-scroll href="#aboutLink">About</a></li>
  <li><a data-scroll href="#contactSection">Contact</a></li>
</ul>
<form method="post" action="index.php">
<select id="language" name="language" onchange="submit()">
<option value='Danish' <?php if ($_SESSION['language'] === 'Danish') echo 'selected="selected"'; ?>>DK</option>
<option value='English' <?php if ($_SESSION['language'] === 'English') echo 'selected="selected"'; ?> >EN</option>
</select>
</form>
</nav>