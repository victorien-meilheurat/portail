<?php if($cour['id']!=""){ ?>
    <h2> Vous modifiez le cours avec l'id: <?=$cour['id']?></h2>
<?php } else { ?>
    <h2> Ajouter un cours</h2>
<?php } ?>
<form action="/<?= ROOTLINK?>/cours/<?= $cour['id']!="" ? "update" : "add"?>/<?=$cour['id']?>" method="post">
    <div>
        <label for="nom">Nom du cours : </label>
        <input type="text" name="nom" id="nom" value="<?=$cour['nom']?>" required>
    </div>
    <div>
        <label for="dateDebut">Date de début du cours : </label>
        <input type="text" name="dateDebut" id="dateDebut" value="<?=$cour['dateDebut']?>" required>
    </div>
    <div>
        <label for="dateFin">Date de début du cours : </label>
        <input type="text" name="dateFin" id="dateFin" value="<?=$cour['dateFin']?>" required>
    </div>
    <div>
        <label for="id_prof">Professeur du cours : </label>
        <input type="text" name="id_prof" id="id_prof" value="<?=$cour['id_prof']?>" required>
    </div>
    <div>
        <label for="id_classe">Classe du cours : </label>
        <input type="text" name="id_classe" id="id_classe" value="<?=$cour['id_classe']?>" required>
    </div>
    <div>
        <label for="id_salle">Salle du cours : </label>
        <input type="text" name="id_salle" id="id_salle" value="<?=$cour['id_salle']?>" required>
    </div>
    <div>
        <label for="id_matiere">Matière associée cours : </label>
        <input type="text" name="id_matiere" id="id_matiere" value="<?=$cour['id_matiere']?>" required>
    </div>
    <div>
        <input type="submit" value="Valider!">
        <a href="/<?= ROOTLINK?>/cours/index/">Annuler</a>
    </div>
</form>