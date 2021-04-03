<?php
?>

<html>

<head>
    <meta name="viewport" content="initial-scale = 1.0, user-scalable = no">
    <meta charset="utf-8">
    <title> My Shopping App</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h2 align="center"> Please Login to Proceed!</h2>
        <div id="box"><br />
            <form method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="button" name="login" id="login" class="btn btn-success" value="Login" />
                </div>
                <div id="error"></div>
            </form>
            <br />
        </div>
    </div>

</body>

</html>

<script>
    $(document).ready(function() {
        $('#login').click(function() {
            // Storing the username and password in a local variable
            let username = $('#username').val();
            let password = $('#username').val();
            // If the username and the password are entered
            if ($.trim(username).length > 0 && $.trim(username).length > 0) {
                $.ajax({
                    url: "login.php",
                    method: "POST",
                    data: {
                        userName: username,
                        password: password
                    },
                    cache: true,
                    beforeSend: function() {
                        $('#login').val("Logging in ..");
                    },
                    success: function(data) {
                        if (data) {
                            $("body").load("home.html").hide().fadeIn(1500);
                        } else {
                            let options = {
                                distance: '40',
                                direction: 'left',
                                times: '3'

                            }
                            $('#login').val("Login");
                            $('#error').html("Username or Password is not valid!");
                        }

                    }
                });

            } else {

            }
        });
    });
</script>