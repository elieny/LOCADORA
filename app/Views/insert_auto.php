<?php 

helper('form');
echo form_open(' Automovel/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('Digite o Nome do Automovel','');
echo form_label('<br>');
echo form_input('Nome', '');
echo '<br>';
echo form_label('Digite o Ano de Fabricação do Automovel', '');
echo form_label('<br>');
echo form_input('Ano', '');
echo '<br>';
echo form_label('Digite a Cor do Automovel ', '');
echo form_label('<br>');
echo form_input('Cor', '');
echo '<br>';
echo form_label('Digite o Km do Automovel  ', '');
echo form_label('<br>');
echo form_input('KM', '');
echo '<br>';
echo form_label('Digite o valor do Automovel ', '');
echo form_label('<br>');
echo form_input('Valor', '');
echo '<br>';
echo form_label('Digite o Status do Automovel', '');
echo form_label('<br>');
echo form_input('Status', '');
echo '<br>';
echo form_label('Digite a Marca do Automovel  ', '');
echo form_label('<br>');
echo form_input('Marca', '');
echo '<br>';
echo form_label('Digite o Modelo do Automovel ', '');
echo form_label('<br>');
echo form_input('Modelo', '');
echo '<br>';
echo form_submit('mysubmit', 'Inserir');
echo form_close();

?>