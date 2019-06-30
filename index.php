<!DOCTYPE html>

<html>

	<head>
		<?php 
			$title = "Новости обо всем";
			require_once "blocks/head.php";
		?>
		
	</head>

	<body>
		
		<?php require_once "blocks/header.php" ?>
		<div id="wrapper">
		
			<div id="leftCol">
			
				<div id="bigArticle">
					<h2>Здоровое питание</h2>
					<img src="/img/article1.jpg" alt="Статья 1" title="Статья 1" />
					<p>Здоровое питание — это питание, обеспечивающее рост, нормальное развитие и жизнедеятельность человека, способствующее укреплению его здоровья и профилактике заболеваний.</p>
					<a href="/" alt="Далее" title="Далее"><div id="next">Далее</div></a>
				</div>
				
				<div class="clear"></div></br>
				
				<div class="article">
					<h2>Психология</h2>
					<img src="/img/article2.jpg" alt="Статья 2" title="Статья 2" />
					<p>Психология — наука, изучающая закономерности возникновения, развития и функционирования психики и психической деятельности человека и групп людей</p>
					<a href="/" alt="Далее" title="Далее"><div id="next">Далее</div></a>
				</div>
				
				<div class="article">
					<h2>Спорт</h2>
					<img src="/img/article3.jpg" alt="Статья 3" title="Статья 3" />
					<p>Физическая культура — область социальной деятельности, направленная на сохранение и укрепление здоровья, развитие психофизических способностей человека в процессе осознанной двигательной активности</p>
					<a href="/" alt="Далее" title="Далее"><div id="next">Далее</div></a>
				</div>
				
			</div>
			
			<?php require_once "blocks/rightCol.php" ?>
			
		</div>
		
		<?php require_once "blocks/footer.php" ?>
		
	</body>

</html>