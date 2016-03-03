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
                border: 3px solid red;
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
<<<<<<< HEAD
        <script src="jquery-1.12.0.min.js">
=======
        <script src="../jquery.min.js">
>>>>>>> be860f6af885d3037d8d473c9c648ee90cc69236
        </script>
        <script>
            $(document).ready(function() {
                $(".registration").submit(function(event) {
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
                $("input").change(function() {
                    if ($(this).hasClass('elem-error')) {
                        console.log($(this));
                        $(this).removeClass('elem-error').closest('div.form_item').find('span.error').hide().remove();
                    }
                });
            });
        </script>
        <?php
<<<<<<< HEAD
        if (isset($_POST["submit"])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "project";
            $conn = new mysqli($servername, $username, $password, $dbname);

//        established a connection
=======
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registration";
        $conn = new mysqli($servername, $username, $password,$dbname);
        
//        established a connection
        
>>>>>>> be860f6af885d3037d8d473c9c648ee90cc69236
//        if ($conn->connect_error) {
//            die("Connection failed : " . $conn->connect_error);
//        }
//        echo "Connection successful";
<<<<<<< HEAD
//        created a database named project
//        
//        $sql = "CREATE DATABASE project";
=======

        
//        created a database named registration
//        
//        $sql = "CREATE DATABASE registration";
>>>>>>> be860f6af885d3037d8d473c9c648ee90cc69236
//        if ($conn->query($sql) === true) {
//            echo 'Database is successfully created';
//        } else {
//            echo 'Error in creating database' . $conn->error;
//        }
<<<<<<< HEAD
//        created a table named registration
//        $sql = "CREATE TABLE registration(
//                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//                firstname VARCHAR(30) NOT NULL,
//                lastname VARCHAR(30) NOT NULL,
//                username VARCHAR(30) NOT NULL,
//                password VARCHAR(30) NOT NULL,
//                confirm VARCHAR(30) NOT NULL,
//                email VARCHAR(50)NOT NULL
//                )";
//        if ($conn->query($sql) == true) {
//            echo 'table is created';
//        } else {
//            echo 'Error in creating table' . $conn->error;
//        }
//        insert data into table named registration
//        $sql="INSERT INTO registration (firstname, lastname, username, password, confirm, email)
//                VALUES
//                ('deepti','pathak','bhawna9','hello','hello','bhawna@gmail.com')";
//insert data from page to table named registration

            $sql = "INSERT INTO registration (firstname, lastname, username, password, confirm, email)       
            VALUES ('" . $_POST["firstname"] . "','" . $_POST["lastname"] . "','" . $_POST["username"] . "','" . $_POST["password"] . "','" . $_POST["confirm"] . "','" . $_POST["email"] . "')";

            if ($conn->query($sql) === TRUE) {
                echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
            } else {
                echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
            }
        }

//          $conn->close;
=======

//        created a table named information
        
        $sql = "CREATE TABLE information(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                username VARCHAR(30) NOT NULL,
                password VARCHAR(30) NOT NULL,
                confirm VARCHAR(30) NOT NULL,
                email VARCHAR(50)NOT NULL
                )";
        if ($conn->query($sql) == true) {
            echo 'table is created';
        } else {
            echo 'Error in creating table' . $conn->error;
        }
        
        
//        $conn->close;
>>>>>>> be860f6af885d3037d8d473c9c648ee90cc69236
        ?>
    </body>
</html>
