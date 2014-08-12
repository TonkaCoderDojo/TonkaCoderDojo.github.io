<?php session_start(); ?>
<html>
    <head>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/head.php"); ?>
	<title>Tab Title</title>
    </head>
    <body>
	<header>
	    <h1>Main Title</h1>
	    <h2>Subtitle</h2>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/menu.php"); ?>
	</header>
	<article>
	    <section>
		<h1>Section Title</h1>
		<p>Section content</p>
		<p>get rid of the section tag if it is not a site that has sections</p>
		<p>get rid of the setupeditor php include if it is not a site that should be edited with markup</p>
		<p>use sections if it makes sense. please, it helps for readability</p>
	    </section>
	</article>
	<footer>
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/footer.php"); ?>
	</footer>
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/dependencies/includes/setupeditor.php") ?>
    </body>
</html>