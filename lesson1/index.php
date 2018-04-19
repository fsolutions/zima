<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
	$menu="<ul id=\"menu\">
			<li><a href=\"#\">home</a></li>
			<li><a href=\"#\">archive</a></li>
			<li><a href=\"#\">contact</a></li>
		</ul>";
	$detailtext="<h2><a href=\"#\">Nunc commodo euismod massa quis vestibulum</a></h2>
				<p class=\"info\">posted 3 hours ago in <a href=\"#\">general</a></p>";
	$txt="<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>";
	$txt2="<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p><p>&not;</p>";
	$txt3="<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>";
	$txt4="<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>";
	$read="<p>&not; <a href=\"#\">read more</a></p>";
	$date=date(Y);
	$title1="<h3><a href=\"#\">Ut enim risus rhoncus</a></h3>";
	$title2="<h3><a href=\"#\">Maecenas iaculis leo</a></h3>";
	$title3="<h3><a href=\"#\">Quisque consectetur odio</a></h3>";
	$title="<h1>minimalistica</h1>";
	$showname="minimalistica";
	?>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><?php echo $showname;?></title>
</head>
<body>
	<div id="content">
		<?php echo $title;?>
		<?php echo $menu;?>
		<div class="post">
			<div class="details">
				<?php echo $detailtext; ?>
			</div>
			<div class="body">
				<?php echo $txt;?>
			</div>
			<div class="x"></div>
		</div>
		<div class="col">
			<?php echo $title1,$txt2,$read;?>
			</div>
		<div class="col">
			<?php echo $title2,$txt3,$read;?>
		</div>
		<div class="col last"> 
			<?php echo $title3,$txt4,$read;?>
		</div>
		<div id="footer">
			<p>Copyright &copy; <?php echo $date ?> <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href=\"http://www.solucija.com/\" title=\"Free CSS Templates\">Solucija</a></p>
		</div>	
	</div>
</body>
</html>