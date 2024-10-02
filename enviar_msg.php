<html>
    <style>
       
.mensagem-enviada {
    text-align: center;
    margin-top: 50px;
}

.mensagem-enviada h2 {
    color: #4CAF50; 
}

.mensagem-enviada p {
    margin: 20px 0;
    font-size: 18px;
}

.botao-voltar {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007BFF; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.botao-voltar:hover {
    background-color: #0056b3; 
}

    </style>
</html>

<?php
    include_once("templates/topo.php");
?>

<div class="mensagem-enviada">
    <h2>Sua mensagem foi enviada com sucesso!</h2><br><br>
    <p>Agradecemos pelo seu contato. Em breve, retornaremos para você.</p>
    <a href="index.php" class="botao-voltar">Voltar ao Menu</a>
</div>

<?php
    include_once("templates/rodape.php");
?>
