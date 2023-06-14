<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintetica</title>
    <style>
        table {
            border-collapse: collapse;
        }


        th,
        td {
            border: 1px solid black;
            padding: 7px;
        }


    </style>
</head>

<body>
    <header>
        <h1>Lista Sintetica</h1>
    </header>
    <main>
        <?php


        $colunas = array(
            'Bandeira',
            'Unidade Federativa',
            'Abreviação',
            'Sede do Governo',
            'Área (km)',
            'População (2014)',
            'Densidade(2005)',
            'PIB(2015)',
            '(% total) (2015)',
            'IDH(2010)',
            'Alfabetização',
            'Mortalidade Infantil(2016)',
            'Expectativa de Vida (2016)',
        );
        ?>

        <?php

        $estados = array(

           

            'AC' => array(

                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre" width="50" >',
                'unidadefederativa' => 'Acre',
                'abreviacao' => 'AC',
                'sedegoverno' => 'Rio Branco',
                'area' => '164 122,2',
                'populacao' => '795 145',
                'densidade' => '4,30',
                'pib' => '13 622 000',
                'total' => '0,2',
                'pibpercapita' => '	16 953,46',
                'idh' => '	0,663',
                'alfabetizacao' => '86,9%',
                'mortalidade infantil' => '17,0‰',
                'expectativadevida' => '73,9 anos',


            ),

        
        );
        ?>

      <table>
        <thead>
        <thead>
            <tr>
                <th>Bandeira</th>
                <th>Unidade federativa</th>
                <th>Abreviação</th>
                <th>Sede de governo</th>
                <th>Área (km<sup>2</sup>)</th>
                <th>População (2014)</th>
                <th>Densidade (2005)</th>
                <th>PIB (2015)</th>
                <th>(% total) (2015)</th>
                <th>PIB per capita (R$) (2015)</th>
                <th>IDH</th>
                <th>Alfabetização (2016)</th>
                <th>Mortalidade infantil (2016)</th>
                <th>Expectativa de vida (2016)</th>
            </tr>
        </thead>
        </thead>
        <tbodY>
                 <?php 

                    foreach($estados as $chaves => $valor)
                    {
                        echo "<tr><td>{$estados[$chaves]['bandeira']}</td>";
                        echo "<td>{$estados[$chaves]['unidadefederativa']}</td>";
                        echo "<td>{$estados[$chaves]['abreviacao']}</td>";
                        echo "<td>{$estados[$chaves]['sedegoverno']}</td>";
                        echo "<td>{$estados[$chaves]['area']}</td>";
                        echo "<td>{$estados[$chaves]['populacao']}</td>";
                        echo "<td>{$estados[$chaves]['densidade']}</td>";
                        echo "<td>{$estados[$chaves]['pib']}</td>";
                        echo "<td>{$estados[$chaves]['total']}</td>";
                        echo "<td>{$estados[$chaves]['pibpercapita']}</td>";
                        echo "<td>{$estados[$chaves]['idh']}</td>";
                        echo "<td>{$estados[$chaves]['alfabetizacao']}</td>";
                        echo "<td>{$estados[$chaves]['mortalidade infantil']}</td>";
                        echo "<td>{$estados[$chaves]['expectativadevida']}</td></tr>";
                    }
                   


                 ?>  
        </tbodY>
      </table>


    </main>
</body>

</html>