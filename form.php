<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <form action="<?php $_PHP_SELF ?>" method="POST" style="width:50%;">
            <h1>Application Name: AAST_BIS Class Registeration</h1>


            <div class="mb-3">
                <div style="color:red;">*Required Fields</div>
                    <label for="name" class="form-label">Name</label>
                    <span style="color:red;">*</span>
                    <div style="display:flex;">
                    <input type="text" class="form-control" id="name" name="username">
                </div>
                        <?php
                            if (isset($_REQUEST['submit'])) {
                                    $name = $_REQUEST["username"];
                                if (empty($name)) {
                                    echo "<span style='color:red;'>Name is required</span>";
                                }
                                else {
                                    $name = $_REQUEST["username"];
                                }
                            }
                        ?>
        
            </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <span style="color:red;">*</span>
                    <div style="display:flex;">
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                        <?php
                            if (isset($_REQUEST['submit'])) {
                                $email = $_REQUEST["email"];
                                if (empty($email)) {
                                    echo "<span style='color:red;'>Email is required</span>";
                                }
                                else {
                                    $email = $_REQUEST["email"];
                                }
                            }
                        ?>
                
                </div>
                <div class="mb-3">
                    <label for="group" class="form-label">Group</label>
                    <input type="number" class="form-control" name="group" id="group" name="group">
                </div>
            <?php
                if (isset($_REQUEST['submit'])) {
                    $group = $_REQUEST["group"];
                    if (empty($group)) {
                        echo "<span style='color:red;'>Group is required</span>";
                    }
                    else {
                        $group = $_REQUEST["group"];
                    }
                }
            ?>
            <div class="mb-3">
                    <label for="class-details">Class Details</label>
                    <textarea class="form-control" name="class-details" id="class-details" style="height:100px"></textarea>
            </div>
            <?php
                if (isset($_REQUEST['submit'])) {
                    $classDetails = $_REQUEST["class-details"];
                    if (empty($classDetails)) {
                        echo "<span style='color:red;'>Class Details is required</span>";
                    }
                    else {
                        $classDetails = $_REQUEST["class-details"];
                    }
                }
            ?>
            <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="Male" checked>
                    <label class="form-check-label" for="exampleRadios1">Male</label>
            </div>
            <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="exampleRadios2" value="Female">
                    <label class="form-check-label" for="exampleRadios2">Female</label>
            </div>
            <?php
                    if(isset($_REQUEST['submit'])) {
                        $radio = $_REQUEST["radio"];
                        if(empty($radio)){
                            echo "Radio is required";
                        }
                        else {
                            $radio = $_REQUEST["radio"];
                        }
                    }
            ?>
            <div class="form-check">
                <label for="courses">Select Courses</label>
                <select name="courses[]" id="courses" multiple>
                        <option value="php">PHP</option>
                        <option value="javascript">JavaScript</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="mysql">MySQL</option>
                </select>
            </div>
            <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Agree</label>
                    <span style="color:red;">*</span>
            </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary ">
    </form>
    </div>
<!-- PHP Code -->
    <div class="container mt-5">
    <?php
    if(isset($_REQUEST['submit'])) {
        // print_r($_POST);
        $name = $_REQUEST["username"];
        $email = $_REQUEST["email"];
        $group = $_REQUEST["group"];
        $classDetails = $_REQUEST["class-details"];
        if(!empty($name) || !empty($email) || !empty($group) || !empty($classDetails) || !empty($_REQUEST["radio"])){
            $radio =$_REQUEST['radio'];
        echo "Name :$name </br> . Email : $email </br> . Group : $group </br> . Class Details : $classDetails </br> . Gender : $radio </br>  ";
        if (isset($_REQUEST["courses"])) {
            echo "Selected Courses:";
            foreach ($_REQUEST["courses"] as $option) {
            echo "$option" . " ";
            }
        } else {
                echo 'No Courses are selected.';
        }
            }
    }

    ?>
</div>
</body>
</html>