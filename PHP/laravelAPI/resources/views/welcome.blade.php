<script>
    
    fetch(<?= "http://" . $_SERVER['HTTP_HOST'] . "/api/json/"?>).then(async (res) => console.log(await res.json()))
</script>
<?php
echo  $_SERVER['HTTP_HOST'] . "/api/json/";
echo "
<h3 style='padding: 2%;text-align:center'>API Routes:<br><br>
/api/hello_world<br>
/api/json<br>
/api/print_id/{id}<br><br>
WEB Routes:<br><br>
/hello_world<br></h3>
";
