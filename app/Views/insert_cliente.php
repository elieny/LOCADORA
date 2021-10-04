<?php 

helper('form');
echo form_open(' Cliente/Inserir');

echo '<br>';
echo'<pre>';
echo form_label('Digite o Nome do Cliente','');
echo form_label('<br>');
echo form_input('Nome', '');
echo '<br>';
echo form_label('Digite o Telefone do Cliente', '');
echo form_label('<br>');
echo form_input('Telefone', '');
echo '<br>';
echo form_label('Digite Sexo do Cliente  ', '');
echo form_label('<br>');
echo form_input('Sexo', '');
echo '<br>';
echo form_label('Digite o Email do cliente', '');
echo form_label('<br>');
echo form_input('Email', '');
echo '<br>';
echo form_label('Digite a Senha do Cliente ', '');
echo form_label('<br>');
echo form_input('Senha', '');
echo '<br>';
echo form_label('Digite o Endereco do Cliente', '');
echo form_label('<br>');
echo form_input('Endereco', '');
echo '<br>';
echo form_label('Digite o Complemento do Cliente', '');
echo form_label('<br>');
echo form_input('Complemento', '');
echo '<br>';
echo form_label('Digite o UF  do Cliente', '');
echo form_label('<br>');
echo form_input('UF', '');
echo form_label('Digite a Data de Nascimento do Cliente', '');
echo form_label('<br>');
echo form_input('Data de Nascimento', '');
echo form_label('Digite a Data do Cadastro do Cliente', '');
echo form_label('<br>');
echo form_input('Data do Cadastro', '');
echo '<br>';
echo form_submit('mysubmit', 'Inserir');
echo form_close();

?>