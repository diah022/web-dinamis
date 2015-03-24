<html>
    <head>
        <title>Tugas Web Dinamis</title>
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
                font-size: 20px;
                font-weight: bold;
                text-align: center;
                margin-left: 100px;
                margin-top: 70px;
                margin-bottom: 20px;
            }
 
        </style>
    </head>
    <body>
        <div class="judul">TABEL MAHASISWA </div>
                
        <?php

$nama = array("Anin", "Ina", "Meli", "Bagas", "Raka", "Rika", "Rama", "Andri", "Dana", "Agus");
$nim = array(121343, 235435, 123355, 123435, 1432424, 123456, 1231435, 1231435, 1124545, 1243554);

echo "<table id='tbl_tampil'>"
        . "<thead id='kpl'>"
        . "<tr>"
            . "<td>No</td>"
            . "<td>Nama</td>"
            . "<td>NIM</td>"
        . "</tr></thead>";
for($i = 0; $i<10; $i++){
    $no = $i+1;
    if($i%2 != 0){
       echo "<tr>"
            . "<td class='col4'>$no</td>"
            . "<td class='col5'>$nama[$i]"
            . "<td class='col3'>$nim[$i]"
          . "</tr>"; 
    }
    else {
        echo "<tr>"
            . "<td class='col1'>$no</td>"
            . "<td class='col2'>$nama[$i]"
            . "<td class='col2'>$nim[$i]"
          . "</tr>";
    }
    
}
echo '<thead id="btm"><tr>'
                . '<td colspan="4">Rina Septiana (12141380) ---- STMIK EL-RAHMA YOGYAKARTA (2015)</td>'
                .'</tr></thead>';
echo "</table>";
?>
    </body>
</html>
