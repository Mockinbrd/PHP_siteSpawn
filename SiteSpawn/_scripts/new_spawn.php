<?php

function new_spawn($db) {

    $request = $db->query('SELECT * FROM spawnsimages 
                            WHERE rand() > 0.9 
                            ORDER BY rand() 
                            LIMIT 1');
    while ($data = $request->fetch())
    {
        echo '<p>' . $data['link'] . '</p>';
    };
}

?>