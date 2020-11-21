<?php
   include "../app/moviesController.php";

   $moviesController = new MoviesController();
   $movies = $moviesController->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
<h1>
        Categories
    </h1>
    <table>
        <tbody>
            <?php
            foreach ($movies as $movie) {
                echo "<tr>
                   <td>
                       " . $movie['id'] . "
                   </td>
                   <td>
                       " . $movie['name'] . "
                   </td>
                   <td>
                       " . $movie['description'] . "
                   </td>
                 </tr>";
            }

            ?>
        </tbody>
    </table>
    <br>
    <form action="../app/moviesController.php" method="POST">
        <fieldset>

            <legend>
                Add new Movie
            </legend>

            <label>
                Name
            </label>
            <input type="text" name="name" placeholder="terror" required="">
            <br>

            <label>
                Description
            </label>
            <textarea placeholder="write here" name="description" rows="5" required=""></textarea>
            <br>

            <label>
                Status
            </label>
            <select name="status">
                <option> active </option>
                <option> inactive </option>
            </select>
            <br>

            <button type="submit">Save Movie</button>
            <input type="hidden" name="action" value="store">

        </fieldset>
    </form>
</body>
</html>