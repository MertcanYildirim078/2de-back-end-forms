<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = $email = "";
    $nameErr = $emailErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } 
        
            else {
            $name = test_input($_POST["name"]);
            }
      
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } 
        
            else {
            $email = test_input($_POST["email"]);
            }      }

    //   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = test_input($_POST["name"]);
    //     $email = test_input($_POST["email"]);
    //   }
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      ?>
    <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
        <div id="inputContainerAll">

            <div id="naamInputContainer">
                <input id="naamInput" placeholder="Uw naam" type="text" name="name">
                <span class="error">* <?php echo $nameErr;?></span>
            </div>

            <div id="emailInputContainer">
                <input id="emailInput" placeholder="Uw email" type="text" name="email">
                <span class="error">* <?php echo $emailErr;?></span>
            </div>

            <input type="submit" id="submitButton" value="Submit">

            <?php 
    
                if ($name != "") {
                    echo "<p id = 'name'> Welcome {$name} </p> <br>";
                }

                if ($email != "") {
                echo "<p id = 'email'> Your email address is: {$email}</p> ";
                }

            ?>
            
        </div>
    </form>

<style>

#inputContainerAll {
    display: flex;
    margin-top: 3em;
    flex-direction: column;
    align-items: center;
}

#naamInputContainer {
    margin-bottom: 1em;
}

#submitButton {
    width: 13em;
    margin-top: 3em;
}

#name, #email {
    justify-content: center;
}

.error {
    color: red;
}
</style>

</body>
</html>