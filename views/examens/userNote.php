<div class="center-div">
    <h2>Mes notes</h2>
    <table>
    <?php foreach($examens as $examen): ?>
        <tr>
            <td id="lg2"><p><p><?=$examen['nom_exam']?></p></td>
            <td id="lg2"><p><p><?=$examen['nom_matiere']?></p></td>
            <td id="lg2"><p><p><?=$examen['nom_cours']?></p></td>
            <td id="lg2"><p><p><?=$examen['note']?>/20</p></td>
        </tr>
    <?php endforeach ?>
    </table>
</div>