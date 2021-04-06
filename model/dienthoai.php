<?php 
include_once './connect/config.php';
class dienthoai extends Connect
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $sql = "SELECT dienthoai.ma_dienthoai,hang_dienthoai.ten_hang, dienthoai.ten_dienthoai, dienthoai.mau_sac, dienthoai.gia_dienthoai, dienthoai.mo_ta, dienthoai.ngay_dang, dienthoai.trang_thai FROM dienthoai, hang_dienthoai WHERE dienthoai.ma_hang= hang_dienthoai.ma_hang";
        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    function indexdienthoai($id)
    {
        $sql = "SELECT dienthoai.ma_dienthoai,dienthoai.ma_hang,hang_dienthoai.ten_hang, dienthoai.ten_dienthoai, dienthoai.mau_sac, dienthoai.gia_dienthoai, dienthoai.mo_ta, dienthoai.ngay_dang, dienthoai.trang_thai FROM dienthoai, hang_dienthoai WHERE dienthoai.ma_hang= hang_dienthoai.ma_hang AND dienthoai.ma_dienthoai = $id";
        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    function checkma_dienthoai($ma_dienthoai)
    {
        $sql = "SELECT ma_dienthoai FROM dienthoai WHERE ma_dienthoai=:ma_dienthoai";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':ma_dienthoai', $ma_dienthoai);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    function indexhang()
    {
        $sql = "SELECT ma_hang, ten_hang FROM hang_dienthoai ";
        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    function create($ma_dienthoai,$ten_dienthoai,$ma_hang,$mau_sac,$gia_dienthoai,$mo_ta,$ngay_dang,$trang_thai)
    {
        $sql = "INSERT INTO dienthoai(ma_dienthoai, ma_hang, ten_dienthoai, mau_sac, gia_dienthoai,mo_ta, ngay_dang, trang_thai) VALUES (:ma_dienthoai,:ma_hang,:ten_dienthoai,:mau_sac,:gia_dienthoai,:mo_ta,:ngay_dang,:trang_thai)";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':ma_dienthoai', $ma_dienthoai);
        $pre->bindParam(':ma_hang', $ma_hang);
        $pre->bindParam(':ten_dienthoai', $ten_dienthoai);
        $pre->bindParam(':mau_sac', $mau_sac);
        $pre->bindParam(':gia_dienthoai', $gia_dienthoai);
        $pre->bindParam(':mo_ta', $mo_ta);
        $pre->bindParam(':ngay_dang', $ngay_dang);
        $pre->bindParam(':trang_thai', $trang_thai);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    function update($id,$ma_hang,$ten_dienthoai,$mau_sac,$gia_dienthoai,$mo_ta,$ngay_dang,$trang_thai)
    {
        $sql = "UPDATE dienthoai SET ma_hang=:ma_hang,ten_dienthoai=:ten_dienthoai,mau_sac=:mau_sac,gia_dienthoai=:gia_dienthoai,mo_ta=:mo_ta,ngay_dang=:ngay_dang,trang_thai=:trang_thai WHERE ma_dienthoai= $id";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':ma_hang', $ma_hang);
        $pre->bindParam(':ten_dienthoai', $ten_dienthoai);
        $pre->bindParam(':mau_sac', $mau_sac);
        $pre->bindParam(':gia_dienthoai', $gia_dienthoai);
        $pre->bindParam(':mo_ta', $mo_ta);
        $pre->bindParam(':ngay_dang', $ngay_dang);
        $pre->bindParam(':trang_thai', $trang_thai);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    function destroy($id)
    {
        $sql = "DELETE FROM dienthoai WHERE ma_dienthoai = $id";
        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    function adddienthoai()
    {
        $sql = "INSERT INTO dienthoai(ma_dienthoai, ma_hang, ten_dienthoai, mau_sac, gia_dienthoai,mo_ta, ngay_dang, trang_thai) VALUES ('','','','','','','',)";
    }
    function addhang()
    {
        $sql = "INSERT INTO hang_dienthoai(ma_hang, ten_hang) VALUES ('','')";
    }
    function search($ten)
    {
        $sql = "SELECT dienthoai.ma_dienthoai,hang_dienthoai.ten_hang, dienthoai.ten_dienthoai, dienthoai.mau_sac, dienthoai.gia_dienthoai, dienthoai.mo_ta, dienthoai.ngay_dang, dienthoai.trang_thai FROM dienthoai, hang_dienthoai WHERE dienthoai.ma_hang= hang_dienthoai.ma_hang AND dienthoai.ten_dienthoai LIKE :tendt";
        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':tendt', $ten);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>