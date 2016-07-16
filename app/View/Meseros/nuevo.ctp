<h2>Ingresar nuevo Mesero</h2>

<?php
echo $this->Form->create('Mesero');
echo $this->Form->input('dpi');
echo $this->Form->input('nombres');
echo $this->Form->input('apellidos');
echo $this->Form->input('nivel');
echo $this->Form->end('Ingrear Mesero');
?>