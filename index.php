<?php
    require_once 'operacije/uzmi_knjige.php';
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista knjiga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>Lista knjiga</h1>

        <a class="btn btn-dark" href="/iteh-domaci-1-nikolija/kreiraj_knjigu.php">
            Dodaj novu knjigu
        </a>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Knjiga</th>
                <th>Godina izdavanja</th>
                <th>Autor</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($listaKnjiga as $knjiga): ?>
                <tr>
                    <td><?= $knjiga->getId() ?></td>
                    <td><?= $knjiga->getBookName() ?></td>
                    <td><?= $knjiga->getReleasedYear() ?></td>
                    <td><?= $knjiga->getAuthor()->getAuthorName() ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
