<div class="center-div">
    <h2>Noms des utilisateurs</h2>

    <div>
        <a href="/<?= ROOTLINK?>/utilisateurs/detail/">Ajouter un nouveau utilisateur</a>
    </div>
    <table>
        <?php foreach($utilisateurs as $utilisateur): ?>
            <tr>
                <td id="lg1"><h2><a href="/<?= ROOTLINK?>/utilisateurs/detail/<?=$utilisateur['id']?>"><?=$utilisateur['id']?></a></h2></td>
                <td id="lg2"><p><?=$utilisateur['nom']?></p></td>
                <td id="lg2"><p><?=$utilisateur['prenom']?></p></td>
                <td id="lg3">
                    <a href="/<?= ROOTLINK?>/utilisateurs/detail/<?=$utilisateur['id']?>">Modifier</a>
                    <a href="/<?= ROOTLINK?>/utilisateurs/delete/<?=$utilisateur['id']?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>