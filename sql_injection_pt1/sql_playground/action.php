<?php include 'connect.php' ?>
<?php
    global $connection; 

    // validate result
    function validate($result) {
        if (!$result) {
            die("Query Failed"); 
        } 
    }

    // SQL test
    if (isset($_POST['sql_submit'])) {
        $username = $_POST['sql_username']; 
        $password = $_POST['sql_password'];  

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";  

        $result = mysqli_query($connection, $query);  
        validate($result);  
        
        if (mysqli_num_rows($result) == 0) {
            die("Incorrect Login Details :("); 
        }

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <pre>
            <?php
            print_r($row); 
            ?>
            </pre>
            <?php
            echo "<br>";   
        }
    }
?>   
