
<html lang="pt-br">
    <head>
        <title>Exemplo de Crud</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="/cadastrar-candidato" method="POST">
            @csrf
            <label for="">Nome</label>
            <input name="nome_candidato" type="text" placeholder="Digite o seu nome....">
            <label for=""> Telefone</label>
            <input name="telefone_candidato" type="text" placeholder="Digite o seu telefone">
            <button>Enviar Cadastro</button>
        </form>
    </body>
</html>
