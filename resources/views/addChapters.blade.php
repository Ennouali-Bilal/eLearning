<?php

    $nombresChapitres = $tableau['nombreChapitres'];

?>

<!DOCTYPE html>

<html>
<head>
    <title>Ajouter un chapitre</title>
    <meta charset="utf-8"/>
</head>
<body>
    <form action="addChapters" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
        titre: <input type="text" name="titre"><br>
        <input type="hidden" name="cour_id" value=" <?php  echo $tableau['courId']?>"/>
        Video:<input type="file" name="video"/><br>
        <input type="submit" value="ajouter">
    </form>
</body>
</html>