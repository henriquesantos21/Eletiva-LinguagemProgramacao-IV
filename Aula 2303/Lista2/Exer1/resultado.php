<?php

    $valor_produto = $_POST['valor_produto'];
    $valor_pago = $_POST['valor_pago'];

    if($valor_produto == $valor_pago)
        echo "Não á troco";
    elseif($valor_produto > $valor_pago)
        echo "Valor pago insuficiente";
    else
        echo "Valor do troco: ".($valor_pago - $valor_produto);

    
    $vetor = array(0,1,2,3);
    $vetor[0] = 0;
    $vetor[1] = 1;
    $vetor[2] = 2;

    $vetor = [
        'pos1' => 0,
        'pos2' => 1,
        'pos3' => 2,
        4 => 3
    ];

    $vetor[] = 5;
    var_dump($vetor);

    foreach($vetor as $v){
        echo $v;
    }

    echo $vetor['post1'];
    echo $vetor[4];

