<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <style type = "text/css">
        body {
            background-color: oldlace;
            margin: 1% 10% 1% 10%;
        }
        table {
            border-style: solid;
            border-collapse: collapse;
            position : relative;

        }
        td item{
            font-weight : bold;
            font-size : 30px;
            color : lightseagreen;
        }
        td{
            text-align: center;
        }
        h1 {
            color: royalblue;
        }

        .col {
            font-size: 20px;
            vertical-align: middle;
            color: deeppink;
        }
    </style>
    <title><?php echo $title; ?></title>
</head>
<body>
    <br><br>
    <center>
        <table class="table table-bordered">
            <tr>
                <td colspan = 4>
                    <h1>煞氣M.A.S.E. Lab 分享系統&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?=anchor('create','前往上傳頁面')?><h1>
                </td>
            </tr>
            <tr>
                <td><item>日期</item></td>
                <td><item>報告投影片</item></td>
                <td><item>組員</item></td>
                <td><item>下載</item></td>
            </tr>
            <?php
                // echo anchor('Welcome/filedownload/123','Download');//Test line
                foreach($filename as $key => $file): #取檔名
                echo '<tr class="info">';
                echo '<td class = "col" width = "150vw">'.date("Y/m/d",filemtime("PPT/".$file)).'</td>';
                echo '<td class = "col" width = "500vw">'.$file.'</td>';
                echo '<td class = "col">NULL</td>';
                echo '<td class = "col" width = "150vw">'.anchor('pages/filedownload/'.$file,
                    '<button type="button" class="btn btn-info">Download</button>').'</td>';
                echo '</tr>';
                clearstatcache();
                endforeach;
            ?>
        </table>
    </center>


