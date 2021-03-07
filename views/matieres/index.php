<div class="center-div">
    <h2>Noms des matières</h2>

    <div>
        <a href="/<?= ROOTLINK?>/matieres/detail/">Ajouter une nouvelle matière</a>
    </div>
    <table>
        <?php foreach($matieres as $matiere): ?>
            <tr>
                <td id="lg1"><h2><?=$matiere['id']?></h2></td>
                <td id="lg2"><p><?=$matiere['nom']?></p></td>
                <td id="lg3">
                    <a href="/<?= ROOTLINK?>/matieres/detail/<?=$matiere['id']?>">Modifier</a>
                    <a href="/<?= ROOTLINK?>/matieres/delete/<?=$matiere['id']?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>