<?php
// Header
include_once 'includes/header.php';
?>


<body>
<div id="container">
<?php
date_default_timezone_get('America/Sao_Paulo');
    $minuto = date("i");
    $hora = date("H");
    $dia = date("d");
    $mes = date("m");
    $ano = date("y");
// Horas //
if ($hora>= 0 && $hora<= 12 && $minuto>= 0 && $minuto<=59){
    echo"<h1>Bom Dia</h1>";

}else if ($hora>= 13 && $hora<= 17 && $minuto>= 0 && $minuto<=59){
    echo"<h1>Boa Tarde</h1>";

}else{
    echo"<h1>Boa Noite</h1>";

}

// Dias  //
$dias = array (0 => "Domingo", 1 => "Segunda-feira", 2 => "Terça-feira", 3 => "Quarta-feira", 
4 => "Quinta-feira", 5 => "Sexta-feira", 6 => "Sábado");
$hoje = getdate();

$dias = $hoje["wday"];
$nomededias = $dias[$dias];
echo"<h1> Bem vindo a sua agenda de contatos </h1>";
echo"<h1>$nomededias</h1>";

// Mês // 
if($mes==1){
    echo"<h1> Dia $dia de Janeiro de $ano</h1>";
}else if($mes==2){
    echo"<h1> Dia $dia de Fevereiro de $ano</h1>";
}else if($mes==3){
    echo"<h1> Dia $dia de Março de $ano</h1>";
}else if($mes==4){
    echo"<h1> Dia $dia de Abril de $ano</h1>";
}else if($mes==5){
    echo"<h1> Dia $dia de Maio de $ano</h1>";
}else if($mes==6){
    echo"<h1> Dia $dia de Junho de $ano</h1>";
}else if($mes==7){
    echo"<h1> Dia $dia de Julho de $ano</h1>";
}else if($mes==8){
    echo"<h1> Dia $dia de Agosto de $ano</h1>";
}else if($mes==9){
    echo"<h1> Dia $dia de Setembro de $ano</h1>";
}else if($mes==10){
    echo"<h1> Dia $dia de Outubro de $ano</h1>";
}else if($mes==11){
    echo"<h1> Dia $dia de Novembro de $ano</h1>";
}else if($mes==12){
    echo"<h1> Dia $dia de Dezembro de $ano</h1> ";
}

?>
</div>
</body>
</html>

<?php
// Footer
include_once 'includes/footer.php';
?>