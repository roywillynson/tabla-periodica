<?php
//Primer array elementos
$elementosBoxOne = [
    1 => 'H', 18 => 'He', 19 => 'Li', 20 => 'Be',
    31 => 'B', 32 => 'C', 33 => 'N', 34 => 'O',
    35 => 'F', 36 => 'Ne', 37 => 'Na', 38 => 'Mg',
    49 => 'Al', 50 => 'Si', 51 => 'P', 52 => 'S',
    53 => 'Cl', 54 => 'Ar', 55 => 'K', 56 => 'Ca',
    57 => 'Sc', 58 => 'Ti', 59 => 'V', 60 => 'Cr',
    61 => 'Mn', 62 => 'Fe', 63 => 'Co', 64 => 'Ni',
    65 => 'Cu', 66 => 'Zn', 67 => 'Ga', 68 => 'Ge',
    69 => 'As', 70 => 'Se', 71 => 'Br', 72 => 'Kr',
    73 => 'Rb', 74 => 'Sr', 75 => 'Y', 76 => 'Zr',
    77 => 'Nb', 78 => 'Mo', 79 => 'Tc', 80 => 'Ru',
    81 => 'Rh', 82 => 'Pd', 83 => 'Ag', 84 => 'Cd',
    85 => 'In', 86 => 'Sn', 87 => 'Sb', 88 => 'Te',
    89 => 'I', 90 => 'Xe', 91 => 'Cs', 92 => 'Ba',
    93 => 'La-Lu', 94 => 'Hf', 95 => 'Ta', 96 => 'W',
    97 => 'Re', 98 => 'Os', 99 => 'Ir', 100 => 'Pt',
    101 => 'Au', 102 => 'Hg', 103 => 'Tl', 104 => 'Pb',
    105 => 'Bi', 106 => 'Po', 107 => 'At', 108 => 'Rn',
    109 => 'Fr', 110 => 'Ra', 111 => 'Ac-Lr', 112 => 'Rf',
    113 => 'Db', 114 => 'Sg', 115 => 'Bh', 116 => 'Hs',
    117 => 'Mt', 118 => 'Ds', 119 => 'Rg', 120 => 'Cn',
    121 => 'Nh', 122 => 'Fl', 123 => 'Mc', 124 => 'Lv', 125 => 'Ts', 126 => 'Og',
];

//Segundo array elementos

$elementosBoxTwo = [

    4 => 'La', 5 => 'Ce', 6 => 'Pr', 7 => 'Nd',
    8 => 'Pm', 9 => 'Sm', 10 => 'Eu', 11 => 'Gd',
    12 => 'Tb', 13 => 'Dy', 14 => 'Ho', 15 => 'Er',
    16 => 'Tm', 17 => 'Yb', 18 => 'Lu', 22 => 'Ac',
    23 => 'Th', 24 => 'Pa', 25 => 'U', 26 => 'Np',
    27 => 'Pu', 28 => 'Am', 29 => 'Cm', 30 => 'Bk',
    31 => 'Cf', 32 => 'Es', 33 => 'Fm', 34 => 'Md',
    35 => 'No', 36 => 'Lr',
];


