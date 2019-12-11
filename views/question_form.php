<?php include('abstract-views/header.php'); ?>
            <form action ="index.php" method = "post" class = "form-container">
                <h2>Question Form</h2>
                <br>
                <br>
                <div class="form-group">
                    <label for="name">Question Title</label>
                    <input id="name" type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <input id="about" type="text" name="about" class="form-control">
                </div>

                <div class="form-group">
                    <label for="skills">Skills: </label>
                    <input id="skills" type="text" name="skills" class="form-control">
                </div>

                <button class="btn btn-primary btn-block">
                    <input type = "submit" value = "Submit Responses" class = "btn btn-primary bt-block">
                </button>

                <input type="hidden" name="userId" value="<?php echo $userId; ?>">
                <input type="hidden" name="email"  value="<?php echo $emailval; ?>">

            </form>
<?php include('views/abstract-views/footer.php'); ?>