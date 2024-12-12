<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q1</title>
    </head>
    <body>
        <?php
            $name = "Akmal Hakimi Bin Adnan";
            $matrix_no = "CI230065";
            $course = "BIW";
            $year_of_study = "2";
            $address ="No 135 Jalan Sejahtera Jaya 5 Taman Sejahtera Jaya 09600 Lunas Kedah";
        ?>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo "$name"; ?></td>
            <tr>
                <td>Matrix Number</td>
                <td><?php echo "$matrix_no"; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo "$course"; ?></td>
            </tr>
            <tr>
                <td>Year Of Study</td>
                <td><?php echo "$year_of_study"; ?></td>
            </tr>
                <td>Address</td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>
    </body>
</html>