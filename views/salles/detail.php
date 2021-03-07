<?php if($salle['id']!=""){ ?>
    <h2> Vous modifiez la salle avec l'id: <?=$salle['id']?></h2>
<?php } else { ?>
    <h2> Ajouter une salle</h2>
<?php } ?>
<form action="/<?= ROOTLINK?>/salles/<?= $salle['id']!="" ? "update" : "add"?>/<?=$salle['id']?>" method="post">
    <div>
        <label for="numero">Numero de la salle : </label>
        <input type="text" name="numero" id="numero" value="<?=$salle['numero']?>" required>
    </div>
    <div>
        <label for="batiment">Bâtiment de la salle : </label>
        <input type="text" name="batiment" id="batiment" value="<?=$salle['batiment']?>" required>
    </div>
    <div>
        <input type="submit" value="Valider!">
        <a href="/<?= ROOTLINK?>/salles/index/">Annuler</a>
    </div>
</form>