<html>

<head>
    <title>Projeto - Fase 1</title>

</head>

<body>
<?php require_once("menu.php") ?>
<div>
    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h1>Contato</h1>
        </div>
        <form>
            <fieldset>
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="Nome..."><br>
                <label>E-mail</label>
                <input class="form-control" type="text" name="email" placeholder="E-mail...">
                <label>Assunto</label>
                <input class="form-control" type="text" name="assunto" placeholder="Assunto...">
                <label>Mensagem</label>
                <textarea class="form-control" rows="10" name="msg" placeholder="Mensagem..."></textarea>
                <span class="help-block"></span>
                <button type="submit" formaction="submit.php" class="btn">Enviar</button>
            </fieldset>
        </form>
    </div>

</div>
</body>
<?php require_once("footer.php")?>
</div>
</html>