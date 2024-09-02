<?php
session_start();

// Hancurkan session
session_destroy();

// Kirimkan HTML dan script
echo "<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Logout</title>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Logout Berhasil',
            text: 'Terima Kasih!',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../index.php';
            }
        });
    </script>
</body>
</html>";
?>

