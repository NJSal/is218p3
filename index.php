<?php

require('ModelPDO/pdo.php');
require('ModelPDO/pdomethods.php');
//require('../ModelPDO/accountsdb.php');          //loginvalidation

$action = filter_input(INPUT_POST, 'action');
if($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if($action == NULL){
        $action = 'log_in';
    }
}

switch($action){
    case 'log_in': {
        include('views/login.php');
        break;
    }

    case 'validate_login':
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        if ($email == NULL || $password == NULL) {
            $error = "Email and Password are required";
            include('../errors/error.php');
        } else {
            $userId = validate_login($email, $password);
            echo "User ID IS: $userId";
            if ($userId !== false) {
                header("location: .?action=display_registration");      //action tells controller what to do
            } else {
                header("Location: .?action=display_questions&userId=$userId");
            }
        }
        break;
    }

    case 'display_registration':
    {
        include('views/registration.php');
        break;
    }

    case 'register': {
        $firstname = filter_input(INPUT_POST, 'fname');
        $lastname = filter_input(INPUT_POST, 'lname');
        $birthday = filter_input(INPUT_POST, 'birthday');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        if ($firstname == NULL || $lastname == NULL || $birthday == NULL || $email == NULL || $password == NULL) {
            $error = "Missing a field";
            include('../errors/error.php');
        }
        else{
            $register = validate_registration($firstname, $lastname, $birthday, $password, $email);
            echo "User ID: $register";
            if($register == false){
                header("Location: .?action=display_login");
            }
            else{
                $userId = validate_login($email,$password);
                header("Location: .?display_questions&userId=$userId");
            }
        }


        break;
    }




    case 'display_questions': {         //almost done but not a 100% done
        $userId = filter_input(INPUT_GET, 'userId');
        if ($userId == NULL || $userId < 0) {
            header('Location: .?action=display_login');
        } else {
            $questions = get_users_questions($userId);
            include('views/display_questions.php');
        }
        break;
    }

    case 'display_question_form': {
        $userId = filter_input(INPUT_GET, 'userId');
        $emailVal =
        include('views/question_form.php');             //includes the form
        break;
    }

    case 'delete_question': {

    }


    default: {
        $error = 'Unknown Action';
        include('errors/error.php');
    }


    /* I am not sure if this is right
    case 'display_users':
    {
        $userId = filter_input(INPUT_GET, 'userId');
        if($userId == NULL){
            echo 'User Id unavailable';
        }
        else{

        }



    }

    */
}









?>