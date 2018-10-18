<footer class="mastfoot mt-auto">
    <div class="inner">
        <span class="text-secondary">
            <?php
            date_default_timezone_set("America/Sao_Paulo");
            $data = date("d/m/Y");
            $hora = date("H:i:s");
            echo "Acesso em: $data ás $hora";
            ?>
            <br>
            Pedro Enju &copy; 2018
        </span>
    </div>
</footer>
