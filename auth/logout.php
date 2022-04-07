<?php

require_once "../_koneksi/koneksi.php";

session_destroy();

// session_unset($_SESSION['user']['nama_user']);
// session_unset($_SESSION['user']['username']);
// session_unset($_SESSION['user']['id_user']);
// session_unset($_SESSION['user']['level']);


echo "
            <script>
                window.location='" . base_url('auth') .  "';
            </script>
        ";
