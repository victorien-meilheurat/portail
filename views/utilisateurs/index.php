<link rel="stylesheet" href="../../public/css/main.css" />

<div class="center-div">
    <h2>Noms des utilisateurs</h2>

    <?php foreach($utilisateurs as $utilisateur): ?>


    <table>
            <tr>
                <td id="lg1"><h2><a href="./utilisateurs/detail/<?=$utilisateur['id']?>"><?=$utilisateur['id']?></a></h2></td>
                <td id="lg2"><p><?=$utilisateur['nom']?></p></td>
                <td id="lg2"><p><?=$utilisateur['prenom']?></p></td>
                <td id="lg3">
                    <input name="modifier" type="submit" id="modifier" value="Modifier" />
                    <input name="supprimer" type="submit" id="supprimer" value="Supprimer" /></td>
                </tr>
    </table>
    <br>

    <?php endforeach ?>
</div>