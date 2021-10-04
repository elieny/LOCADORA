<?php

$table = new \CodeIgniter\View\Table();

$template = [
    'table_open'=> '<table border="1"   cellpadding="10" cellspacing="0">',
    'table_close'=> '</table>'
];

$table->setHeading('AUTOMOVEL_ID', 'AUTOMOVEL_NOME','AUTOMOVEL_ANO_FAB', 'AUTOMOVEL_COR', 'AUTOMOVEL_KM', 'AUTOMOVEL_VALOR_D', 'AUTOMOVEL_STATUS','MARCA_ID','MODELO_ID', 'AÇÃO', 'AÇÃO');
$table->setTemplate($template);

echo $table->generate($tabela);

?>