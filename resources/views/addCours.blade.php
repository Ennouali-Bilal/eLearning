<!DOCTYPE html>

<html>
<head>
    <title>Ajouter un cours</title>
    <meta charset="utf-8">
</head>

<body>
    <form action="addCours" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <input type="hidden" name="formateur" value="1" />
        titre: <input type="text" name="titre"><br>
        categorie:
        <select name="categorie">
            <option value="1">CS</option>
            <option value="2">Biology</option>
            <option value="3">History</option>
            <option value="4">Management</option>
        </select><br>
        description: <textarea name="description"></textarea><br>
        nombre de Chapitres:<input type="number" name="numero"><br>
        <input type="submit" value="ajouter">
    </form>
</body>
</html>