
<?php

    $text = 'Marco va al mare con i suoi amici. Se i suoi amici non ci sono andrà con la sua ragazza al mare o in piscina';

    $length = strlen($text);

?>


<div>
    <?= $text ?>
</div>

<div>
    <p>Il testo è formato da <?= $length ?> parole </p>
</div>

<?php
   

    $bannedWord =  $_GET['word'];

    echo $bannedWord;
    
    $newText = str_replace($bannedWord, '***',$text);

    $newLength =strlen($newText);

?>

<div>
    <?= $newText ?>
</div>

<div>
    <p>Il testo è formato da <?= $newLength ?> parole </p>
</div>


