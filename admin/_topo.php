<?php
require_once '../controller/UtilCtrl.php';
///UtilCtrl::VerificarLogado();
?>

<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Controle OS</a> 
    </div>
    <div style="color: white;
         padding: 15px 50px 5px 50px;
         float: right;
         font-size: 16px;"> Bem Vindo <?= UtilCtrl::RetornaTipoUsuario(UtilCtrl::RetornarCodigoTipoLogado()) ?> </div>
</nav>   

