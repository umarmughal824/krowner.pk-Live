<?php

require_once 'db_config.php';

$email = $_POST['email'];

$subject = 'Subscription - krowner.com | Coming Soon';
$message = $email. ' has subscribed to find out when we are done!';
$to = 'crowfect@gmail.com';
// $to = 'mrumarasghar@gmail.com';
// $to = 'imuhammadjabbar@gmail.com';
// $to = 'leads@krowner.com';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Krowner <leads@krowner.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";


try {
 	
        $sql = "SELECT * FROM subscribers WHERE email = '{$email}'";
        // use exec() because no results are return
        $gresult = $db->query($sql);
        //print_r("<br/><br/><br/><br/><br/><br/><br/>".$result."<br/><br/>");
        if (!empty($gresult)) {
            
            if($gresult->rowCount() > 0){
            	    /*$response['users'] = array();
	            foreach ($gresult->fetchAll() as $row) {
	                
	                $product = array();
			$product['id'] = $row['id'];
			$product['email'] = $row['email'];
			array_push($response['users'], $product);
	            }
	            $response['success'] = 1;
	            echo json_encode($response);*/
	            echo 'You are already a subscriber.';
	    }
	    else{
	    
	    
	    
              try {
		        $sql = "INSERT INTO subscribers(email) VALUES ('{$email}')";
		        $db->exec($sql);
		
			// email send  to leads@krowner
			if ( mail($to, $subject, $message, $headers) ) {
				//echo 'sent. <a href="index.php">back</a>';
				// email to subscriber
				if ( mail($email, $subject, $message, $headers) ) {
					echo 'Thanks for your time for subscribng us. We will get back to you soon.';
				
			
				}
			
			
			}
			else {
				//echo 'error. <a href="index.php">back</a>';
			}
		
		} catch (PDOException $e) {
		        //echo $sql . "<br>" . $e->getMessage();
		        //echo $sql . "<br>" . $e->getMessage();
		           //no product found
			//$response['success'] = 0;
			//$response['message'] = "Oops an error occured!";
			echo 'Oops an error occured!';
			//ech JSON repsonse
			//echo json_encode($response);
		}
		
	    
	    
	    
	    
	           //no product found
		//$response['success'] = 2;
		//$response['message'] = "No subscribers found.";
	
		//ech JSON repsonse
		//echo json_encode($response);	    
	    }
        }
        else{
/*           //no product found
	$response['success'] = 0;
	$response['message'] = "No subscriber found.";

	//ech JSON repsonse
	echo json_encode($response);*/
	echo 'Oops an error occured!';
        }
    } catch (PDOException $e) {
        //echo $sql . "<br>" . $e->getMessage();
           //no product found
	//$response['success'] = 0;
	//$response['message'] = "Oops an error occured!";
	echo 'Oops an error occured!';
	//ech JSON repsonse
	//echo json_encode($response);
    }



// echo 'Thanks for subscribing. We\'ll get back to you...';exit;
//header('location: index.php');

?>