<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$array = array('status'=>'');

if ($nome == 'robert' && $senha == 'teste2') {
    $array['status'] = 'Tudo ok';
}

echo json_encode($array);