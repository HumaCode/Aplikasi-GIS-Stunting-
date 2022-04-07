<?php

require_once "_header.php";

if (isset($_SESSION['id_user'])) {
    echo "
        <script>
            window.location ='" . base_url('pemetaan') . "';
        </script>
        ";
} else {
    echo "
        <script>
            window.location = '" . base_url('auth') . "';
        </script>
    ";
}