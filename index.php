<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Password Generator</h1>

    <form action="functions.php" method="post">

        <label for="length">Password length: </label>
        <input type="number" name="length" min="6" max="20">

        <br>

        <label for="numbers">Use numbers:</label>
        <input type="checkbox" name="numbers">
        <br>

        <label for="letters">Use letters:</label>
        <input type="checkbox" name="letters">
        <br>

        <label for="symbols">Use symbols:</label>
        <input type="checkbox" name="symbols">
        <br>

        <label for="repete">Repete characters:</label>
        <input type="checkbox" name="repete">
        <br>

        <button type="submit">Generate</button>
        <button type="reset">Reset</button>
    </form>

</body>
</html>