<?php 

require_once "../_header.php";


$id = @$_GET['id'];

// echo $id;
mysqli_query($con, "DELETE FROM tb_user WHERE id_user = '$id'") or die(mysqli_error($con));

echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Berhasil Dihapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location='" . base_url('user') .  "';
                }
            })
        </script>
    ";