<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
            margin: 0;
            padding: 0;
        }

        #menu {
            background-color: #87CEEB; 
            padding: 15px; 
            display: flex; 
            justify-content: center; 
            list-style-type: none; 
        }

        #menu li {
            margin: 0 15px; 
        }

        #menu a {
            color: #ffffff; 
            text-decoration: none; 
            font-weight: bold; 
            padding: 10px 15px; 
            border-radius: 5px;
            transition: background-color 0.3s; 
        }

        #menu a:hover {
            background-color: #1E90FF; 
            color: black;
        }

        #menu a:active {
            background-color: #7a1e28; 
        }
    </style>
</head>
<body>

    <div>
        <ul id="menu">
            <li><a href="index.php">Fotos</a></li>
            <li><a href="?pg=quemsomos">Quem sou eu</a></li>
            <li><a href="?pg=faleconosco">Fale Conosco</a></li>
            <li><a href="?pg=templates/rodape">Contatos</a></li>
        </ul>
    </div>

</body>
</html>
