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

    <h1 class="text-center">Password Generator</h1>
    <div class="container">
        <form action="functions.php" method="post">

            <label for="length">Password length: </label>
            <input type="number" name="length" min="6" max="20" class="form-control w-25">

            <br>

            <label for="numbers">Use numbers:</label>
            <input type="checkbox" name="numbers" class="form-check-input">
            <br>

            <label for="letters">Use letters:</label>
            <input type="checkbox" name="letters" class="form-check-input">
            <br>

            <label for="symbols">Use symbols:</label>
            <input type="checkbox" name="symbols" class="form-check-input">
            <br>

            <label for="repete">Repete characters:</label>
            <input type="checkbox" name="repete" class="form-check-input">
            <br>

            <button type="submit" class="btn btn-primary">Generate</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
   

</body>
</html>