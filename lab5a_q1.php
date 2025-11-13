<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = " MUHAMMAD SOLIHIN BIN ABDUL RAHIM";
        $matric = " CI240011";
        $course = " BIS";
        $yearsStudy = " 3 years";
        $address = " 84000 Muar,Johor";
    ?>
    
    //table code
    <table>
        <tr>
            <td>Name:</td>
            <td><?php echo "$name"; ?></td>  
        </tr>
        <tr>
            <td>Matric number:</td>
            <td><?php echo "$matric"; ?></td>
        </tr>
        <tr>
            <td>Course:</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Years of Study:</td>
            <td><?php echo "$yearsStudy"; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
    
</body>
</html>
