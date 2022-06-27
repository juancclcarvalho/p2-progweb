<!DOCTYPE html>
<html>

<head></head>

<body>
    <table id="csv-data-table">
        <?php

        $filename = './data.csv';

        $f = fopen($filename, 'r');

        if ($f === false) {
            die('Cannot open the file ' . $filename);
        }

        while (($row = fgetcsv($f)) !== false) :
        ?>
            <tr>
                <th><?php echo $row[0]; ?></th>
                <th><?php echo $row[1]; ?></th>
                <th><?php echo $row[2]; ?></th>
                <th><?php echo $row[3]; ?></th>
                <th><?php echo $row[4]; ?></th>
            </tr>
        <?php
        endwhile;
        fclose($f);
        ?>
    </table>
    <a href="../ex3/ex3.php">Adicionar</a>
</body>

</html>