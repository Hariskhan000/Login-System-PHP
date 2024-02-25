<?php

session_start();
session_unset();
session_destroy();
echo "<script>
alert('Successfully logout');
window.location.href='login.php';
</script>";


?>