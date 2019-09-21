<?php

$cursos = [
    'PHP Básico',
    'PHP OO',
    'PHP com Testes',
    'PHP Design Patterns'
];

foreach($cursos as $chave => $curso){
    print $chave . ' - ' . $curso . '<br>';
}

print '<hr>';

for($i = 0; $i < count($cursos); $i++) {
    print $cursos[$i] . '<br>';
}
print '<hr>';

$i = 0;

while($i < count($cursos)){
    print $cursos[$i] . '<br>';
    $i++;
}
print '<hr>';

$i = 0;

do {
    print $cursos[$i] . '<br>';
    $i++; 
}while($i < count($cursos));