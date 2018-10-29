<?php 
	require_once ('proses.php');
	$nim   = $_GET['nim'];
	$sql   = $data -> data_terpilih($nim);
    $row   = mysqli_fetch_assoc($sql);
 ?>

<form action="proses.php?edit=<?php echo $nim;?>" method="post">
    <pre>
        NIM     : <input type="text" name="nim" value="<?php echo $row['nim']; ?>" readonly><br>
        Nama    : <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        <input type="submit" value="Simpan">
    </pre>
</form>