<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- <script src="publish/js/login.js"></script> -->

<body>
<div style="margin:200px">
    <div align="center">
        <h1>煞氣M.A.S.E. Lab 分享系統</h1>
        <form action="<?=base_url("index.php/pages/login");?>" id="form1"  method="post">
            <div><label id="heig"><input type="email" id="account" name="email"  placeholder="Email" value=""></label></div>
            <div><label id="heig"><input type="password"  id="password" name="password" placeholder="Password"></label></div>

            <div><button class="btn" type="submit">登入</button></div>
        </form>

        <br><br><br><br><br><br>
        <!-- action="<?=base_url("index.php/pages/verification");?>" -->
        <h1>Create an account</h3>
        <form action="<?=base_url("index.php/pages/creat");?>" id="form2" method="post" >
        <div><label id="heig"><input type="text" id="Newname" name="Newname"  placeholder="Username" value="a"></label></div>
        <div><label id="heig"><input type="email" id="Newaccount" name="Newemail" placeholder="Email" value="a1@gm.nfu.edu.tw"></label></div>
        <div><label id="heig"><input type="password"  id="Newpassword" name="Newpassword" placeholder="Password" value="b"></label></div>
        <div><button class="btn" type="submit">註冊帳戶</button></div>
        </form>
        <div id ="alert"></div>
    </div>
</div>
</body>