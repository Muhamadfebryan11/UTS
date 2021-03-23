<html>
<head>
 <title>Data Pemantauan Covid19 Wilayah Banten | Per 22 Maret 2021 14:13:16 (Waktu dan Jam Sekarang) | Muhamad Febryan  / 171011400421</title>
</head>
<body style="font-family:arial">
 <center><h2>Data Pemantauan Covid19 Wilayah Banten <br /> Per 22 Maret 2021 14:13:16 (Waktu dan Jam Sekarang) <br /> Muhamad Febryan / 171011400421</h2></center>
 <hr />
 <b>Update Data Sementara Pemantauan Covid19 Wilayah Banten </b>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
          <tr> 
                <td>Positif covid19</td>
                <td><input type="text" name="positif_covid19" size="50" required></td>
            </tr>
            <tr> 
                <td>Dirawat covid19</td>
                <td><input type="text" name="dirawat_covid19" size="50" required></td>
            </tr>
            <tr> 
                <td>Sembuh covid19</td>
                <td><input type="text" name="sembuh_covid" size="50" required></td>
            </tr>
            <tr> 
                <td>Meninggal covid19</td>
                <td><input type="text" name="meninggal_covid19" size="50" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $positif_covid19 = $_POST['positif_covid19'];
        $dirawat_covid19 = $_POST['dirawat_covid19'];
        $sembuh_covid19 = $_POST['sembuh_covid19'];
        $meninggal_covid19 = $_POST['meninggal_covid19'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
  $tambah_data  = "insert into covid19 values('','$positif_covid19','$dirawat_covid19','$sembuh_covid19','$meninggal_covid19')";
     $kerjakan=mysqli_query($konek, $tambah_data);
     if($kerjakan)
      {
     // Show message when user added
     echo "Berhasil Update Data <a href='index.php'>Lihat Data </a>";
     }
     else
      {
      echo " Data Sementara Pemantauan Covid19 ";
     }
    }
    ?>
</body>
</html>