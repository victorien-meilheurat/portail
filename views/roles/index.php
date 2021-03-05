<link rel="stylesheet" href="../../public/css/main.css" />

<div class="center-div">
    <h2>Noms des roles</h2>

    <?php foreach($roles as $role): ?>

    <table>
            <tr>
                <td id="lg1"><h2><a href="./roles/detail/<?=$role['id']?>"><?=$role['id']?></a></h2></td>
                <td id="lg2"><p><?=$role['nom']?></p></td>
                <td id="lg3">
                    <input name="modifier" type="submit" id="modifier" value="Modifier" />
                    <input name="supprimer" type="submit" id="supprimer" value="Supprimer" /></td>
                </tr>
    </table>
    <br>

    <?php endforeach ?>
</div>