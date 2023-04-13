<?php
     require_once 'connectdb.php';
if(isset($_GET['delete'])){
    $id = mysqli_real_escape_string($conn, $_GET['delete']);
    require_once 'connectdb.php';
    $xoa_sql="DELETE FROM accounts WHERE id_account='$id'";
   mysqli_query($conn, $xoa_sql);
    // echo "xoa thanh công";
    // trở lại trang show dữ liệu
    
    header("location:../pages/admin/customer.php");
    }
?>