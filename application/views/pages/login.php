<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- <script src="publish/js/login.js"></script> -->

<body>
    <div style="margin:200px">
        <div align="center">
        <form action="<?=base_url("index.php/pages/login");?>" id="form1"  method="post">
            <div class="modal-header">
                <h1>煞氣M.A.S.E. Lab 分享系統</h1>
            </div>
            <div class="modal-body">
                
                    <div>
                        <h3><label>帳號 : </label></h3>
                        <label id="heig"><input type="email" id="account" name="email"  placeholder="Email" ></label>
                    </div>
                    <div>
                        <h3><label>密碼 : </label></h3>
                        <label id="heig"><input type="password"  id="password" name="password" placeholder="Password"></label>
                    </div>
            </div>
            <div class="modal-footer">
                <div align="center">
                    <button type="submit" class="btn btn-primary btn-lg">登入</button>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">沒帳號嗎? 來註冊吧!!</button>
                </div>
            </div>
        </form>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div align="center" class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h1 class="modal-title" id="myModalLabel">煞氣M.A.S.E. Lab 帳號註冊</h1>
                    </div>
                    <div align="center" class="modal-body">
                        <form action="<?=base_url("index.php/pages/creat");?>" id="form2" method="post" >
                        <div>
                            <label id="heig"><input type="email" id="Newaccount" name="Newemail" placeholder="Email" ></label>
                        </div>
                        <div>
                            <label id="heig"><input type="password"  id="Newpassword" name="Newpassword" placeholder="Password" ></label>
                        </div>
                        <div id ="alert"></div>
                    <div class="modal-footer">
                        <div align="center">
                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                            <button class="btn btn-primary" type="submit">註冊</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>