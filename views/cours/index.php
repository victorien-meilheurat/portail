<link rel="stylesheet" href="../../public/css/main.css" />

<div class="center-div">
    <h2>Noms des cours</h2>

    <?php foreach($cours as $cour): ?>

    <table>
            <tr>
                <td id="lg1"><h2><a href="./cours/detail/<?=$cour['id']?>"><?=$cour['id']?></a></h2></td>
                <td id="lg2"><p><?=$cour['nom']?></p></td>
                <td id="lg2"><p><?=$cour['dateDebut']?></p></td>
                <td id="lg2"><p><?=$cour['dateFin']?></p></td>
                <td id="lg3">
                    <input name="modifier" type="submit" id="modifier" value="Modifier" />
                    <input name="supprimer" type="submit" id="supprimer" value="Supprimer" /></td>
                </tr>
    </table>
    <br>

    <?php endforeach ?>
</div>