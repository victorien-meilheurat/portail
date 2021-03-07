<div class="center-div">
    <h2>Noms des Examens</h2>

    <div>
        <a href="/<?= ROOTLINK?>/examens/detail/">Ajouter un nouveau cours</a>
    </div>
    <table>
    <?php foreach($examens as $examen): ?>
        <tr>
            <td id="lg1"><h2><?=$examen['id']?></h2></td>
            <td id="lg2"><p><p><?=$examen['nom']?></p></td>
            <td id="lg3">
                <a href="/<?= ROOTLINK?>/examens/detail/<?=$examen['id']?>">Modifier</a>
                <a href="/<?= ROOTLINK?>/examens/delete/<?=$examen['id']?>">Supprimer</a>            </td>
        </tr>
    <?php endforeach ?>
    </table>
</div>