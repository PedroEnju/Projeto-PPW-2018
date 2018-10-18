<?php
include_once '../Include/head.inc.php';
?>
</head>
<body class="bg-dark text-light text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner progress bg-dark" size="100%">
                <div id="pb" class="progress-bar  <?php echo $pb_c; ?>" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>  
            </div>
        </header>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Informação sobre o <b class="<?php echo $msg_c; ?>"><?php echo $title; ?></b> </h1>
            <h3 class="lead <?php echo $msg_c; ?>"><?php echo $msg; ?></h3>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <label class="text-light">A página reiniciará em poucos segundos</label>
            </div>
        </footer>
    </div>
</body> 
<?php
include_once '../Include/scripts.inc.php';
?> 
<script>
    $(function () {
        var x = 0;
        var y = '';
        setInterval(function () {
            y = x + "%";
            $("#pb").css("width", y);
            $("#pb").attr("aria-valuenow", x);
            x++;
        }, 100);
    });
</script>
</html>
