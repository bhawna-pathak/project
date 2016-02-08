<!doctype html>
<html lang="en">
    <head>
        <title>registration form</title>
        <style>
            .error {
                margin-left: 5px;
                color: red;
            }
            .valid {
                display: none;
                margin-left: 5px;
                color: red;
            }
            .elem-error {
                border: 2px solid red;
            }
        </style>
    </head>
    <body>
        <div class="registration_form">

            <form class="registration" method="post" name="form">

                <div class="form_item"> <label> First Name : </label><input type="text" class="firstname" name="firstname"> </div>
                <div class="form_item"> <label> Last Name : </label><input type="text" class="lastname" name="lastname"> </div>
                <div class="form_item"> <label> User Name : </label><input type="text" class="username" name="username"> </div>
                <div class="form_item"> <label> Password : </label><input type="password" class="password" name="password"> </div>
                <div class="form_item"> <label> Confirm Password : </label><input type="password" class="confirm" name="confirm"> </div> 
                <div class="form_item"> <label> Email Id : </label><input type="text" class="email" name="email"> </div>
                <div class="form_item"> <input type ="submit" id="submit" value="submit" name="submit"> </div>

            </form>

        </div>
        <script src="../jquery.min.js">
        </script>
        <script>
            $(document).ready(function () {
                $(".registration").submit(function (event) {
                    if (validateForm()) {
                        return;
                    }
                    event.preventDefault();
                });
                function showError(elem, message) {
                    elem.after("<span class='error'>" + message + "</span>");
                    elem.addClass("elem-error");
                }

                function validateForm() {
                    var isValid = true;
                    if ($(".firstname").val() === "") {
                        showError($(".firstname"), "Enter first name.");
                        isValid = false;
                    }

                    if ($(".lastname").val() === "") {
                        showError($(".lastname"), "Enter last name.");
                        isValid = false;
                    }

                    if ($(".username").val() === "") {
                        showError($(".username"), "Enter user name.");
                        isValid = false;
                    }

                    if ($(".password").val() === "") {
                        showError($(".password"), "Enter password.");
                        isValid = false;
                    }
                    if ($(".confirm").val() !== $(".password").val()) {
                        showError($(".confirm"), "Passwords not matching.");
                        isValid = false;
                    }

                    if ($(".email").val() === "") {
                        showError($(".email"), "Enter email.");
                        isValid = false;
                    }
                    $("input.elem-error:first").focus();
                    return isValid;
                }
                $("input").change(function () {
                    if ($(this).hasClass('elem-error')) {
                        console.log($(this));
                        $(this).removeClass('elem-error').closest('div.form_item').find('span.error').hide().remove();
                    }
                });
            });
        </script>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed : " . $conn->connect_error);
        }
//        echo "Connection successful";

        $sql = "DROP DATABASE register";
        if ($conn->query($sql) === true) {
            echo 'Database is successfully created';
        } else {
            echo 'Error in creating database' . $conn->error;
        }
//        $conn->close;
        ?>
    </body>
</html>