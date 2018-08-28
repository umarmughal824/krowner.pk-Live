<?php
require_once 'db_config.php';
 try {
 	
        $sql = "SELECT * FROM subscribers";
        // use exec() because no results are return
        $gresult = $db->query($sql);
        //print_r("<br/><br/><br/><br/><br/><br/><br/>".$result."<br/><br/>");
        if (!empty($gresult)) {
            
            if($gresult->rowCount() > 0){
            	    $response['users'] = array();
	            foreach ($gresult->fetchAll() as $row) {
	                
	                $product = array();
			$product['id'] = $row['id'];
			$product['email'] = $row['email'];
			array_push($response['users'], $product);
	            }
	            $response['success'] = 1;
	            echo json_encode($response);
	    }
	    else{
	           //no product found
		$response['success'] = 0;
		$response['message'] = "No subscriber found.";
	
		//ech JSON repsonse
		echo json_encode($response);	    
	    }
        }
        else{
           //no product found
	$response['success'] = 0;
	$response['message'] = "No subscriber found.";

	//ech JSON repsonse
	echo json_encode($response);
        }
    } catch (PDOException $e) {
        //echo $sql . "<br>" . $e->getMessage();
           //no product found
	$response['success'] = 0;
	$response['message'] = "Oops an error occured!";

	//ech JSON repsonse
	echo json_encode($response);
    }
?>