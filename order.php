<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form method="POST" class="container" action="./treatment.php">
        <label for="firstName">Prénom</label>
        <input type="text" name="firstname" id="firstName" placeholder="Votre prénom" required class="form-control">
        <label for="lastName">Nom</label>
        <input type="text" name="lastname" id="lastName" placeholder="Votre nom" required class="form-control">
        <label for="address">Adresse</label>
        <input type="text" name="street" id="address" placeholder="Rue" required class="form-control">
        <input type="text" name="postalcode" id="address" placeholder="Code postal" required class="form-control">
        <input type="text" name="city" id="address" placeholder="ville" required class="form-control">
        <input type="checkbox" name="pizza[]" id="margarita" value="margarita">
        <label for="margarita">Margarita</label><br>
        <input type="checkbox" name="pizza[]" id="reine" value="reine">
        <label for="reine">Reine</label><br>
        <input type="checkbox" name="pizza[]" id="calzone" value="calzone">
        <label for="calzone">Calzone</label><br>
        <input type="checkbox" name="pizza[]" id="carnivore" value="carnivore">
        <label for="carnivore">Carnivore</label><br>
        <input type="checkbox" name="pizza[]" id="pepperoni" value="pepperoni">
        <label for="pepperoni">Pepperoni</label><br>
        <input type="submit" value="Commandez" class="btn btn-success">
    </form>


</body>

</html>