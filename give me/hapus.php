<?php
require 'functions.php';
$id = $_GET['id'];
if ($call->hapus($id) > 0) {
    echo "
            <script>
                alert('Data berhasil dihapus');
                window.location.href = 'beranda.php';
            </script>
        ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus');
            window.location.href = 'beranda.php';
        </script>
    ";
}
