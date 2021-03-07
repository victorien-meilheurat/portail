<div class="center-div">
    <h2>Noms des salles</h2>

    <div>
        <a href="/<?= ROOTLINK?>/salles/detail/">Ajouter une nouvelle salle</a>
    </div>
    <table>
        <?php foreach($salles as $salle): ?>
            <tr>
                <td id="lg1"><?=$salle['id']?></h2></td>
                <td id="lg2"><p><?=$salle['batiment']?></p></td>
                <td id="lg2"><p><?=$salle['numero']?></p></td>
                <td id="lg3">
                    <a href="/<?= ROOTLINK?>/salles/detail/<?=$salle['id']?>">Modifier</a>
                    <a href="/<?= ROOTLINK?>/salles/delete/<?=$salle['id']?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>