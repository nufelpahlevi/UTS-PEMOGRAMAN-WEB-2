<!DOCTYPE html>
<html>
<head>
  <title>UTS PemroWeb 2</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <fieldset>
  <form action="proses.php" method="post" >
    <select class="wilayah" name="wilayah">
      <option>Wilayah</option>
      <option value="DKI JAKARTA">DKI JAKARTA</option>
      <option value="JAWA BARAT">JAWA BARAT</option>
      <option value="BANTEN">BANTEN</option>
      <option value="JAWA TENGAH">JAWA TENGAH</option>
    </select>

    <label>Jumlah positif</label>
    <input type="text" name="jmlpositif">

    <label>Jumlah dirawat</label>
    <input type="text" name="jmldirawat">

    <label>Jumlah sembuh</label>
    <input type="text" name="jmlsembuh">

    <label>Jumlah meninggal</label>
    <input type="text" name="jmlmeninggal">


  <label>Nama Operator</label>
    <input type="text" name="nmaoperator">

    <label>NIM</label>
    <input type="text" name="nimmahasiswa">
    
    <input type="submit" name="tambah" value="Submit" class="btn">
  </form>

  </fieldset>
</body>
</html>
