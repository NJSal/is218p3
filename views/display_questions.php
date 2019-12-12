<?php include('abstract-views/header.php'); ?>
<a href = ".?action=display_question_form$userId=<?php echo $userId ?>">Ask</a>

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
            <td><?php echo $question['id']; ?></td>
            <td><?php echo $question['title']; ?></td>
            <td><?php echo $question['body']; ?></td>
            <td><?php echo $question['skills']; ?></td>
            <td><form action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_question">
                    <input type="hidden" name="id" value = "<?php echo $question['id'];?>">
                    <input type="hidden" name="userId" value = "<?php echo $userId;?>">
                    <input type="submit" value="Delete">
                </form></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include ('abstract-views/footer.php'); ?>

