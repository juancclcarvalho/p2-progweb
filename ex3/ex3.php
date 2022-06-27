<!DOCTYPE html>
<html>

<head></head>

<body>
    <form method="post" action="">
        Nome: <input type="text" name="firstname" value="">
        <br><br>
        Sobrenome: <input type="text" name="lastname" value="">
        <br><br>
        CEP: <input type="text" name="zipcode" value="">
        <br><br>
        Telefone: <input type="text" name="phone" value="">
        <br><br>
        Data de Nascimento: <input type="text" name="birth" value="">
        <br><br>
        <input type="submit" name="submit" value="Salvar">
    </form>

    <a href="../ex4/ex4.php">Listar</a>

    <?php
    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $zipcode = $_POST['zipcode'];
        $phone = $_POST['phone'];
        $birth = $_POST['birth'];

        $data = [$firstname, $lastname, $zipcode, $phone, $birth];

        $filename = '../ex4/data.csv';
        /* error_reporting(E_ALL);
        ini_set('display_errors', true);
        echo 'phpversion: ', phpversion(), "\n";
        echo 'uname: ', php_uname("s r"), "\n"; // name/release of the operating system

        echo $file, file_exists($file) ? ' exists' : ' does not exist', "\n";
        echo $file, is_readable($file) ? ' is readable' : ' is NOT readable', "\n";
        echo $file, is_writable($file) ? ' is writable' : ' is NOT writable', "\n"; */

        $file = fopen($filename, 'a+');
        if (
            !$file
        ) {
            echo 'last error: ';
            var_dump(error_get_last());
        } else {
            fputcsv($file, $data);
        }
    }
    ?>
</body>

</html>