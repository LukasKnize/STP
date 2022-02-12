<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
</head>
<body>
    <h1>404... Tato stránka neexistuje</h1>
    <h2>Zdá se že stránka <span id="url"></span> neexistuje, pokud si myslíte že tato stránka existovat má, kontaktujte nás na emailu xyz@example.com</h2>

<?php
    echo "<script type=\"text/javascript\">
    document.getElementById('url').innerText = document.URL;
    </script>"
?>

</body>
</html>