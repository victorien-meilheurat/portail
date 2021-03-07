<div class="center-div">
    <h2>Noms des classes</h2>

    <div>
        <a href="/<?= ROOTLINK?>/classes/detail/">Ajouter une nouvelle classe</a>
    </div>
    <table>
        <?php foreach($classes as $classe): ?>
            <tr>
                <td id="lg1"><h2><?=$classe['id']?></h2></td>
                <td id="lg2"><p><?=$classe['nom']?></p></td>
                <td id="lg3">
                    <a href="/<?= ROOTLINK?>/classes/detail/<?=$classe['id']?>">Modifier</a>
                    <a href="/<?= ROOTLINK?>/classes/delete/<?=$classe['id']?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>