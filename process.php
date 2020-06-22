
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COMP1006 - Week 4 - Let's Connect </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Quicksand&display=swap" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <header>
      <h1> TuneShare - Share Your Fave Tunes & Join The Community </h1>
    </header>
    <main>
    <?php

    //create variables to store form data
    $first_name = filter_input(INPUT_POST, 'fname');
    $last_name = filter_input(INPUT_POST, 'lname');
    $genre = filter_input(INPUT_POST, 'genre');
    $location = filter_input(INPUT_POST, 'location');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $fav_song = filter_input(INPUT_POST, 'favsong');

    //set up a flag variable

    $ok = true;

    //validate
    // first name and last name not empty

    if (empty($first_name) || empty($last_name)) {
        echo "<p class='error'>Please provide both first and last name! </p>";
        $ok = false;
    }

    //genre not empty
    if (empty($genre)) {
        echo "<p class='error'>Please provide your favourite genre!</p>";
        $ok = false;
    }

    //location not empty
    if (empty($location)) {
        echo "<p class='error'>Please tell us where you are located!!</p>";
        $ok = false;
    }

    //fav song not empty
    if (empty($fav_song)) {
        echo "<p class='error'>Please tell us what you are listening to!</p>";
        $ok = false;
    }

    //email not empty and proper format
    if (empty($email) || $email === false) {
        echo "<p class='error'>Please include your email in the proper format!</p>";
        $ok = false;
    }

    //age not empty and proper format
    if (empty($age) || $age === false) {
        echo "<p class='error'>Please tell us how old you are! Numbers only!</p>";
        $ok = false;
    }

    //if form validates, try to connect to database and add info

    if ($ok === true) {
        try {
            //connect to the database
            require_once('connect.php');
            // set up SQL command to insert data into table
            $sql = "INSERT INTO songs (first_name, last_name, genre, location, email, age, favsong)
                    VALUES (:firstname, :lastname, :genre, :location, :email, :age, :favsong);";

            // call the prepare method of the PDO object, return PDOstatement Object
            $statement = $db->prepare($sql);

            // bind parameters
            $statement->bindParam(':firstname', $first_name);
            $statement->bindParam(':lastname', $last_name);
            $statement->bindParam(':genre', $genre);
            $statement->bindParam(':location', $location);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':age', $age);
            $statement->bindParam(':favsong', $fav_song);

            // execute the query
            $statement->execute();

            // echo a success message

            echo "<p> Song added! Thanks for sharing! </p>";

            // close the db connection
            $statement->closeCursor();
        } catch(PDOException $e) {
            echo "<p> Sorry! Something has gone wrong on our end! An email has been sent to out admin team </p>";
            $error_message = $e->getMessage();
            mail("jessicagilfillan@gmail.com", "TuneShareError", "An Error has occured " + $error_message);
            echo $error_message;
        }
    }
?>
    <a href="index.php" class="error-btn"> Back to Form </a>
    </main>
    <footer>
      <p> &copy; 2020 TuneShare </p>
    </footer>
   </div><!--end container-->
  </body>
</html>
