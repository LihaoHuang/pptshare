<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
<!-- Page Header -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="page-heading">
                <h1>上傳 PPT</h1>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="row control-group">
                
                <div class="form-group col-xs-12  controls">
                    <label for="date"><h3>報告日期: </h2></label>
                    <input id="date" class="form-control" placeholder="yyyy/mm/dd"name="date" type="text">
                </div>
                    
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12  controls">
                    <label for="member"><h3>組員: </h3></label>
                    <input id="member" class="form-control" placeholder="黃立豪、陳威傑、揚全環、蒙偉倫" name="member" type="text">
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12  controls">
                    <label for="upload"><h3>上傳 PPT 檔案: </h3></label>
                        <!-- upload -->
                        <form method="post" action="pages/file_upload" enctype="multipart/form-data">
                            <input type="file" name="fileupload" />

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <input class="btn btn-primary" type="submit" value="建立">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>


