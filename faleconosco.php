<style>
    #conteudo {
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto; 
    padding: 20px;
}

table {
    background-color: #e0f7fa; 
    border: 1px solid #b2ebf2; 
    border-radius: 10px;
    padding: 20px;
    width: 80%;
    max-width: 600px; 
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
}

h2 {
    color: #005b96;     
}

label {
    font-weight: bold; 
    color: #003366; 
}

input[type="text"], input[type="email"], textarea {
    width: calc(100% - 20px); 
    padding: 10px;
    border: 1px solid #b2ebf2; 
    border-radius: 5px; 
    margin-bottom: 15px; 
    font-size: 16px; 
}

input[type="submit"] {
    background-color: #005b96; 
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px; 
    cursor: pointer; 
    font-size: 16px; 
}

input[type="submit"]:hover {
    background-color: #003366; 
}

</style>

<div id="conteudo">
    <table>
        <tr>
            <td>
                <h2>Fale Conosco</h2>
                <form action="enviar_msg.php" method="POST">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome" required><br><br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="mensagem">Mensagem:</label><br>
                    <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br><br>

                    <input type="submit" value="Enviar">
                </form>
            </td>
        </tr>
    </table>
</div>
