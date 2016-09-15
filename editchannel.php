<?php
include 'database.php';
$db = new database();
?>

<h3>Edit Channel</h3>
<form action="proseschannel.php?aksi=updatechannel" method="post">
<?php
foreach($db->editchannel($_GET['id']) as $d){
?>	
<table>
<tr>
<td>LCN</td>
<td>
<input type="hidden" name="id" value="<?php echo $d['id']?>">
<input type="text" name="lcn" value="<?php echo $d['lcn']?>">
</td>
</tr>
<tr>
<td>Nama Channel</td>
<td><input type="text" nama="channel_name" value="<?php echo $d['channel_name']?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Simpan"></td>
</tr>
</table>
<?php } ?>
</form>
