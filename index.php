<?php
//questao a
    for ($numero = 0; $numero <=100; $numero +=2)
    {echo "O numero $numero é par" .PHP_EOL;}
?>

<?php
//questao b
    $numero = "12";

    if ($numero >0);
    else { echo "O número é negativo, digite um número válido" ;}

    if ($numero == 0);

    for ($i = 0; $i <=$numero; $i +=2)
    {echo "O numero $i é par" .PHP_EOL;}
?>

<?php
//questao c
    $palavra = "ameixa";

    for ($i = 0; $i < strlen($palavra); $i++) 
    {echo $palavra[$i] . PHP_EOL;}
?>

<?php
//questao d
    $numero = 10;
    $soma = 0;

    if ($numero > 0) {

        for ($i = 1; $i <= $numero; $i++) {
            $soma += $i;
        }
        echo "A soma de todos os números de 1 até $numero é: $soma";
    } else {
        echo "O número inserido não é válido. Por favor, digite um número inteiro positivo.";}
?>

<?php
//questao e
    $numero = 25;

    if ($numero <= 1) {
        echo "O número não é primo";
    }

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo "O número é primo";
        }
    }
?>

<?php
//questao f
    $numeros = array(3, 6, 8, 1, 0, 7, 2, 9, 4, 10, 5);

    // Inicializar a variável para armazenar o maior número
    $maiorNumero = $numeros[0]; 

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] > $maiorNumero) {
            $maiorNumero = $numeros[$i];
        }
    }
    echo "O maior número na sequência é: " . $maiorNumero . PHP_EOL;

?>

<?php
//questao g
    $numero = 5;

    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        $produto = $numero * $multiplicador;
        echo "Tabuada do $numero:" . PHP_EOL;
        echo "$numero x $multiplicador = $produto" . PHP_EOL;
    }
?>

<?php
//questao h
    $numero = 6;
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo "$i ";
        }
    }
?>

<?php
//questao i

for ($numero = 1; $numero <=100; $numero++){
   for ($i = 2; $i * $i <= $numero; $i++) {
   if ($numero % $i == 0) {
    echo "$numero".PHP_EOL;
    }
}
}
?>

<?php
//questao j
for ($numero = 1; $numero <=100; $numero++){
    for ($i = 0; $i <=$numero; $i +=2)
    {echo "O numero $i é par" .PHP_EOL;}
}

?>
