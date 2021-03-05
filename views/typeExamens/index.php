<?php foreach($typeExamens as $typeExamen): ?>

<h2><a href="./typeExamens/detail/<?=$typeExamen['id']?>"><?=$typeExamen['id']?></a></h2>
<p><?=$typeExamen['nom']?></p>

<?php endforeach ?>