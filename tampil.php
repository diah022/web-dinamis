<html>
    <head>
        <?php
            include 'config.php';
        ?>
        
        <style type="text/css" rel="stylesheet">
            #tbl_tampil{
                /*border: 1px solid #232323;*/
                height:300px;
                width:500px;
                text-align: center;
                margin-left: 400px;
                border-spacing: 0px;
            }
            #kpl tr{
                height: 40px;
                background: #2ECC71;
                color:#fff;
                
            }
            #btm tr{
                height: 20px;
                background: #2ECC71;
                color:#fff; 
            }
            .col1{
                background: #99ff66;
                border-right: 1px solid #009933;
                border-bottom: 1px solid #009933;
            }
            .col2{
                background: #99ff66;
                border-bottom: 1px solid #009933;
                /*border: 0px;*/
            }
            .col3{
                border-left: 1px solid #009933;
                border-bottom: 1px solid #009933;
                /*border-right: 1px solid #009933;*/
            }
            
            .col4{
               background: #ffffff;
               border-right: 1px solid #009933;
               border-bottom: 1px solid #009933;
            }
            .col5{
               background: #ffffff;
               /*border-right: 1px solid #009933;*/
               border-bottom: 1px solid #009933;
            }
            
            .judul{
                font-family: Calibri, Times New Roman;
                font-size: 14px;
                font-weight: bold;
                text-align: center;
                margin-left: 100px;
                margin-top: 70px;
                margin-bottom: 20px;
            }
 
        </style>
    </head>
     <body>
         <div class="judul">DAFTAR DATA YANG DIMASUKKAN</div>
        <table id="tbl_tampil">
            <thead id="kpl">
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>NIM</td>
                    <td>Alamat</td>

                </tr>
            </thead>
            <tbody>
                <?php
                    $query = mysql_query("select * from user");
                    
                    while($q = mysql_fetch_array($query)){
                        if($q['id']%2 != 0){
                            echo '<tr>'
                                . '<td class="col1">'.$q['id'].'</td>'
                                . '<td class="col2">'.$q['nama'].'</td>'
                                . '<td class="col2">'.$q['nim'].'</td>'
                                . '<td class="col2">'.$q['alamat'].'</td>'
                                . '</tr>';
                        }
                        else {
                            echo '<tr>'
                                . '<td class="col4">'.$q['id'].'</td>'
                                . '<td class="col5">'.$q['nama'].'</td>'
                                . '<td class="col3">'.$q['nim'].'</td>'
                                . '<td class="col3">'.$q['alamat'].'</td>'
                                . '</tr>';
                        }
                    }
                    echo '<thead id="btm"><tr>'
                         . '<td colspan="4">Badiah Setyowati (12141363) ---- STMIK EL-RAHMA YOGYAKARTA (2015)</td>'
                         .'</tr></thead>';
                ?>
                </tbody>
        </table>
    </body>
</html>


