<?php
session_start();

session_unset();
session_destroy();
?>
<script>
    window.location.replace("../Telas/ViewLogin.php");
</script>
