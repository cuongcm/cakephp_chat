<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->script('jquery-1.10.2.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
</head>
<body>

    <?php echo $this->Element('navigation'); ?>

    <div class="container jumbotron">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->
	<?php echo $this->element('sql_dump'); 
	?>
</body>
</html>
