<?php
require("./components/title.php");
require("./components/calendar.php");
?>
<!Doctype>
<html lang="pt-BR">

<head>
    <title>Calendário de estudo PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: black;
        }

        h1 {
            text-align: center;
            margin: 1%;
            color: white
        }
    </style>
</head>

<body>

    <?php
    title();
    
    ?>
    <div style='height: 90vh; display: flex; flex-wrap: wrap; justify-content: center'>
        <?php
        allCalendario();
        ?>
    </div>
</body>

</html>