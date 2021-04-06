<body>
    <div class="container">
        <div class="text-center">
            <h1>Quản lí điện thoại</h1>
            <form class="form-inline" action="" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Nhập từ khóa</div>
                        <input type="text" name="key" class="form-control" id="" placeholder="" />
                    </div>
                </div>
                <button type="submit" name="search" class="btn">Tìm kiếm</button>
            </form>
            <div class="text-right">
                <a href="index.php?page=list&method=create" class="btn btn-success">
                    Thêm
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Tên điện thoại</th>
                        <th>Hãng điện thoại</th>
                        <th>Màu sắc</th>
                        <th>Giá tiền</th>
                        <th>Mô tả</th>
                        <th>Ngày đăng</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php  
					$stt = 0;
						foreach ($result as $key => $value) {
							$stt += 1;
					?>
                    <tr>
                        <td><?php echo $value['ten_dienthoai']; ?></td>
                        <td><?php echo $value['ten_hang']; ?></td>
                        <td><?php echo $value['mau_sac']; ?></td>
                        <td><?php echo $value['gia_dienthoai']; ?></td>
                        <td><?php echo $value['mo_ta']; ?></td>
                        <td><?php echo $value['ngay_dang']; ?></td>
                        <td><?php 
                             if ($value['trang_thai']==1){
                                echo "Hiện";
                             }else{
                                echo "Ẩn";
                             }
                             ?></td>
                        <td>
                            <a href="index.php?page=list&method=update&id=<?php echo $value['ma_dienthoai']; ?>"
                                class="btn btn-primary">
                                Sửa
                            </a>
                            <a href="index.php?page=list&method=destroy&id=<?php echo $value['ma_dienthoai']; ?>"
                                onclick="return confirm('Bạn có thực sự muốn xóa?');" class="btn btn-danger">
                                Xóa
                            </a>
                        </td>
                    </tr>
                    <?php
						}
					?>

                </table>
            </div>
        </div>
    </div>