<?php if($typeExamen['id']!=""){ ?>
    <h2> Vous modifiez le type d'examen avec l'id: <?=$typeExamen['id']?></h2>
<?php } else { ?>
    <h2> Ajouter un type d'examen</h2>
<?php } ?>
<form action="/<?= ROOTLINK?>/typeExamens/<?= $typeExamen['id']!="" ? "update" : "add"?>/<?=$typeExamen['id']?>" method="post">
    <div>
        <label for="nom">Nom du type d'examen : </label>
        <input type="text" name="nom" id="nom" value="<?=$typeExamen['nom']?>" required>
    </div>
    <div>
        <input type="submit" value="Valider!">
        <a href="/<?= ROOTLINK?>/typeExamens/index/">Annuler</a>
    </div>
</form>