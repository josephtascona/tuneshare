<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COMP1006 - Week 5 - Create! </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Quicksand&display=swap" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <link href="main.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <header>
      <h1> TuneShare</h1>
      <h2>Share Your Fave Tunes & Join The Community </h2>
    </header>
    <main>

      <p> Looking for new songs to add to your work at home playlist? Join our community and share with other music lovers! </p>
      <form action="process.php" method="post">
        <label for="fname"> Your First Name  </label>
        <input type="text" name="fname" class="form-control" id="fname">
        <label for="lname"> Your Last Name  </label>
        <input type="text" name="lname" class="form-control" id="lname">
        <label for="genre"> Your Favourite Genre  </label>
        <input type="text" name="genre" class="form-control" id="genre">
        <label for="location"> Your Location </label>
        <input type="text" name="location" class="form-control" id="location">
        <label for="location"> Your Age </label>
        <input type="number" name="age" class="form-control" id="age">
        <label for="email"> Your Email </label>
        <input type="email" name="email" class="form-control" id="email">
        <label for="favsong"> What are you listening to on repeat?  </label>
        <input type="text" name="favsong" class="form-control" id="favsong">
        <input type="submit" name="submit" value="Send & Share" class="btn">
      </form>
    </main>
    <footer>
      <p> &copy; 2020 TuneShare </p>
    </footer>
   </div><!--end container-->
  </body>
</html>
