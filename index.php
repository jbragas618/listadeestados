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
                'populacao' => '795.145',
                'densidade' => '4,30',
                'pib' => '13 622 000',
                'total' => '0,2',
                'pibpercapita' => '	16.953,46',
                'idh' => '	0,663',
                'alfabetizacao' => '86,9%',
                'mortalidade infantil' => '17,0‰',
                'expectativadevida' => '73,9 anos',
            ),

                'AL' => array(

                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Bandeira do Acre" width="50" >',
                    'unidadefederativa' => 'Alagoas',
                    'abreviacao' => 'AL',
                    'sedegoverno' => 'Maceió',
                    'area' => '27.767,7',
                    'populacao' => '3.327.551',
                    'densidade' => '108,61',
                    'pib' => '46.364.000',
                    'total' => '0,8',
                    'pibpercapita' => '	13.877,53',
                    'idh' => '0,631',
                    'alfabetizacao' => '80,6%',
                    'mortalidade infantil' => '19,5‰',
                    'expectativadevida' => '71,6 anos',


            ),

            'AP' => array(

                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg" alt="Bandeira do Acre" width="50" >',
                'unidadefederativa' => 'Amapá',
                'abreviacao' => 'AP',
                'sedegoverno' => 'Macapá',
                'area' => '142.814,6',
                'populacao' => '756.500',
                'densidade' => '4,16',
                'pib' => '13.861.000',
                'total' => '0,2',
                'pibpercapita' => '	18.079,54',
                'idh' => '0,708	',
                'alfabetizacao' => '95%',
                'mortalidade infantil' => '23,2‰',
                'expectativadevida' => '73,9 anos',


        ),

        
        'AM' => array(

            'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Bandeira do Acre" width="50" >',
            'unidadefederativa' => 'Amazonas',
            'abreviacao' => 'AM',
            'sedegoverno' => 'Manaus',
            'area' => '1.570.745,7	',
            'populacao' => '3.893.763',
            'densidade' => '2,05',
            'pib' => '86.560.000',
            'total' => '1,4',
            'pibpercapita' => '21.978,95',
            'idh' => '0,674	',
            'alfabetizacao' => '93,1%',
            'mortalidade infantil' => '18,2‰',
            'expectativadevida' => '71,9 anos',


    ),

    'BA' => array(

        'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeira do Acre" width="50" >',
        'unidadefederativa' => 'Bahia',
        'abreviacao' => 'BA',
        'sedegoverno' => 'Salvador',
        'area' => '564.692,7',
        'populacao' => '15.150.143',
        'densidade' => '24,46',
        'pib' => '245.025.000',
        'total' => '4,1',
        'pibpercapita' => '16.115,89	',
        'idh' => '0,660',
        'alfabetizacao' => '87%',
        'mortalidade infantil' => '17,3‰',
        'expectativadevida' => '73,5 anos',


),

'CE' => array(

    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg" alt="Bandeira do Acre" width="50" >',
    'unidadefederativa' => 'Ceará',
    'abreviacao' => 'CE',
    'sedegoverno' => 'Fortaleza',
    'area' => '148.825,6',
    'populacao' => '8.867.448',
    'densidade' => '54,40',
    'pib' => '130.621.000',
    'total' => '2,2',
    'pibpercapita' => '14.669,14	',
    'idh' => '0,682',
    'alfabetizacao' => '84,8%',
    'mortalidade infantil' => '14,4‰',
    'expectativadevida' => '73,8 anos',


),

'DF' => array(

    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" alt="Bandeira do Acre" width="50" >',
    'unidadefederativa' => 'Distrito Federal',
    'abreviacao' => 'DF',
    'sedegoverno' => 'Brasília',
    'area' => '	5.822,1',
    'populacao' => '2.867.869',
    'densidade' => '400,73',
    'pib' => '215.613.000',
    'total' => '3,6',
    'pibpercapita' => '73.971,05',
    'idh' => '0,824',
    'alfabetizacao' => '97,4%',
    'mortalidade infantil' => '97,4%',
    'expectativadevida' => '78,1 anos',


),

'ES' => array(

    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg" alt="Bandeira do Acre" width="50" >',
    'unidadefederativa' => 'Espírito Santo',
    'abreviacao' => 'ES',
    'sedegoverno' => 'Vitória',
    'area' => '46.077,5',
    'populacao' => '3.894.899',
    'densidade' => '73,97',
    'pib' => '120.363.000',
    'total' => '2',
    'pibpercapita' => '	30.627,45',
    'idh' => '0,740',
    'alfabetizacao' => '93,8%',
    'mortalidade infantil' => '8,8‰',
    'expectativadevida' => '78,2 anos',


),
    
'GO' => array(

    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg" alt="Bandeira do Acre" width="50" >',
    'unidadefederativa' => 'Goiás',
    'abreviacao' => 'GO',
    'sedegoverno' => 'Goiânia	',
    'area' => '340.086,7',
    'populacao' => '6.551.322',
    'densidade' => '16,52',
    'pib' => '173.632.000	',
    'total' => '2,9',
    'pibpercapita' => '26.265,32',
    'idh' => '0,735',
    'alfabetizacao' => '93,5%',
    'mortalidade infantil' => '	14,9‰',
    'expectativadevida' => '14,9‰',


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