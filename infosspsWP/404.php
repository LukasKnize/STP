<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <style>
        div{
            display: flex;
        }
        h1{
            color: #24783c;
            font-size: 3em;
        }

        h2{
            font-size: 2em;
        }
    </style>
</head>
<body>
    <div>
        <h1>404...</h1>
        <h2>Tato stránka neexistuje</h2> 
    </div>
    <h2>Zdá se že stránka <span id="url"></span> neexistuje, pokud si myslíte že tato stránka existovat má, kontaktujte nás na emailu xyz@example.com</h2>

<?php
    echo "<script type=\"text/javascript\">
    document.getElementById('url').innerText = document.URL;
    </script>"
?>

</body>
</html>