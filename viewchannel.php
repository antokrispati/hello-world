<?php
include 'database.php';
$db = new database();
?>
<h1>Refrensi Channel</h1>

<a href ="inputchannel.php"> Input Channel</a>
<table border ="1">
<tr>
<th>No</th>
<th>LCN</th>
<th>Channel</th>
<th>Option</th>
</tr>

<?php
$no = 1;
foreach($db->viewdata() as $x){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $x['lcn']; ?></td>
<td><?php echo $x['channel_name']; ?></td>
<td>
<a href="editchannel.php?id=<?php echo $x['id']; ?>&aksi=update">Edit</a>
<a href="proseschannel.php?id=<?php echo $x['id']; ?>&aksi=hapuschannel">Hapus</a>
</td>
</tr>	
<?php
}
?>
</table>


