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

                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Bandeira de Alagoas" width="50" >',
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

                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg" alt="Bandeira do Amapá" width="50" >',
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

            'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Bandeira do Amazonas" width="50" >',
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

        'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeira da Bahia" width="50" >',
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

    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg" alt="Bandeira do Ceará" width="50" >',
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

    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" alt="Bandeira do Distrito Federal" width="50" >',
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

    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg" alt="Bandeira do Espirito Santo" width="50" >',
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

    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg" alt="Bandeira de Goiás" width="50" >',
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



'MA' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg" alt="Bandeira do Maranhão" width="50" >',
    'unidadefederativa' => 'Maranhão',
    'abreviacao' => 'MA',
    'sedegoverno' => 'São Luís',
    'area' => '331.983,3',
    'populacao' => '6.861.924	',
    'densidade' => '18,38',
    'pib' => '78.475.000',
    'total' => '1,3',
    'pibpercapita' => '11.366,23',
    'idh' => '0,639',
    'alfabetizacao' => '83,3%',
    'mortalidade infantil' => '21,3‰',
    'expectativadevida' => '70,6 anos',

),

'MT' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="Bandeira do Mato Grosso" width="50" >',
    'unidadefederativa' => 'Mato Grosso',
    'abreviacao' => 'MT',
    'sedegoverno' => 'Cuiabá',
    'area' => '903.357,9	',
    'populacao' => '3.236.578',
    'densidade' => '3,10',
    'pib' => '107.418.000	',
    'total' => '1,8',
    'pibpercapita' => '32.894,96',
    'idh' => '0,725',
    'alfabetizacao' => '93,5%',
    'mortalidade infantil' => '16,9‰',
    'expectativadevida' => '74,2 anos',




),



'MS' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg" alt="Bandeira do Mato Grosso do Sul" width="50" >',
    'unidadefederativa' => 'Mato Grosso do Sul',
    'abreviacao' => 'MS',
    'sedegoverno' => 'Campo Grande',
    'area' => '3.236.578',
    'populacao' => '2.630.098',
    'densidade' => '6,34',
    'pib' => '83.082.000',
    'total' => '1,4',
    'pibpercapita' => '31.337,22	',
    'idh' => '0,729	',
    'alfabetizacao' => '93,7%',
    'mortalidade infantil' => '14,0‰',
    'expectativadevida' => '75,5 anos',




),



'MG' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg" alt="Bandeira de Minas Gerais" width="50" >',
    'unidadefederativa' => 'Minas Gerais',
    'abreviacao' => 'MG',
    'sedegoverno' => 'Belo Horizonte',
    'area' => '586.528,3',
    'populacao' => '20.777.672	',
    'densidade' => '32,79',
    'pib' => '519.326.000',
    'total' => '8,7',
    'pibpercapita' => '	24.884,94',
    'idh' => '0,731',
    'alfabetizacao' => '93,8%',
    'mortalidade infantil' => '10,9‰',
    'expectativadevida' => '77,2 anos',




),



'PA' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg" alt="Bandeira do Pará" width="50" >',
    'unidadefederativa' => 'Pará',
    'abreviacao' => 'PA',
    'sedegoverno' => 'Belém	',
    'area' => '1.247.689,5',
    'populacao' => '8.101.180',
    'densidade' => '5,58',
    'pib' => '130.883.000',
    'total' => '2,2',
    'pibpercapita' => '16.009,98',
    'idh' => '0,646',
    'alfabetizacao' => '90,7%',
    'mortalidade infantil' => '16,6‰',
    'expectativadevida' => '72,1 anos',




),



'PB' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg" alt="Bandeira da Paraíba" width="50" >',
    'unidadefederativa' => 'Paraíba	',
    'abreviacao' => 'PB',
    'sedegoverno' => 'João Pessoa',
    'area' => '56.439,8',
    'populacao' => '3.950.359',
    'densidade' => '63,71',
    'pib' => '56.140.000',
    'total' => '0,9',
    'pibpercapita' => '14.133,32',
    'idh' => '0,658',
    'alfabetizacao' => '83,7%',
    'mortalidade infantil' => '16,1‰',
    'expectativadevida' => '73,2 anos',




),

