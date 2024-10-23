

<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sombrero Seleccionador de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    
    h1{
        font-style: italic;
        color: gold;
    }
    .container{
        background-color: grey;
    }
    
</style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Benvinguts a Hogwarts</h1>
        <form action="bienvenida.php" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="cognoms" class="form-label">Cognoms</label>
                <input type="text" class="form-control" id="cognoms" name="cognoms" required>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>