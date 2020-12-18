<?php
$conn = mysqli_connect('localhost', 'root', '', 'finabil');

if (!$conn){
    echo "<script>
            alert('Failed Connect into Database');
            </script>";
}
?>