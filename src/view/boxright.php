<div class="row1 mb ">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row1 mb10 ">
                Xin Chào<br>
                <?= $user ?>
            </div>
            <div class="row1 mb10 ">
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>

                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php
                if ($role == 1) {
                ?>
                    <li>
                        <a href="admin/index.php">Đăng nhập Admin</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>
        <?php
        } else {


        ?>
            <form action="index.php?act=dangnhap" method="POST">
                <div class="row1 mb10 ">
                    Tên đăng nhập<br>
                    <input type="text" name="user" id="">
                </div>
                <div class="row1 mb10 ">
                    Mật khẩu<br>
                    <input type="password" name="pass" id="">
                </div>
                <div class="row1 mb10">
                    <input type="checkbox" name="" id="">Ghi nhớ tài khoản?<br>
                </div>
                <div class="row1 mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                </div>

            </form>
            <div class="tk">
            <li><a href="index.php?act=quenmatkhau">Quên mật khẩu</a></li>
            <li>
                <a href="index.php?act=dangky">Đăng kí thành viên</a>
            </li>
            </div>
        <?php } ?>
    </div>
</div>
<div class="row1 mb ">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
            }
            ?>
            <!-- <li><a href="#">Đồng hồ</a></li>
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">Điện thoại</a></li>
                    <li><a href="#">Ba lô</a></li>
                    <li><a href="#">Ba lô</a></li>
                    <li><a href="#">Ba lô</a></li> -->
        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input class="mt-2" type="submit" name="tiemkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
<div class="row1 ">
    <div class="boxtitle">TOP 5 YÊU THÍCH</div>
    <div class="boxcontent row1">

        <?php
        // foreach ($dstop5 as $sp) {
        //     extract($sp);
        //     $linksp = "index.php?act=sanphamct&idsp=" . $id1;
        //     $img = $img_path . $img;
        //     echo '<div class="row1 mb10 top10">
        //             <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
        //             <a href="' . $linksp . '" class="text-center">' . $name1 . '</a>
        //             </div>';
        // }
        ?>
        <!-- <?php
        $linksp = "index.php?act=sanphamct&idsp=" . $id1;
        ?> -->
        <div class="row1 mb10 top10">
            <a href="index.php?act=sanphamct&idsp=15"><img src="view/img/ip14pro.webp" alt=""></a>
            <a href="index.php?act=sanphamct&idsp=15" class="text-center">iPhone 14 Pro Max 128GB</a>
        </div>
        <div class="row1 mb10 top10">
            <a href="index.php?act=sanphamct&idsp=14"><img src="view/img/ip13pro.webp" alt=""></a>
            <a href="index.php?act=sanphamct&idsp=14" class="text-center">iPhone 13 Pro 256GB</a>
        </div>
        <div class="row1 mb10 top10">
            <a href="index.php?act=sanphamct&idsp=12"><img src="view/img/laptopnitro5.webp" alt=""></a>
            <a href="index.php?act=sanphamct&idsp=12" class="text-center">Laptop ACER Nitro 5 Eagle</a>
        </div>
        <div class="row1 mb10 top10">
            <a href="index.php?act=sanphamct&idsp=10"><img src="view/img/dtsamsungs21.webp" alt=""></a>
            <a href="index.php?act=sanphamct&idsp=10" class="text-center">Samsung Galaxy S21+ 5G</a>
        </div>
        <div class="row1 mb10 top10">
            <a href="index.php?act=sanphamct&idsp=9"><img src="view/img/taingheoverear.webp" alt=""></a>
            <a href="index.php?act=sanphamct&idsp=9" class="text-center">Tai nghe Over-ear SteelSeries Arctis 5</a>
        </div>
    </div>
</div>