'PR' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg" alt="Bandeira do Paraná" width="50" >',
    'unidadefederativa' => 'Paraná',
    'abreviacao' => 'PR',
    'sedegoverno' => 'Curitiba',
    'area' => '199.314,9',
    'populacao' => '11.112.062',
    'densidade' => '51,48',
    'pib' => '376.960.000',
    'total' => '6,3',
    'pibpercapita' => '33.768,62',
    'idh' => '0,749',
    'alfabetizacao' => '95,5%',
    'mortalidade infantil' => '9,3‰',
    'expectativadevida' => '77,1 anos',




),

'PE' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg" alt="Bandeira de Pernambuco" width="50" >',
    'unidadefederativa' => 'Pernambuco',
    'abreviacao' => 'PE',
    'sedegoverno' => 'Recife',
    'area' => '98.311,6',
    'populacao' => '9.297.861',
    'densidade' => '85,58',
    'pib' => '156.955.000',
    'total' => '2,6	',
    'pibpercapita' => '16.795,34',
    'idh' => '0,673',
    'alfabetizacao' => '87,2%',
    'mortalidade infantil' => '	12,7‰',
    'expectativadevida' => '73,9 anos',




),


'PI' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg" alt="Bandeira do Piauí" width="50" >',
    'unidadefederativa' => 'Piauí',
    'abreviacao' => 'PI',
    'sedegoverno' => 'Teresina',
    'area' => '251.529,2',
    'populacao' => '3.198.185',
    'densidade' => '11,95',
    'pib' => '39.148.000',
    'total' => '0,7',
    'pibpercapita' => '12.218,51',
    'idh' => '0,646',
    'alfabetizacao' => '82,8%',
    'mortalidade infantil' => '19,1‰	',
    'expectativadevida' => '71,1 anos',




),

'RJ' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg" alt="Bandeira do Rio de Janeiro" width="50" >',
    'unidadefederativa' => 'Rio de Janeiro',
    'abreviacao' => 'RJ',
    'sedegoverno' => 'Rio de Janeiro',
    'area' => '43.696,1',
    'populacao' => '16.497.395',
    'densidade' => '352,05',
    'pib' => '659.137.000',
    'total' => '11',
    'pibpercapita' => '39.826,95',
    'idh' => '0,761',
    'alfabetizacao' => '97,3%',
    'mortalidade infantil' => '11,5‰',
    'expectativadevida' => '76,2 anos',




),

'RN' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg" alt="Bandeira do Rio Grande do Norte" width="50" >',
    'unidadefederativa' => 'Rio Grande do Norte',
    'abreviacao' => 'RN',
    'sedegoverno' => 'Natal',
    'area' => '52.796,8	',
    'populacao' => '3.419.550',
    'densidade' => '56,88',
    'pib' => '57.250.000',
    'total' => '1',
    'pibpercapita' => '16.631,86',
    'idh' => '0,684',
    'alfabetizacao' => '85,3%',
    'mortalidade infantil' => '14,7‰',
    'expectativadevida' => '75,7 anos',




),

