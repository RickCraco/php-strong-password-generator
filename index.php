<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Generatore di password</h1>

    <div class="container d-flex justify-content-center py-4">
        <form action="functions.php" method="POST">
            <label for="length">Inserisci la lunghezza della password</label>
            <input type="number" name="length" class="form-control w-50">

            <br>

            <label for="repetition">Consenti ripetizioni</label>
            <input type="radio" name="repete" value="1">
            <label for="repetition">Non consenti ripetizioni</label>
            <input type="radio" name="repete" value="0">

            <br>

            <label for="letters">Lettere</label>
            <input type="checkbox" name="characters[]" value="letters">
            <br>
            <label for="numbers">Numeri</label>
            <input type="checkbox" name="characters[]" value="numbers">
            <br>
            <label for="symbols">Simboli</label>
            <input type="checkbox" name="characters[]" value="symbols">

            <br>

            <button type="submit" class="btn btn-primary">Genera</button>
        </form>
    </div>
    
</body>
</html>