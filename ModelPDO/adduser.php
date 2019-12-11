<?php

function registeruser($email, $firstname, $lastname, $birthday, $lastname, $birthday, $password){
    global $db;

    $query = 'INSERT INTO accountsIS218 (email, fname, lname, birthday, password)
          VALUES (:email, :fname, :lname, :birthday, :password)';

//Create PDO statement
    $statement = $db->prepare($query);

//Bind form values to SQL
    $statement->bindValue(':email', $email);
    $statement->bindValue(':fname', $firstname);
    $statement->bindValue(':lname', $lastname);
    $statement->bindValue(':birthday', $birthday);
    $statement->bindValue(':password', $password);

//Execute the SQL Query
    $statement->execute();

    $id = $db->getLastInsertedId;

//Close the datab
    $statement->closeCursor();
}