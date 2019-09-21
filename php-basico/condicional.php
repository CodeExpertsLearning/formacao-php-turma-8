<?php

/**
 * Comparação: ==, ===, !=, !==, >, <, 
 *             >=, <=
 * 
 * Lógicos: || - OR, && - AND, NOT - !
 */

$curso = 'Formação PHP';
$curso = 10;

if(gettype($curso) == 'string') {

    print 'É uma string...';

} else if(gettype($curso) == 'integer') {
    print 'É um inteiro...';
} else {

    print 'Não é string, nem inteiro...';

}

print '<hr>';

$curso = gettype($curso);

switch ($curso) {
    case 'string':
        print 'É uma string...';
    break;

    case 'integer':
        print 'É um inteiro...';
    break;
    
    default:
        print 'Não é inteiro nem string...';
    break;
}