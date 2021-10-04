<?php 

helper('form');
echo form_open(' Locacao/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('Digite o Tipo de Locacao ','');
echo form_label('<br>');
echo form_input('Tipo', '');
echo '<br>';
echo form_label('Digite o Valor da Locacao', '');
echo form_label('<br>');
echo form_input('valor', '');
echo '<br>';
echo form_label('Digite a Data de Inicio da Locacao ', '');
echo form_label('<br>');
echo form_input('inicio', '');
echo '<br>';
echo form_label('Digite O ID do Cliente ', '');
echo form_label('<br>');
echo form_input('id cliente', '');
echo '<br>';
echo form_label('Digite o ID do Funcionario ', '');
echo form_label('<br>');
echo form_input('id do funcionario', '');
echo '<br>';
echo form_label('Digite o Id Automovel ', '');
echo form_label('<br>');
echo form_input('Id do Automovel', '');
echo '<br>';
echo form_submit('mysubmit', 'Inserir');
echo form_close();

?>