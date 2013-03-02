<!DOCTYPE Html>

<?php
$file = 'http://www.jobs.ge/rss/jobs/';
$feed = simplexml_load_file($file);						
?>

<html>
	
	<head>
		<meta charset="UTF-8">
		<title><?php echo $feed -> channel -> description ?></title>
		<link rel="stylesheet" href="style.css" type="text/css" >
	</head>

	<body>
		<header></header>
		
	<?php for ($i=0; $i<8; $i++) { ?>
	
		<section>
				<article>
					<header>
						<h2>
							<?php echo $feed -> channel -> item[$i] -> title; ?> 
							<time>
								<?php echo $feed -> channel -> item[$i] -> pubDate; ?>
							</time> 
						</h2>	
					</header>
					
					<body>
						<?php echo $feed -> channel -> item[$i] -> description; ?>
						<p><a href="<?php echo $feed -> channel -> item[$i] -> link?>">სრულად…</a></p>
					</body>
						
				<footer> 
						
					</footer>
				
				 </article>
			
		</section>
		
	<?php } ?>
	
		<footer> 
			<?php echo $feed -> channel -> copyright  ?> 
		</footer>
				
	</body>

</html>


	
