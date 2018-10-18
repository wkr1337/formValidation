<?php 

Class Validate {

    public function __constructor(){
        // $this->errors = $errors;
        // $this->instance = new Validate();
    }

    public function start($errors) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST["leerlingForm"])) {
                if(empty($_POST["firstName"])) {array_push($errors, "First name is required!");}
                if(empty($_POST["lastName"])) {array_push($errors, "Last name is required!");}
                if(empty($_POST["emailAddress"])) {array_push($errors, "Email address is required!");}
                if(empty($_POST["birthday"])) {array_push($errors, "Birthday is required!");}
            }
           


            
            if (isset($_POST["leraarForm"])) {
                if(empty($_POST["firstName"])) {array_push($errors, "First name is required!");}
                if(empty($_POST["lastName"])) {array_push($errors, "Last name is required!");}
                if(empty($_POST["emailAddress"])) {array_push($errors, "Email address is required!");}
                if(empty($_POST["birthday"])) {array_push($errors, "Birthday is required!");}
                
            }
        }
        return $errors;
        
    }

    public function showErrors($errors) {
        echo "<div>";
             foreach ($errors as $error) {
               echo "<p><div>" . $error . "</p></div>";
             }
        echo "</div>";
             
    }

    public function showInput($output){
        
        echo "SHOWWWWWWWWWWWWWWW";
        $output."First name = ".$_POST["firstName"];
        $output."Last name = " . $_POST["lastName"];
        $output . "Email = " . $_POST["email"];
        $output . "Birthday = " . $_POST["birthday"];
        return $output;
    }

}




$errors = array();
$output = "";
$validateInstance = new Validate();
$errors = $validateInstance->start($errors);
if (count($errors) != 0) {
    $validateInstance->showErrors($errors);
} else {
    echo $validateInstance->showInput($output);
}

    ?>