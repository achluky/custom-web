<?php
include "../config/koneksi.php";
$title = "Tambah Data Profil";

if(isset($_GET['data'])){
	if($_GET['data'] == "profil" && $_GET['aksi'] == "tambah"){
		$title = "Tambah Data Profil";
	}
	elseif($_GET['data'] == "profil" && $_GET['aksi'] == "edit"){
		$title = "Edit Data Profil";
		$d_profil = PdoSelect("SELECT *FROM profil ORDER BY id_profil DESC");	
	}else{
		redirect(0,"../");
	}
}else{
	redirect(0,"../");
}

if(isset($_POST['data'])){
	$profil = filter($_POST['profil']);
	$visi = filter($_POST['visi']);
	$misi = filter($_POST['misi']);
	$data_field = array(
		'profil'=>$profil,
		'visi'=>$visi,
		'misi'=>$misi
	);

	if($_GET['aksi'] == "tambah" && $_GET['data'] == "profil"){
		foreach ($data_field as $d) {
			$df[] = $d;
		}
		tambah($df);
	}
	elseif($_GET['aksi'] == "edit" && $_GET['data'] == "profil"){
		edit($data_field);
	}else{
		redirect(0,"../");
	}
}

function tambah($data_field){
	$field = array('detail_profil','visi','misi');
	$data = array($data_field);

	if(PdoInput("profil",$field,$data)){
        echo "<script>alert('Data Tersimpan !'); window.location = '../'</script>";
    }else{
        echo "<script>alert('Gagal Tersimpan !'); window.location = ''</script>";
    }
}


function edit($data_field){
	if(PdoQuery("UPDATE profil SET detail_profil = '".$data_field['profil']."', 
		visi = '".$data_field['visi']."', misi = '".$data_field['misi']."'"))
	{
		echo "<script>alert('Data Tersimpan !'); window.location = '../'</script>";
    }
    else{
        echo "<script>alert('Gagal Tersimpan !'); window.location = ''</script>";
    }
}

function redirect($delay,$link){
	echo "<meta http-equiv='refresh' content = '".$delay.",".$link."'>";
}
?>
 

<html>
	<head>
		<title>Menu Admin</title>
	</head>
	<body>
		<form action="" method="POST">
			<strong><?php echo $title; ?></strong>
			
			<label>Profil</label>
			<textarea name="profil" style="width:100%; height:100px;"><?php if(isset($d_profil)) echo $d_profil['detail_profil']; ?></textarea>

			<label>Visi</label>
			<textarea name="visi" style="width:100%; height:100px;"><?php if(isset($d_profil)) echo $d_profil['visi']; ?></textarea>
			
			<label>Misi</label>
			<textarea name="misi" style="width:100%; height:100px;"><?php if(isset($d_profil)) echo $d_profil['misi']; ?></textarea>
			
			<button type="submit" name="data">Simpan</button>
		</form>
	</body>
</html>