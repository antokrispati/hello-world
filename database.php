<?php
class database{
	
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db ="audiens";
	
	function __construct(){
		mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
		//mysql_select_db($this->db);
	}
		//$koneksi = mysql_connect($this->host, $this->uname, $this->pass);
		//mysql_select_db($this->db);
		
		//if($koneksi){
		//	echo "Koneksi database mysql dan php berhasil";
		//}else{
		//	echo "Koneksi database mysql dan php GAGAl...!";
		
	function viewdata(){
		$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass,$this->db),"select * from refchannel order by lcn");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}	
	
	function inputchannel($lcn,$channel_name){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass,$this->db),"insert into refchannel values('','$lcn','$channel_name')");
	}
	
	function hapuschannel($id){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass,$this->db),"delete from refchannel where id='$id'");
	}
	
	function editchannel($id){
		$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass,$this->db),"select * from refchannel where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
	}
	return $hasil;
	}
	
	function updatechannel($id,$lcn,$channel_name){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass,$this->db),"update refchannel set lcn='$lcn', '$channel_name' where id='$id'");
	}
}

//$audiens = new database();
?>
