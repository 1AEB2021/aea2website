<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
?>

<script type="text/javascript">
    alert('Anda telah logout!');
    location.href = "index.php";
</script>