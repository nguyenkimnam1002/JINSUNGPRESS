<?php include_once('./master_layout/header.php') ?>
<?php
if (!isset($_SESSION['account'])) {
    header('Location: login.php');
}
require('./connect.php');
$errors = []; // biến để lưu tất cả các lỗi ở server thực hiện và trả về cho người dùng (1 mảng)
$success = ""; // là 1 chuỗi thông báo thành công (1 chuỗi)
date_default_timezone_set("Asia/Ho_Chi_Minh"); // xét timezone (múi giờ)
$account = $_SESSION['account'];
if (isset($_POST['submit'])) {
    /**
     * isset là kiểm tra có tại tại biến không?
     * $_POST: phương thức post của form 
     * $_POST['submit']: lấy giá trị trong phương thức post của form với name là submit
     * $_POST['username']: lấy giá trị trong phương thức post của form với name là username
     */

    $old_password =  $_POST['old_password'];
    $password =  $_POST['password'];
    /**
     * Kiểm tra trong bảng account có id trùng với thông tin đang lưu trong $_SESSION và mật khẩu bằng với mật khẩu cũ nhập từ form không
     * Nếu có thì thay đổi lại mật khẩu
     *Nếu không thì thông báo sai mật khẩu
     */
    $query = "SELECT * FROM accounts WHERE id = '{$account['id']}' AND password = '{$old_password}'";
    $result = mysqli_query($conn, $query); // thực hiện lệnh sql => trả về 1 mảng (các bản ghi)
    // Đếm xem có bao nhiêu bản ghi thỏa mãn mãn câu sql. Nếu mà > 0 => thông báo
    if (mysqli_num_rows($result) > 0) { // mysqli_num_rows: kiểm tra (đếm) có bao nhiêu bản ghi (rows)
        // Lưu thông tin mật khẩu mới
        $dt = date("Y-m-d H:i:s");
        $query = "UPDATE accounts SET password = '{$password}', updated_at = '{$dt}' WHERE id = '{$account['id']}'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $success = "Sửa mật khẩu thành công";
        } else {
            $errors[] = "Sửa mật khẩu thất bại: " . mysqli_error($conn); // mysqli_error: là cú pháp hiện lỗi của mysqli
        }
    } else {
        // Đăng nhập thất bại
        $errors[] = "Mật khẩu cũ chưa đúng. Vui lòng đăng nhập lại";
    }
}
?>

<!-- Giao diện đăng nhập -->
<div class="container">
    <div class="row">
        <div class="col col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Đổi mật khẩu
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
                            <label for="old_password">Mật khẩu cũ</label>
                            <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Mật khẩu cũ">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu mới</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu mới">
                        </div>
                        <div class="form-group">
                            <label for="re_password">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Nhập lại mật khẩu">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4" name="submit">Đổi mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-12 col-md-5" style="height:100px; background-color: red;">

        </div> -->
    </div>
</div>

<?php include_once('./master_layout/footer.php') ?>
<script src="./assets/js/change-password.js"></script>