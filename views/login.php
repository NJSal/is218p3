<?php include ('abstract-views/header.php'); ?>
            <form action ="index.php" method = "post" class = "form-container">
                <h2>Account Login</h2>
                <br>
                <br>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input id="email" type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="form-control">
                </div>

                <button class="btn btn-default btn-block">
                    <a href = "../Registrationform/registrationform.html">Register Account</a>
                </button>

                <button class="btn btn-primary btn-block">
                    <input type = "submit" value = "Submit Responses" class = "btn btn-primary bt-block">
                </button>
            </form>

<?php include ('abstract-views/footer.php'); ?>
