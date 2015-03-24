<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Display table with different color</title>
        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
        <script type="text/javascript">
            $('document').ready(function() {
                $('#btn').click(function() {
                    var nama = $('#nama').val();
                    var nim = $('#nim').val();
                    var alamat = $('#alamat').val();
                    var data = 'nama=' + nama + '&nim=' + nim + '&alamat=' + alamat;
                    $.ajax({
                        type: 'POST',
                        url: "table.php",
                        data: data,
                        success: function() {
                            $('#tampil').load("tampil.php");
                        }                         
                    });
                });
            });
           
        </script>
        <style>
            body{
                background: #ECF0F1;
            }
            .lab{
                width: 150px;
            }
            .ipt{
                width: 300px;
                height: 30px;
                border: 1px solid #ffffff;
                padding-left: 10px;
                font-size: 12pt;
            }
            #btn{
                width: 200px;
                height: 25px;
                margin-top: 10px;
                background: #2ECC71;
                border: 1px solid #2ECC71;
                color: #ffffff;
            }
             h1{
                font-family:sans-serif;
                text-align: center;
            }
            #tbl_input{
                margin-left: 450px;
            }
        </style>
        

    </head>
    <body>
       <div id="lay">
            <h1>FORM INPUT DATA</h1>
            <div id="form-inp">
 
                <form method="post" action="" id="form-input">
                    <table id="tbl_input">
                        <tr>
                            <td class="lab">Nama </td><td><input class="ipt" type="text" name="nama" id="nama"></td>
                        </tr>
                        <tr>
                            <td class="lab">NIM </td><td><input class="ipt" type="text" name="nim" id="nim"></td>
                        </tr>
                        <tr>
                            <td class="lab">Alamat </td><td><input class="ipt" type="text" name="alamat" id="alamat"></td>
                        </tr>
                       
                        <tr>
                            <td></td><td><input id="btn" type="button" value="Save" /></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="tampil"></div>
        </div>
    </body>
</html>
