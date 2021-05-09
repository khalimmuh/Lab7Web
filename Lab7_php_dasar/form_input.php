<html>
<head><title>fomulir</title></head>
<h1>Fomulir Biodata Karyawan</h1>
<div id="main">
         <?php
          if(isset($_GET['menu'])){
           include $_GET['menu'].".php";
          }
        ?>
<body>
<form methode="GET">
<table>
<tr>
          <td>NIK</td>
          <td> : </td>
          <td><input type="text" name="nik" class="input"></td>
          </tr>
<tr>
            <td>Nama</td>
            <td> : </td>
            <td><input type=text name=nama size=27></td>
            </tr>
<tr>
            <td>Tempat / Tanggal Lahir</td>
            <td> : </td>
            <td><input type="text" name="tempat" class="input">
           / <input type="Date" name="tgl_lahir" class="input"></td>
            </tr>
<tr>         
             <td>Jenis Kelamin</td>
            <td> : </td>
            <td>
            <select name=kelamin>
             <option value="1" selected="selected"> - </option>
             <option value="Laki-laki"> Laki-Laki </option>
             <option value="Perempuan"> Perempuan </option></select></td>
            </tr>
<tr> 
            <td>Status Perkawinan</td>
            <td> : </td>
            <td>
            <select name=status>
            <option value="1" selected="selected"> - </option>
                <option value="Menikah"> Sudah Menikah </option>
                <option value="Single"> Belum Menikah </option></select></td>
                </tr>
<tr>         
             <td>Jenis Pekerjaan</td>
            <td> : </td>
            <td>
            <select name=pekerjaan>
             <option value="1" selected="selected"> - </option>
             <option> operator </option>
             <option> supervisor </option>
             <option> manager </option>
             <option> administrator </option></select></td>
            </tr>
<tr>
                <td>Golongan</td>
                <td> : </td>
                <td> <select name="golongan">
                <option value="1" selected="selected"> - </option>
                <option value="2"> A </option>
                <option value="3"> B </option>
                <option value="4"> C </option>
                <option value="5"> D </option>
                </td>
                </tr>

<tr>
    <td colspan="3"><input type=Submit name="submit" value=simpan><input type=reset 
    name="reset" value=Hapus></td>
</tr>

</table>
</form>
</body>
</html>


<?php
$nama=isset($_GET['nama'])?$_GET['nama']:'';
$gol=isset($_GET['golongan'])?$_GET['golongan']:'';
$kelamin=isset($_GET['kelamin'])?$_GET['kelamin']:'';
$status=isset($_GET['status'])?$_GET['status']:'';
$nik=isset($_GET['nik'])?$_GET['nik']:'';
$tgl_lahir=isset($_GET['tgl_lahir'])?$_GET['tgl_lahir']:'';
$pekerjaan=isset($_GET['pekerjaan'])?$_GET['pekerjaan']:'';
$tempat=isset($_GET['tempat'])?$_GET['tempat']:'';

if(!empty($nama) and !empty($gol) and !empty($kelamin) and !empty($status) and !empty($nik)
and !empty($tgl_lahir) and !empty($pekerjaan) and !empty($tempat))
{
    ?>
<table border="1">

<tr>
<h2>Data Karyawan</h2>
    <td> Nik </td>
    <td> : </td>
    <td>
        <?php
        if (!empty($nik))
            {
                echo $nik;
                
            }
        else
            {   
            echo"<script>alert('Masukkan nik')</script>";
            }
        ?> </td>
</tr>

<tr>
    <td> Nama </td>
    <td> : </td>
    <td>
        <?php
        if (!empty($nama))
            {
                echo $nama ;
            }
        else
            {   
            echo"<script>alert('Masukkan Nama')</script>";
            }
        ?> </td>
</tr>
<tr>
    <td>Tempat / Tanggal Lahir</td>
    <td> : </td>
    <td>
        <?php
        if (!empty($tempat) and !empty($tgl_lahir) )
            {
                echo $tempat." / ". $tgl_lahir ;
            }
        else
            {   
            echo"<script>alert('Masukkan tempat dan tanggal lahir')</script>";
            }
        ?> </td>
</tr>

<tr>
    <td>Umur</td>
    <td> : </td>
    <td>
        <?php
        $tgl_lahir = new DateTime($tgl_lahir);
    $sekarang = new DateTime("today");
    if ($tgl_lahir > $sekarang) { 
    $thn = "0";
    $bln = "0";
    $tgl = "0";
    }
    $thn = $sekarang->diff($tgl_lahir)->y;
    $bln = $sekarang->diff($tgl_lahir)->m;
    $tgl = $sekarang->diff($tgl_lahir)->d;
    echo $thn." tahun ".$bln." bulan ".$tgl." hari";
?>
 </td>
</tr>
<tr>
    <td> Jenis Kelamin </td>
    <td> : </td>
    <td>
        <?php
        if (!empty($kelamin))
            {
            echo $kelamin ;
            }
        else
            {   
            echo"<script>alert('Masukkan jenis kelamin')</script>";
            }
        ?> </td>
</tr>

<tr>
    <td> Status perkawinan </td>
    <td> : </td>
    <td>
        <?php
        if (!empty($status))
            {
            echo $status ;
            }
        else
            {   
            echo"<script>alert('Masukkan Status Perkawinan')</script>";
            }
        ?> </td>
</tr>

<tr>
    <td> Pekerjaan  </td>
    <td> : </td>
    <td>
        <?php
        if (!empty($pekerjaan))
            {
            echo $pekerjaan ;
            }
        else
            {   
            echo"<script>alert('Masukkan Status Pekerjaan')</script>";
            }
        ?> </td>
</tr>
<tr>
    <td>Golongan </td>
    <td> : </td>
    <td>
        <?php
        if (!empty($gol))
            {
            echo $gol ;
            }
        else
            {   
            echo"<script>alert('Masukkan Golongan')</script>";
            }
        ?> </td>
</tr>
<tr>
    <td> Gaji Pokok </td>
    <td> : </td>
    <td> <?php
        if ($gol=="2")
        {
            echo "5.000.000";
        }
        elseif ($gol=="3")
        {
            echo "7.000.000";
        }       
        elseif ($gol=="4")
        {
            echo "8.000.000";
        }
        elseif ($gol=="5")
        {
            echo "10.000.000";
        } ?></td>
</tr>

</table>
<?php
}
else
{
    echo"<script>alert('Data Kosong')</script>";
}


?>