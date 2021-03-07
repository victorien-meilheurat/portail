<div class="center-div">
    <h2>Mon planning</h2>
    <table>
        <tr>
            <td id="lg2"><p><b>Matière</b></p></td>
            <td id="lg2"><p><b>Cours</b></p></td>
            <td id="lg2"><p><b>Debut</b></p></td>
            <td id="lg2"><p><b>Fin</b></p></td>
        </tr>
    <?php foreach($cours as $cour): ?>
        <tr>
            <td id="lg2"><p><p><?=$cour['nom_matiere']?></p></td>
            <td id="lg2"><p><p><?=$cour['nom_cours']?></p></td>
            <td id="lg2"><p><p><?=$cour['dateDebut']?></p></td>
            <td id="lg2"><p><p><?=$cour['dateFin']?></p></td>
        </tr>
    <?php endforeach ?>
    </table>
</div>