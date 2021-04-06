<?php
ob_start();
include_once './layout/header.php';
if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 'list';
}
switch ($page) {
  case 'list':
    include_once 'controller/dienthoaicontroller.php';
    $dienthoai = new dienthoaicontroller();
    $dienthoai->dienthoaicontrol();
    break;
  default:
    # code...
    break;
}
include_once './layout/footer.php'
?>