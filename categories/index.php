<?php
include "../app/categoryController.php";
$categoryController = new CategoryController();

/* $categoryController->get(); */

$categories = $categoryController->get();
/* echo json_encode($categories); */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>

<body>
    <h1>
        Categories
    </h1>
    <table>
        <tbody>
            <?php
            foreach ($categories as $category) {
                echo "<tr>
                   <td>
                       " . $category['id'] . "
                   </td>
                   <td>
                       " . $category['name'] . "
                   </td>
                   <td>
                       " . $category['description'] . "
                   </td>
                 </tr>";
            }

            ?>
        </tbody>
    </table>
    <br>
    <form action="../app/categoryController.php" method="POST">
        <fieldset>

            <legend>
                Add new Category
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

            <button type="submit">Save Category</button>
            <input type="hidden" name="action" value="store">

        </fieldset>
    </form>
</body>

</html>