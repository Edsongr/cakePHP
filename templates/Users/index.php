<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios AS $user): ?>
            <tr>
                <th> <?php echo $user->id; ?> </th>
                <th><?php echo $user->nome; ?> </th>
                <th> <?php echo $user->email; ?> </th>
                <th> <a href="#">Visualizar</a> <a href="#">Editar</a> <a href="#">Deletar</a> </th>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    
</body>
</html>