<?php
function delete_question($id) {
    global $db;
    $query = 'DELETE FROM questions
              WHERE productID = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}

?>