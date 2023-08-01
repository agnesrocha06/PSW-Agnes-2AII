<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//styles.css">
    <title>Document</title>
</head>
<body>

    <h1> Exercícios de Array - Agnes Rocha 2AII</h1>
    
<br>

<div class="conteudo">
<?php
    $arraydisciplinas = [
        
        'aluno' =>[
        'psw' => [
            'avaliação' => 5,
            'teste' => 7,

        ],
        'BD' => [
            'avaliação' => 8,
            'teste' => 3,

        ],
        'Geografia' => [
            'avaliação' => 4,
            'teste' => 2,

        ],
        'Matemática' => [
            'avaliação' => 6,
            'teste' => 1,

        ],
        'Química' => [
            'avaliação' => 0,
            'teste' => 2,

        ],
    ],
    ];
        print '<pre>';
        print_r ($arraydisciplinas);
        print '<pre>';

        
    echo '<hr>';

    echo '<br>';

    echo '<br>';

echo 'Soma de Notas - Arrays';

echo '<br>';
echo '<br>';

$media=(($arraydisciplinas['aluno']['psw']['avaliação'])) + (($arraydisciplinas['aluno']['psw']['teste'])) /2;
echo "A media em psw é: $media <br>";
echo '<pre>';


?>

<?php 

$Instituto = array (
    "Informática" => [
        "Abnes " => [
            "Redes" => [
                "N1" => 9,
                "N2" => 9
            ],
            "PSW" => [
                "N1" => 10,
                "N2" => 7
            ],
            "PI" => [
                "N1" => 9,
                "N2" => 8
            ]

        ],
        "Cananda" => [
            "Redes" => [
                "N1" => 8,
                "N2" => 9
            ],
            "PSW" => [
                "N1" => 10,
                "N2" => 9
            ],
            "PI" => [
                "N1" => 9,
                "N2" => 10
            ]

        ],
        "Gustavo" => [
            "Redes" => [
                "N1" => 7,
                "N2" => 6
            ],
            "PSW" => [
                "N1" => 10,
                "N2" => 10
            ],
            "PI" => [
                "N1" => 8,
                "N2" => 4
            ]

        ],
        "Carol" => [
            "Redes" => [
                "N1" => 9,
                "N2" => 8
            ],
            "PSW" => [
                "N1" => 10,
                "N2" => 7
            ],
            "PI" => [
                "N1" => 7,
                "N2" => 6
            ]

        ]

    ],
    "Agropecuaria" => [
        "Bruna" => [
            "Avicultura" => [
                "N1" => 4,
                "N2" => 6

            ],
            "Irrigação" => [
                "N1" => 7,
                "N2" => 9

            ],
            "Zootecnia" => [
                "N1" => 10,
                "N2" => 5

            ]
        ],
        "Demócrito" => [
            "Avicultura" => [
                "N1" => 10,
                "N2" => 7

            ],
            "Irrigação" => [
                "N1" => 2,
                "N2" => 5

            ],
            "Zootecnia" => [
                "N1" => 5,
                "N2" => 0

            ]
        ],
        "João do Boi" => [
            "Avicultura" => [
                "N1" => 6,
                "N2" => 3

            ],
            "Irrigação" => [
                "N1" => 5,
                "N2" => 2

            ],
            "Zootecnia" => [
                "N1" => 10,
                "N2" => 4

            ]

        ],
        "Camile" => [
            "Avicultura" => [
                "N1" => 4,
                "N2" => 1

            ],
            "Irrigação" => [
                "N1" => 5,
                "N2" => 3

            ],
            "Zootecnia" => [
                "N1" => 5,
                "N2" => 2

            ]
        ]

    ],
    "Biologia" => [
        "Cleide" => [
            "Anatomia" => [
                "N1" => 10,
                "N2" => 8

            ],
            "Fisiologia" => [
                "N1" => 5,
                "N2" => 7

            ],
            "Botanica" => [
                "N1" => 8,
                "N2" => 10

            ]
        ],
        "Josiane" => [
            "Anatomia" => [
                "N1" => 7,
                "N2" => 6

            ],
            "Fisiologia" => [
                "N1" => 9,
                "N2" => 5

            ],
            "Botanica" => [
                "N1" => 4,
                "N2" => 8

            ]
        ],
        "Cleudson" => [
            "Anatomia" => [
                "N1" => 7,
                "N2" => 6

            ],
            "Fisiologia" => [
                "N1" => 6,
                "N2" => 9

            ],
            "Botanica" => [
                "N1" => 3,
                "N2" => 5

            ]

        ],
        "Andressa" => [
            "Anatomia" => [
                "N1" => 10,
                "N2" => 6

            ],
            "Fisiologia" => [
                "N1" => 7,
                "N2" => 10

            ],
            "Botanica" => [
                "N1" => 10,
                "N2" => 5

            ]
        ]

    ]
);

foreach ($Instituto as $cursos => $alunos) {
    echo "<mark>$cursos</mark> <br>";
    foreach ($alunos as $aluno => $disciplinas){
        echo "<br><strong>$aluno</strong> <br>";
        foreach ($disciplinas as $disciplina => $notas){
            echo "$disciplina<br>";
            foreach ($notas as $nota => $pronto){
                echo "$nota $pronto<br>";
            }
            echo "<br>";
        }
        echo "<hr>";

    }
   

}; 
    echo '<h2> Impressão dos Cursos </h2>';
    foreach ($Instituto as $cursos => $alunos) {
        echo "<mark>$cursos</mark> <br>";
    }
    echo "<hr>";
    
    echo '<h2> Impressão dos Alunos </h2>';
    foreach ($Instituto as $cursos => $alunos) {
        foreach ($alunos as $aluno => $disciplinas) {
            echo "<br> $aluno <br>";
        }   
    } 
    echo "<hr>";

    echo '<h2> Impressão dos Alunos e Cursos </h2>';
    foreach($Instituto as $cursos => $alunos){
        foreach ($alunos as $aluno => $disciplinas){
        echo "<br> $cursos".': '."$aluno <br>";
        }
    }
    echo "<hr>";

echo '<h2> Impressão das Medias </h2>';

$media = 0;
$nota1 = 0;
$nota2 = 0;

foreach ($Instituto as $cursos => $alunos){
    foreach ($alunos as $aluno => $disciplinas){
        echo '<mark> <br>'. $aluno . '<br> </mark>';
        foreach ($disciplinas as $materias => $notas){
            foreach($notas as $notes => $num){
            $nota1 = ($notas['N1']);
            $nota2 = ($notas['N2']);
            $media = ($nota1 +$nota2)/2;
            if( $media > 5 )
                echo "Foi aprovado em $disciplina com a media $media  <br>";
        
            else if ($media < 5)
                echo  "Foi reprovado na disciplina  $disciplina com a media  $media <br>";
                echo '<br>';

            }
        }
        }
    };
    echo '</pre>';

?>
</div>

</body>
</html>