<?php include('abstract-views/header.php'); ?>

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


<?php include ('abstract-views/footer.php'); ?>

