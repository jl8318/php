<?php
	require 'classes/Database.php';


	$db = new Database();

	$db->query('SELECT * FROM MYBLOG');//WHERE id = :id');
	//$id = array($_GET['id']);
	//$id=$_GET['id'];
	/*$row =$db->sqlInject($id);*/
	//$db->bind(':id',$id);

	$row = $db->resultSet();
/*	print_r($row);*/

	$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	if(isset($post['submit1'])){
		$title = $post['title'];
		$body = $post['body'];
		if($idup=$post['idup']){
			echo "Update!!<br/>";
			$db->update($idup,$title,$body);
		}else{


			echo "Submit new!!<br/>";
			echo "$title<br/>";
			echo "$body<br/>";
			echo "last insert id: ".$db->insert($title,$body)."<br/>";
		}
	}

	if(isset($post['delete'])){
		$db->delete($post['delete_id']);

	}
?>

<H1>Posts</h1>

<form action ="index.php" method = "get">
	<input name = "id" type = "text">
	<input name ="submit" type = "submit">

</form>

<form action ="<?php $_SERVER['PHP_SELF']; ?>" method = "post">
	<input name = "idup" type = "text" placeholder ="Add a id">
	<input name = "title" type = "text" placeholder ="Add a Title">
	<textarea name="body" ></textarea>
	<input name ="submit1" type = "submit">

</form>

<?php
	foreach($row as $r){?>
	<div>

<!-- 		<h3><?php echo $r[1]; ?></h3>

		<h3><?php echo $r[2]; ?></h3> -->

		<h3><?php echo $r['title']; ?></h3>

		<h3><?php echo $r['body']; ?></h3>
		<form action ="<?php $_SERVER['PHP_SELF']; ?>" method = "post">
			<input name ="delete" type = "submit" value="delete">
			<input type ='hidden' name ="delete_id" value="<?php echo $r['id'];?>">
		</form>
	</div>

<?php
	}
?>