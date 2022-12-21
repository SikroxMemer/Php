<html>
    <head>
        <title>Form Detector</title>
        <link rel="stylesheet" href="style.css">
        <?php 
            error_reporting(0);
        ?>
    </head>
    <body>
        <div class="Main_Form">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <label for="username">Name:</label> <input type="text" name="User" id="username"><br><br>
                <label for="password">Passowrd :</label> <input type="password" name="Password" id="password"><br><br>
                <label for="email">Email :</label> <input type="email" name="Mail" id="email"><br><br>
                <input type="submit"> <input type="reset">
            </form>
        </div>
    
<?php $Username = $_POST['User'];$Password = $_POST['Password'];$Email = $_POST['Mail']?>
<?php
class Main {
    //CALLS
    public $User;
    public $Password;
    public $Email;
    //CONSTRUCTOR
    function __construct($User,$Password,$Email) {
        $this->User = $User;
        $this->Password = $Password;
        $this->Email = $Email;
    }
    //ECHO INFORMATIONS:
    function PRINT_OUT() {
        echo $this->User;
        echo $this->Password;
        echo $this->Email;
    }
};
$env = new Main($Username,$Password,$Email);
if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (empty($Username) || empty($Password) || empty($Email)) {
        echo "The Inputes Are Empty";
    } else {
        $env->PRINT_OUT();
    }
};?>
<?php

?>
    </body>
</html>

