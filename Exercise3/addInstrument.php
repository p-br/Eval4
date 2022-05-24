
<?php

$errors = array();
$instruments = array();

if (isset($_POST['submitBtn'])) {
    $name = trim($_POST['name']);
    // I cannot seem to get "type" inserted into DB
    $type = $_POST['type'];
    $price = $_POST['price'];

    if (empty($name))
        $errors['name'] = 'Name is mandatory !';

    if (!is_string($name) || is_numeric($name))
        $errors['name'] = 'Name must be a string !';

    if (empty($price))
        $errors['price'] = 'Price is mandatory !';

    if (!is_numeric($price))
        $errors['price'] = 'Price must be numeric !';

    if (!empty($errors)) {
        foreach ($errors as $errType => $errValue) {
            echo '<p style="color:red">' . $errType . ' : ' . $errValue . '</p>';
        }
    } else {


    //     // DB connection and query (mysql)
    //     $insert = mysqli_query(mysqli_connect('localhost', 'root', '', 'music_db'), "INSERT INTO instruments(name, type, price) VALUES('$name', '$type', '$price')");

    //     if ($insert)
    //         echo '<p style="color:green">Successfully inserted in the DB!</p>';
    //     else
    //         echo '<p style="color:red">Problem inserting into the DB.</p>';
    //     // close connection    
    //     mysqli_close($conn);
    // }


        // DB connection and query (PDO)
        $dbconnect = new PDO('mysql:host=localhost;dbname=music_db', 'root', '');

        // If connection successful
        if ($dbconnect) {

            // prepare
            $prepare = $dbconnect->prepare("INSERT INTO instruments(name, type, price) VALUES ('$name', '$type', '$price')");
            $instruments = $prepare->fetchAll(PDO::FETCH_ASSOC);
            // execute
            $prepare->execute();
            echo '<p style="color:green">Successfully inserted in the DB!</p>';
        } else {
            echo '<p style="color:red">Problem inserting into the DB.</p>';
        }
        // close connection
        $dbconnect = null;
    }
}

?>