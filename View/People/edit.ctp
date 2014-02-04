 <?php
 //Configs
 echo $this->Html->script('jquery.maskedinput-1.3.1');
 echo $this->Html->script('jquery.cep-1.0.min');
 echo $this->Html->script('select2.min');
 echo $this->Html->script('people-configs');
	$this->Html->addCrumb(__("People"), __("/people"));
	$this->Html->addCrumb(__("Edit"), __("/people/edit"));                  
 ?>
<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('birth',array('minYear' => 1900,'dateFormat' => 'DMY','monthNames' => true,'separator' => '<span>/</span>'));
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('street');
		echo $this->Form->input('number');
		echo $this->Form->input('district');
		echo $this->Form->input('cep');
		echo $this->Form->input('city');
		echo $this->Form->input('uf');
		echo $this->Form->input('country');
		echo $this->Form->input('father_id', array("empty"=>__('(choose one)')));
		echo $this->Form->input('father2_id', array('options' => $fathers, "empty"=>__('(choose one)')));
		echo $this->Form->input('spouse_id', array("empty"=>__('(choose one)')));
		echo $this->Form->input('tel');
		echo $this->Form->input('cel');
		echo $this->Form->input('cel2');
		echo $this->Form->input('email');
		//echo $this->Form->input('parish_id');
	?>
	</fieldset>

	<?php // adicionando marcação requerida pelo bootstrap ?>
	<?php echo $this->Form->end(array(
	    'label' => __('Submit'),
	    'class' => 'btn btn-primary',
	    'div' => array(
	        'class' => 'control-group',
	        ),
	    'before' => '<div class="controls">',
	    'after' => '</div>'
	));?>
</div>
	<ul id="smart-menu">
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Person.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parishes'), array('controller' => 'parishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parish'), array('controller' => 'parishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tithes'), array('controller' => 'tithes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tithe'), array('controller' => 'tithes', 'action' => 'add')); ?> </li>
	</ul>