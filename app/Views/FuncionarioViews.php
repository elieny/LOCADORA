<?php

$table = new \CodeIgniter\View\Table();

$template = [
    'table_open'=> '<table border="1"   cellpadding="10" cellspacing="0">',
    'table_close'=> '</table>'
];

$table->setHeading('FUNCIONARIO_ID', 'FUNCIONARIO_NOME','FUNCIONARIO_TEL', 
                    'FUNCIONARIO_DT_CONTRATO', 'CARGO_ID','AÇÃO', 'AÇÃO');
$table->setTemplate($template);

echo $table->generate($tabela);

?>