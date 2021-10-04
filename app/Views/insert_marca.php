<?php 

helper('form');

echo form_open(' Marca/Inserir');

echo form_label('Digite o Nome da Marca', '');
echo form_label('<br>');
echo form_input('nome da marca', '');
echo '<br>';
echo form_submit('mysubmit', 'Inserir');
echo form_close();

?>