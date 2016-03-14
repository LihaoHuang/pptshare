<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script src="../../publish/js/login.js"></script>
<body>
<div style="margin:200px">
    <div align="center">
        <h1>Welcome to PPT-Share</h1>
        <div><label id="heig"><input type="email" id="account"  placeholder="Email" value=""></label></div>
        <div><label id="heig"><input type="password"  id="password" placeholder="Password"></label></div>

        <div><button class="btn" type="submit" onclick="SignIn()">Sign in</button></div>

        <br><br><br><br><br><br>
        <h1>Create an account</h3>
        <div><label id="heig"><input type="text" id="Newname"  placeholder="Username"></label></div>
        <div><label id="heig"><input type="email" id="Newaccount"  placeholder="Email" value="a1@gm.nfu.edu.tw"></label></div>
        <div><label id="heig"><input type="password"  id="Newpassword" placeholder="Password"></label></div>
        <div><button class="btn" type="reset" onclick="SignUp()">Create an account</button></div>
        
    </div>
</div>
</body>