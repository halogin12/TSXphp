<?php 
include_once './model/dienthoai.php';
class dienthoaicontroller extends dienthoai
{   
    private $phone;
    function __construct()
    {
        $this->phone = new dienthoai();
    }
    function dienthoaicontrol()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        }else{
            $method = 'index';
        }
        switch ($method) {
            case 'index':
                $result = $this->phone->index();
                if (isset($_POST['search'])) {
                    $ten = '%'.$_POST['key'].'%';
                    $result = $this->phone->search($ten);
                }
                include_once './view/list.php';
                break;
            case 'destroy':
                if (isset($_GET['id'])) {
                    $id = (int)$_GET['id'];
                    $destroy = $this->phone->destroy($id);
                }
                header('Location: index.php');
                break;
            case 'update':
                if (isset($_GET['id'])) {
                    $id = (int)$_GET['id'];
                    $result = $this->phone->indexdienthoai($id);
                    $result1 = $this->phone->indexhang();
                    if(isset($_POST['update'])){
                        $ten_dienthoai = $_POST['ten_dienthoai'];
                        $ma_hang = $_POST['ma_hang'];
                        $mau_sac = $_POST['mau_sac'];
                        $gia_dienthoai = $_POST['gia_dienthoai'];
                        $mo_ta = $_POST['mo_ta'];
                        $ngay_dang = $_POST['ngay_dang'];
                        $trang_thai = $_POST['trang_thai'];
                        $update = $this->phone->update($id,$ten_dienthoai,$ma_hang,$mau_sac,$gia_dienthoai,$mo_ta,$ngay_dang,$trang_thai);
                        header('Location: index.php');
                        
                    }
                }
                include_once './view/update.php';
                break;
            case 'create':
                $result = $this->phone->indexhang();
                if(isset($_POST['create'])){
                    $ma_dienthoai = $_POST['ma_dienthoai'];
                    $ma_hang = $_POST['ma_hang'];
                    $ten_dienthoai = $_POST['ten_dienthoai'];
                    $mau_sac = $_POST['mau_sac'];
                    $gia_dienthoai = $_POST['gia_dienthoai'];
                    $mo_ta = $_POST['mo_ta'];
                    $ngay_dang = $_POST['ngay_dang'];
                    $trang_thai = $_POST['trang_thai'];
                    if($this->phone->checkma_dienthoai($ma_dienthoai)){
                        $message = "Trùng mã điện thoại";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }else{
                        $create = $this->phone->create($ma_dienthoai,$ten_dienthoai,$ma_hang,$mau_sac,$gia_dienthoai,$mo_ta,$ngay_dang,$trang_thai);
                        header('Location: index.php');
                    }
                    
                }
                include_once './view/create.php';
                break;
            default:
                # code...
                break;
        }
        
    }
    

}

?>