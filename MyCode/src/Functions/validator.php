<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    ?>
    <script>
        window.location.replace('../Functions/logout.php');
    </script>
    <?php
}