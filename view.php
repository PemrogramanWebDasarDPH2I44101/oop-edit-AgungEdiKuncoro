<table border=1 style="border-spacing: 0;"  align= center width=50%>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th colspan = 2 width=10%>Opsi</th>
    </tr>
    <?php 
        require_once ("proses.php");
        $result = $data->view();	
        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['nim']?></td>
                    <td><?php echo $row['nama']?></td>
                    <td width=7%><a href="edit.php?nim=<?php echo $row['nim']; ?>"><input type="button" value="Edit"></a></td>
                    <td width=7%><a href="proses.php?hapus=<?php echo $row['nim']; ?>" onclick="return confirm('Apakah anda yakin ingin manghapus data..?');"><input type="button" value="Hapus"></a></td>
                </tr>
            <?php
            }
            
		} else{
			echo "Tidak ada hasil!";
		}
 	?>
</table>
<br><br>
<center><a href="data.php"><input type="button" value="Input Data"></a></center>