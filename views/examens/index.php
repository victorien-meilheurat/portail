<?php foreach($examens as $examen): ?>

<h2><a href="./examens/detail/<?=$examen['id']?>"><?=$examen['id']?></a></h2>
<p><?=$examen['nom']?></p>

<?php endforeach ?>