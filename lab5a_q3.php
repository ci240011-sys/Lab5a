<!DOCTYPE html>
<html>
    <body>
        <?php 
        function calculateArea($width,$height){
            return $width * $height;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $width = $_POST['width'];
            $height = $_POST['height'];
            $area = calculateArea($width, $height);

            echo"The area of a rectangle with a width of $width and height of $height is $area<br><br>";
        }
        ?>  
        <form method="post">
            Width: <input type="number" name="width" value="4"><br>
            Height: <input type="number" name="height" value="2"><br>
            <input type="submit" value="Calculate Area">
        </form>
    </body>
</html>
