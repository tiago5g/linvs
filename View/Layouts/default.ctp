<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'LINVS - Sistema de Gerenciamento Paroquial');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('select2');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->script('jquery-1.10.2.min');
		echo $this->Html->script('smart-menu');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			  <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header navbar-right">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#linvs-nav">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="<?php echo Router::url('/', true); ?>">LINVS</a>
			  </div>

			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse" id="linvs-nav">
			    <ul class="nav navbar-nav">
					<li><?php echo$this->Html->link(__("People"), array('action' => 'index', "controller"=>"people")); ?></li>
			    	<li><?php echo$this->Html->link(__("Tithe"), array('action' => 'index', "controller"=>"tithes")); ?></li>
			    	
			    </ul>
			  </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<div class="breadcrumb">
				<?php echo $this->Html->getCrumbs(' > ', __('Home')); ?>
			</div>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
