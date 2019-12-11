<?php
function get_userinfo($id)
{
    global $db;
    $query = 'SELECT * FROM usersIS218 WHERE id = :id';

    $statements = $db->prepare($query);
    $statements->bindValue(':id',$id);
    $statements->execute();
    $userinfo = $statements->fetchAll();
    $statements->closeCursor();
    return $userinfo;

}


?>