<div class="center-div">
    <h2>Noms des types d'examens</h2>

    <div>
        <a href="/<?= ROOTLINK?>/typeExamens/detail/">Ajouter un nouveau type d'examen</a>
    </div>
    <table>
        <?php foreach($typeExamens as $typeExamen): ?>
            <tr>
                <td id="lg1"><h2><?=$typeExamen['id']?></h2></td>
                <td id="lg2"><p><?=$typeExamen['nom']?></p></td>
                <td id="lg3">
                    <a href="/<?= ROOTLINK?>/typeExamens/detail/<?=$typeExamen['id']?>">Modifier</a>
                    <a href="/<?= ROOTLINK?>/typeExamens/delete/<?=$typeExamen['id']?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>