//Colores de los elementos
$colores = [
    'alcalinos' => [
        'Li', 'Na', 'K', 'Rb', 'Cs', 'Fr',
    ],
    'alcalinoterreos' => [
        'Be', 'Mg', 'Ca', 'Ba', 'Ra', 'Sr',
    ],
    'metales-transicion' => [
        'Sc', 'Ti', 'V', 'Cr', 'Mn', 'Fe', 'Co', 'Ni', 'Cu', 'Zn', 'Y', 'Zr',
        'Nb', 'Mo', 'Tc', 'Ru', 'Rh', 'Pd', 'Ag', 'Cd', 'Hf', 'Ta', 'W', 'Re', 'Os', 'Ir', 'Pt', 'Au', 'Hg',
        'Rf', 'Db', 'Sg', 'Bh', 'Hs', 'Mt', 'Ds', 'Rg', 'Cn',
    ],
    'lantanidos' => [
        'La-Lu', 'La', 'Ce', 'Pr', 'Nd', 'Pm', 'Sm', 'Eu', 'Gd', 'Tb', 'Dy', 'Ho', 'Er', 'Tm', 'Yb', 'Lu',
    ],
    'actinidos' => [
        'Ac-Lr', 'Ac', 'Th', 'Pa', 'U', 'Np', 'Pu', 'Am', 'Cm', 'Bk', 'Cf', 'Es', 'Fm', 'Md', 'No', 'Lr',

    ],
    'otros-metales' => [
        'Al', 'Ga', 'In', 'Sn', 'Tl', 'Pb', 'Bi', 'Nh', 'Fl', 'Mc', 'Lv',
    ],
    'metaloides' => [
        'B', 'Si', 'Ge', 'As', 'Sb', 'Te', 'Po',
    ],
    'otros-no-metales' => [
        'H', 'C', 'N', 'P', 'O', 'S', 'Se',
    ],
    'halogenos' => [
        'F', 'Cl', 'Br', 'I', 'At', 'Ts',
    ],
    'gases-nobles' => [
        'He', 'Ne', 'Ar', 'Kr', 'Xe', 'Rn', 'Og',
    ],
];

//Obtiene el color adecuado para la posicion
function getColorElement(array $colores, $elemento)
{
    $color = '';

    foreach ($colores as $key => $valueArray) {
        if (in_array($elemento, $valueArray)) {
            $color = $key;
            break;
        }
    }

    return $color;
}

//Funcion que imprime el indice de un array
function printElements($i, array $elementos, $colores)
{
    if (array_key_exists($i, $elementos)) {

        $color = getColorElement($colores, $elementos[$i]);
        return "<div class={$color} ><span>{$elementos[$i]}</span></div>";

    } else {

        global $elementosBoxOne,$elementosBoxTwo;
        $condicion_one = ($elementos == $elementosBoxOne) && (($i > 1 && $i < 18) || ($i> 20 && $i < 31) || ($i> 38 && $i <
                    49));
        $condicion_two = ($elementos == $elementosBoxTwo) && ($i == 1 || $i == 2 || $i == 3 || $i == 19 || $i == 20 || $i == 21);

        if($condicion_one || $condicion_two){
            return "<div class=transparent> <span> &nbsp; </span> </div>";
        }else{
            return "<div class=gris> <span> &nbsp; </span> </div>";
        }
        
        
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?<?php echo time() ?>">
</head>

<body>
    <h1 class="title">Tabla Periodica</h1>
    <div class="container-tabla">
        <?php for ($i = 1; $i <= 126; $i++): ?>

        <?php echo printElements($i, $elementosBoxOne, $colores); ?>

        <?php endfor?>
    </div>
    <br>

    <div class="container-tabla-2">
        <?php for ($i = 1; $i <= 36; $i++): ?>

        <?php echo printElements($i, $elementosBoxTwo, $colores); ?>

        <?php endfor?>
    </div>

    <br>

    <table>
        <tr>
            <th colspan="6" bgcolor="lightgray">Metales</th>
            <th rowspan="2" class="metaloides">Metaloides</th>
            <th colspan="3" bgcolor="lightgray">No metales</th>
        </tr>
        <tr>
            <!--  Metales -->
            <td class="alcalinos">Alcalinos</td>
            <td class="alcalinoterreos">Alcalinotérreos</td>
            <td class="metales-transicion">Metales de transición / Bloque D</td>
            <td class="lantanidos">Lantánidos</td>
            <td class="actinidos">Actínidos</td>
            <td class="otros-metales">Otros metales</td>

            <!-- No Metales -->
            <td class="otros-no-metales">Otros no metales</td>
            <td class="halogenos">Halogénos</td>
            <td class="gases-nobles">Gases nobles</td>
        </tr>
    </table>

</body>



</html>