<?php
    $person['name'] = 'Ryan';
    $person['age'] = 18;
    $person['weight'] = 80;
    $person['programs'] = ['PHP','Java','C','Swift'];

    foreach($person['programs'] as $language){
        echo $language . '<br>';
    }
?>