<html>

<head>
    <title>Projeto - Fase 1</title>
</head>
<body>
<?php require_once("menu.php")?>
<div>
    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h4>Dados enviados com sucesso, abaixo seguem os dados que você enviou:</h4>
        </div>

        <?php echo "<b> Nome: </b>" . $_GET["nome"]."<br>" ?>
        <?php echo "<b> E-mail: </b>" . $_GET["email"]."<br>"  ?>
        <?php echo "<b> Assunto: </b>" . $_GET["assunto"]."<br>"  ?>
        <?php echo "<b> Mensagem: </b>" . $_GET["msg"]."<br>"  ?>

    </div>

</div>
</body>
<?php require_once("footer.php")?>
</html>