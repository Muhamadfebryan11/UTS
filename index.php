<html>
<head>
 <title>Data Pemantauan Covid19 Wilayah Banten | Per 22 Maret 2021 14:13:16 (Waktu dan Jam Sekarang) | Muhamad Febryan / 171011400421 </title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>
</head>
<body style="font-family:arial">
 <center><h2>Data Pemantauan Covid19 Wilayah Banten <br />  Per 22 Maret 2021 14:13:16 (Waktu dan Jam Sekarang) <br />  Muhamad Febryan / 171011400421 </h2></center>
  <tr>
   <th>Positif</th>
   <th>Dirawat</th>
   <th>Sembuh</th>
   <th>Meninggal</th>
  </tr>
  
  <?php 
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from covid19");
  while($r = mysqli_fetch_array($data)){
   $positif_covid19 = $r['positif_covid19'];
   $dirawat_covid19 = $r['dirawat_covid19'];
   $sembuh_covid19 = $r['sembuh_covid19'];
   $meninggal_covid19 = $r['meninggal_covid19'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $positif_covid19; ?></td>
   <td><?php echo $dirawat_covid19; ?></td>
   <td><?php echo $sembuh_covid19; ?></td>
   <td><?php echo $meninggal_covid19; ?></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
</body>
</html>