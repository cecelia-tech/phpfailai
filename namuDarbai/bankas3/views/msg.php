<?php
if ($msg = Bank\Funkcijos::getMessage()) : ?>
<div style="margin: 10px; padding: 10px; border: 2px solid red"> <?=$msg[0]?></div>
<?php endif?>