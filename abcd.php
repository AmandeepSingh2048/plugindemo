
<?php
class Tracker
{
	function __construct()
	{

		add_action( 'admin_menu',array($this, 'main_menu'));

		add_action('wp_login',array($this,'count_user_login'),10,2);
		
	}
	function pagee()
	{
		//Get list of all users
		
		$users = get_users();
		 
		  
			?>
			<!DOCTYPE html>
			<html>
			<body>
			<table>
				<tr>
				    <th> User Id &nbsp &nbsp </th>
				   	<th> User Name &nbsp &nbsp</th>
				   	<th> Login Attempts &nbsp &nbsp</th>
			 	</tr><br>
			 	<?php
			 	foreach ($users as $user)
			 	{
			 		$login_count =get_user_meta($user->ID,'sp_login_count',true);
			 		if(empty($login_count))
			 		{
			 		
			 			$login_count =0;
			 		}
			 		?>
			 		<tr>
				 		<td><?php echo $user->ID ?></td>
					   	<td><?php echo $user->user_nicename?></td>
					   	<td><?php echo $login_count ?></td>
					   	<td></td>
		 			</tr>
			 		<?php
			 	}
			 	exit;
			 	?>
		 		
		 	</table>
			</body>
			</html>

	           <?php
	   

		}

		function count_user_login($user_login,$user) 
		{
			
		
    		if ( ! empty( get_user_meta( $user->ID, 'sp_login_count', true ) ) ) 
    		{
            	$login_count = get_user_meta( $user->ID, 'sp_login_count', true );
            	update_user_meta( $user->ID, 'sp_login_count', ( (int) $login_count + 1 ) );
        	} 
        	else 
        	{
            	update_user_meta( $user->ID, 'sp_login_count', 1 );
        	}
    		
		}



		

		
		

		
		
		//Print it
		//Get counts list for same users 
		//print it
		
	


}

new Tracker;// function page()

?>