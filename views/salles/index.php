<link rel="stylesheet" href="../../public/css/main.css" />

<div class="center-div">
    <h2>Noms des salles</h2>

    <?php foreach($salles as $salle): ?>

    <table>
            <tr>
                <td id="lg1"><h2><a href="./salles/detail/<?=$salle['id']?>"><?=$salle['id']?></a></h2></td>
                <td id="lg2"><p><?=$salle['batiment']?></p></td>
                <td id="lg2"><p><?=$salle['numero']?></p></td>
                <td id="lg3">
                    <input name="modifier" type="submit" id="modifier" value="Modifier" />
                    <input name="supprimer" type="submit" id="supprimer" value="Supprimer" /></td>
                </tr>
    </table>
    <br>

    <?php endforeach ?>
</div>