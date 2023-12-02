<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generatore di password</h1>

    <form action="functions.php" method="POST">
        <label for="length">Inserisci la lunghezza della password</label>
        <input type="number" name="length">

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

        <button type="submit">Genera</button>
    </form>
</body>
</html>