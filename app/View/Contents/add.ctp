<div class="content form">
<?php echo $this->Form->create('Content');?>
	<fieldset>
		<legend>Adicionar Conteúdo</legend>
		<?php
			echo $this->Form->input('grade_id', ['label' => 'Disciplina']);
			echo $this->Form->input('name', ['label' => 'Nome do Conteúdo']);
		?>
	</fieldset>
<?php echo $this->Form->end('Salvar'); ?>
</div>

<div class="actions">
	<?php echo $this->element('menu_main'); ?>
    <br><hr><br>
    <h3>Menu Conteúdos</h3>
	<ul>
		<li><?php echo $this->Html->link('Listar Conteudos', ['controller' => 'contents', 'action' => 'index']); ?> </li>
		<li><?php echo $this->Html->link('Listar Disciplinas', ['action' => 'index']);?></li>
		<li><?php echo $this->Html->link('Adicionar Disciplina', ['controller' => 'grades', 'action' => 'add']); ?></li>
	</ul>
</div>
