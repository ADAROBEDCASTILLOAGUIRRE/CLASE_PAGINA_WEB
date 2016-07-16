<h2>Lista de Meseros</h2>
<table>
	<tr>
		<td>Num</td>
		<td>Número de DPI</td>
		<td>Nombres</td>
		<td>Apellidos</td>
		<td>Nivel</td>
		<td>Acciones</td>
	</tr>
	<?php foreach ($meseros as $mesero): ?>
	<tr>
		<td><?php echo $mesero['Mesero']['id']; ?></td>
		<td><?php echo $mesero['Mesero']['dpi']; ?></td>
		<td><?php echo $mesero['Mesero']['nombres']; ?></td>
		<td><?php echo $mesero['Mesero']['apellidos']; ?></td>
		<td><?php echo $mesero['Mesero']['nivel']; ?></td>
		<td><?php echo $this->Html->link('Detalle', array('controller' => 'meseros','action'=>'ver', $mesero['Mesero']['id'])); ?></td>
		</tr>
	<?php endforeach; ?>
</table>
