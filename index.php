<?php
require_once "header.php";
?>
<?php
require_once "nav.php";
?>
<div class="container my-5">
    <div class="card shadow-lg border-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h1 class="my-5">
                        ยินดีต้อนรับ
                    </h1>
                    <p>
                        หอพักไทยวัน
                        หอพักราคาถูก สะอาด ปลอดภัย
                    </p>
                    <p>
                        สนใจเข้าจองคลิ้กปุ่มด้านล่าง
                    </p>
                    <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#mymodal">
                        Login >
                    </button>
                    <div class="modal" id="mymodal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title">เข้าสู่ระบบ</h2>
                                    <button class="btn-close" data-bs-dismiss="modal">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <p class="float-start">Email :</p>
                                        <input type="email" class="form-control" name="email" required>
                                        <br>
                                        <p class="float-start">password :</p>
                                        <input type="password" class="form-control" name="password" required>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-outline-dark">
                                        Login
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/index/bg.jpg">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once "footer.php";

?>