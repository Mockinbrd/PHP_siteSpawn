<?php

function new_spawn($db) {

    $request = $db->query('SELECT * FROM spawnsimages 
                            ORDER BY rand() 
                            LIMIT 1');
    while ($data = $request->fetch())
    {
        echo '<p>' . $data['link'] . '</p>';
    };

}


/* $request = $db->prepare('SELECT * FROM spawnsimages WHERE id = ?');
$request->execute(array($_GET['Title'));
while ($data = $request->fetch())
{
    echo '<p>' . $data['link'] . '</p>';
};*/

?>