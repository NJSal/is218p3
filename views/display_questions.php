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
            <td><form action="." method="post">
                    <input type="hidden" name="action" value="delete_question">     //value = "delete_question" from switch case
                    <input type="hidden" name="id"
                           value = "<?php echo $question['id'];?>">   //id: primary key cannot be duplicated. if ownerid was used then all of the questions would be deleted
                    <input type="submit" value="Delete">
                </form></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include ('abstract-views/footer.php'); ?>

