


<form method="post">
	<label>Search User</label>
	<input type="text" name="username">

	<button type="submit" name="Search">Search</button>
</form>
<?php 
add_action( 'init', 'DBP_fetch_data' );
function DBP_fetch_data(){
	
	if(isset($_POST['Search'])){
		$user=get_user_by('login', $_POST['username']);
		//var_dump($user);exit;
?>
		<!DOCTYPE html>
		<html>
		<body>
		<table>
		<tr>
		    <th>id</th>
		    <th>First name</th>
		    <th>Last name</th>
		    <th>email</th>
		    <th>Display Name</th>
		    <th>User_Pass</th>
		    <th>User Registered data</th>
	    </tr><br>

		<tr>
	     <td><?php echo $user->ID; ?></td>
	     <td><?php echo $user->first_name; ?></td>
	     <td><?php echo $user->last_name ;?></td>
	     <td><?php echo $user->user_email;?></td>
	     <td><?php echo $user->display_name;?></td>
	     <td><?php echo $user->user_pass;?></td>
	     <td><?php echo $user->user_registered;?></td>


	 	</tr>
	 	</table>
		</body>
		</html>


		<?php	
			
		
	// }
	}
}
?>

