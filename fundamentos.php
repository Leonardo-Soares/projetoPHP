<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aulas de PHP</title>
</head>

<style>
h2 {
  color: red;
  border-top: black 1px dashed;
}
</style>

<body>
  <div style="width: 97%; padding: 10px 0px 30px 30px;  border: solid 2px black; ">
    <h1 style="text-align:center;">Secção para aprendizado</h1>

    <?php
    echo "<h1>Aula 05 - Fundamentos</h1>";
    echo "Hello World !!! <br>";
    print "Olá Mundo !!!!<br>";
    echo "<br>";
    ?>

    <?php
    echo "<hr> ";
    echo "<h1>Aula 06 - Variáveis</h1>";
    $numero = "100";
    $endereco = "Rua 25";

    echo "O endereço é $endereco e o número é $numero";
    echo "<h3>Endereço Novo</h3>";
    $numero = "55";
    echo "O novo número é $numero";
    ?>

    <?php
    echo "<hr> ";
    echo "<h1>Aula 07 - Variáveis Dinâmicas</h1>";
    echo "<h3>Valor da variável coca: ", $coca = "refrigerante", "</h3>";
    echo "<h3>Valor da variável dinâmica: ", $$coca = "Coca-Café", "</h3>";
    echo "<h3>Nome dado a variável dinâmica: ", $refrigerante, "</h3>";

    echo "
    <h2>
    Obs: O nome da variável ($$)coca vai ser o valor da variável ($)coca  <br>
    E a variável ($)refrigerante vai ser coca-café
    </h2>"
    ?>
  </div>

</body>

</html>