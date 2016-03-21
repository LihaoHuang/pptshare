<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
    .bordow {
        border-top-style:groove;
        border-left-style:groove;
        border-right-style:groove;
        /* background-color: oldlace; */
    }
    .borup {
        border-bottom-style:groove;
        border-left-style:groove;
        border-right-style:groove;
        /* background-color: oldlace; */
    }
    .bor {
        border-style:groove;
    }
    h3 {
        font-weight : bold;
        font-size : 27px;
    }
    h1 {
        font-weight : bold;
        font-size : 50px;
    }
</style>
<body>
<br><br><br><br>
<!-- Page Header -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 bor">
            <div class="page-heading">
                <h1 class="text-center">上傳 PPT</h1>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 borup">

            <div class="row control-group">
                <div class="form-group col-xs-12  controls">
                    <label for="member"><h3>報告組員 : </h3></label>
                    <input id="member" class="form-control" placeholder="黃立豪、陳威傑、揚全環、蒙偉倫" name="member" type="text">
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12  controls">
                    <label for="upload"><h3>上傳檔案 : </h3></label>
                        <!-- upload -->
                        <form method="post" action="pages/file_upload" enctype="multipart/form-data">
                            <input  type="file" name="fileupload" id="fileupload" onchange="getfilename()"/>
                            <br><br>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <input class="btn btn-primary btn-lg" type="submit" value="上傳" onclick="uploadmassage()">
                                    <button type="button"  onclick="location.href='./show'" class="btn btn-danger btn-lg">取消，回上一頁</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>


