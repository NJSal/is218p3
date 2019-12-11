<?php
require('../ModelPDO/pdo.php');
require('../ModelPDO/pdomethods.php');
require('../ModelPDO/helperfunctions.php');
//$questions = get_questions($userId);
$firstname = filter_input(INPUT_GET, 'fname');
$lastname = filter_input(INPUT_GET, 'lname');
$email = filter_input(INPUT_GET, 'email');
$userId = filter_input(INPUT_GET, 'id');

$name = filter_input(INPUT_POST, 'name');
$about = filter_input(INPUT_POST, 'about');
$skills = filter_input(INPUT_POST, 'skills');

$firstname= (isset($firstname)) ? $firstname : '';
$lastname = (isset($lastname)) ? $lastname : '';

$email = (isset($email)) ? $email : '';
/*
$about = (isset($about)) ? $about : '';
$skills = (isset($skills)) ? $skills: '';
*/


echo "First Name: $firstname <br>";
echo "Last Name: $lastname <br>";
echo "Email: $email<br>";

/*
$idselect = filter_input(INPUT_GET, 'ownerid');
*/

/*
$query = 'SELECT body FROM questions WHERE email = :email AND $ownerid = :ownerid';     //****MOST LIKELY NOT NEEDED****
$statement = $db->prepare($query);
$statement->bindValue(':email', $email);
$statement->bindValue(':ownerid', $ownerid);
$statement->execute();
*/
/*
echo "First Name: $firstname <br>";
echo "Last Name: $lastname <br>";
echo "Email: $email<br>";

$values= $statement->fetchAll();


$owneridvalue = $values['ownerid'];
*/


//$statement->closeCursor();
/*
$query = 'SELECT title, body from questions WHERE email = :email and password = :password';
$statement = $db->prepare($query);
$statement->bindValue(':email', $email);
$statement->bindValue(':password', $password);
$statement->execute();
$values= $statement->fetchAll();
$statement->closeCursor();
*/
//header("Location: ../QuestionForm/question-form.php?ownerid=$owneridvalue");

?>


<?php
/*$userId = get_userId($userId)*/;
$questions = get_questions($userId);
$emailval = get_email($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" <!--href = "../css/main.css" --->
</head>

<body>

    <table class="table">
    <tr>
        <th scope = "col">Email</th>
        <th scope = "col">Id</th>
        <th scope = "col">Question Title</th>
        <th scope = "col">Question Body</th>
        <th scope = "col">Skills</th>

    </tr>
    <?php foreach ($questions as $question) : ?>
        <tr>
            <td><?php echo $question['owneremail']; ?></td>
            <td><?php echo $question['ownerid']; ?></td>
            <td><?php echo $question['title']; ?></td>
            <td><?php echo $question['body']; ?></td>
            <td><?php echo $question['skills']; ?></td>

        </tr>
    <?php endforeach; ?>
</table>
    <!--
    <a href = "../QuestionForm/questionform.php?id=<?php echo $userId; ?>">
    -->
        <!--<button>Add Question</button></a>-->
    <button class="btn btn-default btn-block">
        <a href = "../QuestionForm/question-form.php?id=<?php echo $userId; ?>&email=<?php echo $emailval; ?>">Add Question</a>
    </button>

<?php
//header("Location: ../QuestionForm/question-form.php?id=$userId");
?>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
