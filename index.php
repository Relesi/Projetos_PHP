<?php

include_once 'classes/Medicos.php';
include_once 'classes/Consultas.php';
include_once 'classes/Pacientes.php';

//Logica da Consulta
$consultas = new Consultas;
$consultas->setNumeroConsulta();
$numeroConsulta = $consultas->getNumeroConsulta();

//Logica do Pacientes
$pacientes = new Pacientes;
$pacientes->setNomePaciente('4LINUX');
$pacientes->setNumeroConsulta($numeroConsulta);
$impressaoDoutor = $pacientes->getFixa();


//Logica do Medico
$medicos = new Medicos;
$medicos->obtemFicha($impressaoDoutor);
$impressaoDoMedicoEmtela = $medicos->lerdadosPaciente();

?>

<html>
<head>
<title>::: Sistema de Atendimento 4Linux</title>
</head>
<body>
<table width="100%" border="1">
<tr height="60" align="center">
<td> Senhor medico  Joaquim sei la de onde ira atender.</td>
<tr height="60" align="center">

<td><?php echo $impressaoDoMedicoEmtela ?></td>td>

</tr>
</table>

</body>
</html>




