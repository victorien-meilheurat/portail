<div class="center-div">
    <h2>Planning des salles</h2>
    <table>
        <tr>
            <td id="lg2"><p><b>Num</b></p></td>
            <td id="lg2"><p><b>Batiment</b></p></td>
            <td id="lg2"><p><b>Cours</b></p></td>
            <td id="lg2"><p><b>Debut</b></p></td>
            <td id="lg2"><p><b>Fin</b></p></td>
            <?php if($_SESSION['utilisateur']['id_role']==2):?>
                <td id="lg2"><p><b>Conflit</b></p></td>
            <?php endif ?>
        </tr>
    <?php foreach($salles as $salle): ?>
        <tr>
            <td id="lg2"><p><p><?=$salle['numero']?></p></td>
            <td id="lg2"><p><p><?=$salle['batiment']?></p></td>
            <td id="lg2"><p><p><?=$salle['nom']?></p></td>
            <td id="lg2"><p><p><?=$salle['dateDebut']?></p></td>
            <td id="lg2"><p><p><?=$salle['dateFin']?></p></td>
            <?php if($_SESSION['utilisateur']['id_role']==2):?>
                <td id="<?= $salle['id_cours'] ?>" class="<?= $salle['id'] ?>"><input type="checkbox" id="conflit" onchange="color(<?= $salle['id_cours'] ?>)" name="conflit"></td>
            <?php endif ?>
        </tr>
    <?php endforeach ?>
    </table>
</div>
<script>
    function color(numLine) {
        if (document.getElementById(numLine).style.backgroundColor == "red"){
            document.getElementById(numLine).style.backgroundColor = "white";
        } else{
            document.getElementById(numLine).style.backgroundColor = "red";
        }
    }
</script>