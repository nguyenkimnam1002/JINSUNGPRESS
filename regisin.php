<?php include_once('./master_layout/header.php') ?>
<?php
require('./connect.php');
?>

<?php
if (isset($_SESSION['account'])) {
    header('Location: index.php');
}
$errors = []; // biến để lưu tất cả các lỗi ở server thực hiện và trả về cho người dùng (1 mảng)
$success = ""; // là 1 chuỗi thông báo thành công (1 chuỗi)
date_default_timezone_set("Asia/Ho_Chi_Minh"); // xét timezone (múi giờ)
if (isset($_POST['submit'])) {
    /**
     * isset là kiểm tra có tại tại biến không?
     * $_POST: phương thức post của form 
     * $_POST['submit']: lấy giá trị trong phương thức post của form với name là submit
     * $_POST['username']: lấy giá trị trong phương thức post của form với name là username
     */
    $username =  trim($_POST['username']);
    $email =  trim($_POST['email']);
    $fullname =  trim($_POST['fullname']);
    $password =  trim($_POST['password']);
    $phone = trim($_POST['phone']);
    $gender =  trim($_POST['gender']);
    $birthday =  trim($_POST['birthday']);

    if (empty($fullname)) { // là kiểm tra giá trị của biến có khác null hoặc rỗng không
        $errors[] = "Tên đầy đủ không được để trống"; // thêm thông thông báo vào trong mảng
    }

    // Làm việc với database
    if (count($errors) == 0) {
        /**
         * B1: Kiểm tra xem trong csdl đã có acccount tồn tại tên đăng nhập hoặc email nhập từ form chưa. 
         *     Có rồi thì thông báo nhập lại
         * B2: Nếu không có thì thêm dữ liệu từ form vào csdl
         */
        $query = "select * from accounts where username = '{$username}' OR email = '{$email}'"; // câu lệnh sql cần thực hiện
        $result = mysqli_query($conn, $query); // thực hiện lệnh sql => trả về 1 mảng (các bản ghi)
        // Đếm xem có bao nhiêu bản ghi thỏa mãn mãn câu sql. Nếu mà > 0 => thông báo
        if (mysqli_num_rows($result) > 0) { // mysqli_num_rows: kiểm tra (đếm) có bao nhiêu bản ghi (rows)
            // Thông báo 
            $errors[] = "Tên đăng nhập hoặc email đã tồn tại";
        } else {
            // Thêm dữ liệu vào csdl
            $dt = date("Y-m-d H:i:s");
            $query = "insert into accounts values (null, '{$username}', '{$email}', '{$fullname}', '{$password}', '{$phone}', '{$gender}', '{$birthday}', 'member', '${dt}', '${dt}', 'ACTIVE')";
            if (mysqli_query($conn, $query)) {
                $success = "Thêm tài khoản thành công";
            } else {
                $errors[] = "Thêm tài khoản thất bại: " . mysqli_error($conn); // mysqli_error: là cú pháp hiện lỗi của mysqli
            }
        }
    }
}
?>
<!-- Giao diện đăng ký -->
<div class="container">
    <div class="row">
        <div class="col col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Đăng ký
                </div>
                <div class="panel-body">
                    <?php if (count($errors) > 0) : ?>
                        <?php for ($i = 0; $i < count($errors); $i++) : ?>
                            <p class="errors" style="color: red;"> <?php echo $errors[$i]; ?> </p>
                        <?php endfor; ?>
                    <?php endif; ?>
                    <?php if ($success) : ?>
                        <p class="success" style="color: green;"> <?php echo $success; ?> </p>
                    <?php endif; ?>
                    <form method="post" action="" onsubmit="return handeFormSubmit();">
                        <div class="form-group">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Nhập tên">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Nhập Email">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Tên đầy đủ</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nhập tên đầy đủ">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="re_password">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" min="10" max="10" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="gender">Giới tính</label>
                            <div class="radio-inline" for="male">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="NAM" checked>
                                Nam
                            </div>
                            <div class="radio-inline" for="female">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="NU">
                                Nữ
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Ngày sinh</label>
                            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Nhập ngày sinh">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6"><button type="submit" name="submit" class="form-control btn btn-primary mt-4">Đăng Ký</button></div>
                            </div>


                        </div>


                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-12 col-md-5" style="height:100px; background-color: red;">

        </div> -->
    </div>
</div>
<?php include_once('./master_layout/footer.php') ?>
<script src="./assets/js/regisin.js"></script>