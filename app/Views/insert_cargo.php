<?php 

helper('form');
echo form_open(' Cargo/Inserir');

echo '<br>';
echo'<pre>';

echo form_label('Digite o Nome do Cargo', '');
echo form_label('<br>');
echo form_input('Cargo', '');

echo form_submit('mysubmit', 'Inserir');
echo form_close();

?>