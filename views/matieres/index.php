<link rel="stylesheet" href="../../public/css/main.css" />

<div class="center-div">
    <h2>Noms des matières</h2>

    <?php foreach($matieres as $matiere): ?>

    <table>
            <tr>
                <td id="lg1"><h2><a href="./matieres/detail/<?=$matiere['id']?>"><?=$matiere['id']?></a></h2></td>
                <td id="lg2"><p><?=$matiere['nom']?></p></td>
                <td id="lg3">
                    <input name="modifier" type="submit" id="modifier" value="Modifier" />
                    <input name="supprimer" type="submit" id="supprimer" value="Supprimer" /></td>
                </tr>
    </table>
    <br>

    <?php endforeach ?>
</div>