<?php
	$files = array();
	$dir    = '../oe';
	$files = scandir($dir);
	foreach($files as $key=>$value) {
		if($value == '.' || $value == '..' || $value == 'index.php' ) unset($files[$key]);
	}
?>
<html>
	<head>
	<!-- style -->
	<!-- oussama's update -->
		<style>
			
			body{
				background-image: url(OTF_Red_Brick_10.jpg);
				background-size: contain;    
				margin: 0;
			    padding: 0;
			}
			div {
			    margin: 20px auto;
			    width: 470px;
			    background-color: rgba(233, 233, 233, 0.8);
			    padding: 15px;
			    border-radius: 4px;
			}
			h3 {
			    font-size: 30px;
			    margin: 20px auto;
			}
			ul {
			    font-size: 20px;
			    font-weight: bold;
			    list-style: outside none none;
			}
			a {
			    color: black;
			    padding: 4px;
			    text-decoration: none;
			}
			a:hover {
			    color: #0db3b1;
			    padding: 5px;
			}
			li {
			    padding: 2px 0;
			}


		</style>
	</head>
	<body>
		<div>
			<h3>Listes Projets</h3>
			<ul>
				<?php foreach($files as $file){ ?>
					<li>
						<a href="/oe/<?php echo $file; ?>"><?php echo $file; ?></a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</body>
</html>