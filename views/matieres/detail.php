<?php if($matiere['id']!=""){ ?>
    <h2> Vous modifiez la matière avec l'id: <?=$matiere['id']?></h2>
<?php } else { ?>
    <h2> Ajouter une matière</h2>
<?php } ?>
<form action="/<?= ROOTLINK?>/matieres/<?= $matiere['id']!="" ? "update" : "add"?>/<?=$matiere['id']?>" method="post">
    <div>
        <label for="nom">Nom de la matière : </label>
        <input type="text" name="nom" id="nom" value="<?=$matiere['nom']?>" required>
    </div>
    <div>
        <input type="submit" value="Valider!">
        <a href="/<?= ROOTLINK?>/matieres/index/">Annuler</a>
    </div>
</form>