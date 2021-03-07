<div class="center-div">
    <h2>Noms des cours</h2>

    <div>
        <a href="/<?= ROOTLINK?>/cours/detail/">Ajouter un nouveau cours</a>
    </div>
    <table>
    <?php foreach($cours as $cour): ?>
        <tr>
            <td id="lg1"><h2><?=$cour['id']?></h2></td>
            <td id="lg2"><p><?=$cour['nom']?></p></td>
            <td id="lg2"><p><?=$cour['dateDebut']?></p></td>
            <td id="lg2"><p><?=$cour['dateFin']?></p></td>
            <td id="lg3">
                <a href="/<?= ROOTLINK?>/cours/detail/<?=$cour['id']?>">Modifier</a>
                <a href="/<?= ROOTLINK?>/cours/delete/<?=$cour['id']?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach ?>
    </table>
</div>