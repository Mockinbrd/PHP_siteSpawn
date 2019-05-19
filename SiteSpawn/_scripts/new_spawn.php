<?php

function new_spawn($db) {

    $request = $db->query('SELECT * FROM spawnsimages WHERE `id` = ROUND( RAND() * 4 ) + 1');
    while ($data = $request->fetch())
    {
        echo '<p>' . $data['link'] . '</p>';
    };
}

?>