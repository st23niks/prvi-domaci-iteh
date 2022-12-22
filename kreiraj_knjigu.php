<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kreiraj knjigu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <a href="/iteh-domaci-1-nikolija/">
            < Nazad
        </a>

        <hr/>

        <h1>Kreiraj knjigu</h1>

        <hr/>

        <form>
            <div class="mb-3">
                <label for="book_name" class="form-label">Naziv knjige</label>
                <input type="text" class="form-control" id="book_name">
            </div>

            <div class="mb-3">
                <label for="released_year" class="form-label">Godina izdavanja</label>
                <input type="number" class="form-control" id="released_year">
            </div>

            <div class="mb-3">
                <label for="author_id" class="form-label">Autor knjige</label>
                <select class="form-control" id="author_id" name="author_id"></select>
            </div>

            <button id="kreirajKnjiguBtn" class="btn btn-success mb-3">
                Kreiraj
            </button>
        </form>
    </main>

    <script src="ajax/uzmi_autore.js"></script>
    <script src="ajax/kreiraj_knjigu.js"></script>
</body>
</html>
