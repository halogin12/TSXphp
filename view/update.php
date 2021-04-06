<body>
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit phone</h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.php">List phone</a>
                    </li>
                    <li class="active"><i class="fa fa-edit"></i> Edit phone</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <form role="form" action="" method="POST">
                    <?php  
						foreach ($result as $key => $value) {
					?>

                    <!-- Tên điện thoại -->
                    <div class="form-group">
                        <label>Tên điện thoại</label>

                        <input class="form-control" name="ten_dienthoai" value="<?php echo $value['ten_dienthoai']; ?>">

                    </div>

                    <!-- Tên hãng -->
                    <div class="form-group">
                        <label>Tên hãng</label>
                        <select class="form-control" name="ma_hang">

                            <?php 
						    foreach ($result1 as $key1 => $value1) {
					    ?>

                            <option value="<?php echo $value1['ma_hang']; ?>"><?php echo $value1['ten_hang']; ?>
                            </option>
                            <?php
						    }
					    ?>
                        </select>
                    </div>

                    <!-- Màu sắc -->
                    <div class="form-group">
                        <label>Màu sắc</label>
                        <input class="form-control" name="mau_sac" value="<?php echo $value['mau_sac']; ?>">
                    </div>

                    <!-- Giá -->
                    <div class="form-group">
                        <label>Giá tiền</label>
                        <input type="number" class="form-control" name="gia_dienthoai"
                            value="<?php echo $value['gia_dienthoai']; ?>">
                    </div>

                    <!-- Mô tả -->
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="mo_ta" rows="3"><?php echo $value['mo_ta']; ?></textarea>
                    </div>

                    <!-- Ngày đăng -->
                    <div class="form-group">
                        <label>Ngày đăng</label>
                        <input type="datetime-local" class="form-control" name="ngay_dang"
                            value="<?php echo $value['ngay_dang']; ?>">
                    </div>

                    <!-- Trạng thái -->
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control" name="trang_thai">
                            <option value="1">Hiện</option>
                            <option value="0">Ẩn</option>


                        </select>
                    </div>

                    <!--                         
                    <div class="form-group">
                        <label>Text Input with Placeholder</label>
                        <input class="form-control" placeholder="Enter text">
                    </div>

                    <div class="form-group">
                        <label>Static Control</label>
                    </div>

                    <div class="form-group">
                        <label>File input</label>
                        <input type="file">
                    </div>



                    <div class="form-group">
                        <label>Checkboxes</label>
                        <div class="checkbox">
                            <label> <input type="checkbox" value="">Checkbox 1 </label>
                        </div>
                        <div class="checkbox">
                            <label> <input type="checkbox" value="">Checkbox 2 </label>
                        </div>
                        <div class="checkbox">
                            <label> <input type="checkbox" value="">Checkbox 3 </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Inline Checkboxes</label>
                        <label class="checkbox-inline"> <input type="checkbox">1 </label>
                        <label class="checkbox-inline"> <input type="checkbox">2 </label>
                        <label class="checkbox-inline"> <input type="checkbox">3 </label>
                    </div>



                    <div class="form-group">
                        <label>Inline Radio Buttons</label>
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1"
                                checked>1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                        </label>
                    </div>



                    <div class="form-group">
                        <label>Multiple Selects</label>
                        <select multiple class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div> -->
                    <?php
						}
                
					?>
                    <button type="submit" name="update" class="btn btn-default">Submit Button</button>
                    <button type="reset" name="reset" class="btn btn-default">Reset Button</button>
                </form>
            </div>
        </div>