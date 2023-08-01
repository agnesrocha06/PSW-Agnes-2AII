<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1>lista ordenada</h1>

    <h2>array - como lista ordenada</h2>


    <div class="conteudo">
    <?php
    $arrayalunos = [
    'aluno' => [
        'nome' => 'Abnes',
        'id' => 0,
        'idade' => 13,
    ],
    'teacher' => [
        'nome'=> 'Rafael',
        'id' => 1,
        'idade' => 17,
    ],
    'tutor' =>[
        'nome' => 'Matheus',
        'id' => 2,
        'idade' => 17,
    ],
];
    print_r($arrayalunos);
    
?>

</div>

</body>
</html>