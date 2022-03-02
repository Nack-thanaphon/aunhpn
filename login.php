<?php
require_once './database/connect.php';
include './template/include/header.php';
?>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">
                    <div class="brand-wrapper">

                        <h1>MUGH</h1>
                        <p>Mahidol University Global Health</p>

                    </div>
                    <div class="login-wrapper my-auto">

                        <h1 class="login-title">Log in</h1>
                        <?php include './template/include/message.php'; ?>
                        <form id="formlogin">
                            <div class="form-group">
                                <label for="name">User email</label>
                                <input type="text" name="user_email" id="name" class="form-control"
                                    placeholder="user email" required>
                                <!-- <small id="messageName" class="text-danger">Your name is mandatory.</small> -->
                            </div>
                            <div class="form-group mb-4">
                                <label for="pass">Password</label>
                                <input type="password" name="user_password" id="pass" class="form-control"
                                    placeholder="enter your passsword" required>
                                <!-- <small id="messagePass" class="text-danger">Password is mandatory.</small> -->
                            </div>
                            <button id="login" class="btn btn-block login-btn">Login</button>
                        </form>
                        <a href="#!" class="forgot-password-link">Forgot password?</a>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt="login image" class="login-img">
                </div>
            </div>
        </div>
    </main>
    <!--     
    <div class="login-bg">
        <div class="bg-filter"></div>
        <div class="login">
            <div class="login-header">
                <h1>MUGH</h1>
                <p>Mahidol University Global Health</p>
            </div>

            <div class="login-mid">

                <div class="card-head">
                    <h4>LOGIN</h4>
                 
                </div>
                <div class="card-midle">
                    <form id="formlogin">
                        <input type="text" placeholder="Email" name="user_email">
                        <input type="password" placeholder="Password" autocomplete="on" name="user_password">
                        <button type="submit" class="btn-succes">เข้าสู่ระบบ</button>
                    </form>
                    <div class="card-foot">
                        <div class="card-foot-left"><a href="#">ลืมรหัสผ่าน</a></div>
                        |
                        <div class="card-foot-right"><a href="./">ติดต่อแอดมิน</a></div>
                    </div>
                </div>

            </div>

        </div>
        <div class="login-footer">
            <div class="login-footer-left">
                <p>Contact</p>
            </div>
            <div class="login-footer-right">
                <strong>Develop by <a href="#">Dev-tech</a></strong>

            </div>


        </div>

    </div> -->

    </div>

    <?php

    include './template/include/script.php';

    ?>