'RS' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg" alt="Bandeira da Paraíba" width="50" >',
    'unidadefederativa' => 'Rio Grande do Sul',
    'abreviacao' => 'RS',
    'sedegoverno' => 'Porto Alegre',
    'area' => '281.748,5	',
    'populacao' => '11.228.091',
    'densidade' => '38,49',
    'pib' => '381.985.000',
    'total' => '6,4',
    'pibpercapita' => '33.960,36',
    'idh' => '0,746',
    'alfabetizacao' => '96,8%',
    'mortalidade infantil' => '9,6‰',
    'expectativadevida' => '77,8 anos',


),

    'RO' => array(


        'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg" alt="Bandeira de Rondônia" width="50" >',
        'unidadefederativa' => 'Rondônia',
        'abreviacao' => 'RO',
        'sedegoverno' => 'Porto Velho',
        'area' => '237.576,2',
        'populacao' => '1 755 015',
        'densidade' => '6,46',
        'pib' => '36.563.000',
        'total' => '0,6',
        'pibpercapita' => '20.677,95',
        'idh' => '0,690',
        'alfabetizacao' => '93,3%',
        'mortalidade infantil' => '71,3 anos',
        'expectativadevida' => '71,3 anos',
    
    
    
    
    ),

    'RR' => array(


        'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg" alt="Bandeira de Roraima" width="50" >',
        'unidadefederativa' => 'Roraima',
        'abreviacao' => 'RR',
        'sedegoverno' => 'Boa Vista',
        'area' => '224.299,0	',
        'populacao' => '500.826',
        'densidade' => '1,74',
        'pib' => '10.354.000',
        'total' => '0,2',
        'pibpercapita' => '20.476,71',
        'idh' => '0,707',
        'alfabetizacao' => '93,4%',
        'mortalidade infantil' => '17,2‰',
        'expectativadevida' => '71,5 anos',
    
    
    
    
    ),

    'SC' => array(


        'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg" alt="Bandeira de Santa Catarina" width="50" >',
        'unidadefederativa' => 'Santa Catarina',
        'abreviacao' => 'SC',
        'sedegoverno' => 'Florianópolis',
        'area' => '95.346,2',
        'populacao' => '6.734.568',
        'densidade' => '61,53',
        'pib' => '249.073.000',
        'total' => '4,2',
        'pibpercapita' => '	36.525,28',
        'idh' => '0,774',
        'alfabetizacao' => '97,2%',
        'mortalidade infantil' => '97,2%',
        'expectativadevida' => '79,1 anos',
    
    
    
    
    ),

    '' => array(


        'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg" alt="Bandeira da Paraíba" width="50" >',
        'unidadefederativa' => 'São Paulo',
        'abreviacao' => 'SP',
        'sedegoverno' => 'São Paulo',
        'area' => '248.209,4',
        'populacao' => '44.169.350',
        'densidade' => '162,93',
        'pib' => '1.939.890.000',
        'total' => '32,4',
        'pibpercapita' => '43.694,68',
        'idh' => '0,783',
        'alfabetizacao' => '97,2%',
        'mortalidade infantil' => '9,9‰',
        'expectativadevida' => '78,1 anos',
    
    
    
    
    ),


    '' => array(


        'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg" alt="Bandeira da Paraíba" width="50" >',
        'unidadefederativa' => 'São Paulo',
        'abreviacao' => 'SP',
        'sedegoverno' => 'São Paulo',
        'area' => '248.209,4',
        'populacao' => '44.169.350',
        'densidade' => '162,93',
        'pib' => '1.939.890.000',
        'total' => '32,4',
        'pibpercapita' => '43.694,68',
        'idh' => '0,783',
        'alfabetizacao' => '97,2%',
        'mortalidade infantil' => '9,9‰',
        'expectativadevida' => '78,1 anos',
    
    
    
    
    ),

    

'SE' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg" alt="Bandeira de Sergipe" width="50" >',
    'unidadefederativa' => 'Sergipe',
    'abreviacao' => 'SE',
    'sedegoverno' => 'Aracaju',
    'area' => '21.910,3',
    'populacao' => '2.227.294',
    'densidade' => '89,81',
    'pib' => '38.554.000	',
    'total' => '0,6',
    'pibpercapita' => '17.189,28',
    'idh' => '0,665',
    'alfabetizacao' => '85,3%',
    'mortalidade infantil' => '16,2‰',
    'expectativadevida' => '72,7 anos',




),




'TO' => array(


    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg" alt="Bandeira do Acre" width="50" >',
    'unidadefederativa' => 'Tocantins',
    'abreviacao' => 'TO',
    'sedegoverno' => 'Palmas',
    'area' => '277.620,9 ',
    'populacao' => '1.502.759',
    'densidade' => '4,70',
    'pib' => '28.930.000',
    'total' => '0,5',
    'pibpercapita' => '19.094,16',
    'idh' => '0,699',
    'alfabetizacao' => '89,6%',
    'mortalidade infantil' => '15,8‰',
    'expectativadevida' => '73,4 anos',




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