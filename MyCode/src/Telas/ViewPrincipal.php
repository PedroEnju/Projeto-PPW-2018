<?php
include_once '../Functions/validator.php';
include_once '../../config/config.dba.php';
include_once '../Include/url.inc.php';

$title = "Tela Principal";
include_once '../Include/head.inc.php';
?>
</head>
<body class="bg-light">
    <?php
    include_once '../Include/menu-var.inc.php';
    $active['HOME'] = ' text-primary';
    include_once '../Include/menu.inc.php';
    ?>
</header>
<main style="margin-top: 7%;">

</main>
</body> 
<?php
include_once '../Include/scripts.inc.php';
?>  
<script src="<?php echo $URL['JS'] ?>default.js"></script>
</html>
<?php
mysqli_close($conn);
