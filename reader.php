<?php
	ini_set('auto_detect_line_endings', TRUE);
	function file_get_contents_chunked($file,$chunk_size,$callback)
	{
		$allRowsAsArray = array();
	    try
	    {
	        $handle = fopen($file, "r");
	        $i = 0;
	        while (!feof($handle))
	        {
	            $data = call_user_func_array($callback,array(fread($handle,$chunk_size),&$handle,$i));
	            $allRowsAsArray = $data;
	            $i++;
	        }

	        fclose($handle);

	    }
	    catch(Exception $e)
	    {
	         trigger_error("file_get_contents_chunked::" . $e->getMessage(),E_USER_NOTICE);
	         return false;
	    }

	    return $allRowsAsArray;
	}
	function getArray(){
		$success = file_get_contents_chunked("companies.csv",1,function($chunk,&$handle,$iteration){
			   	$temp = array();
			   	$i=0;
			   	while (( $data = fgetcsv ( $handle , 1000 , ',')) !== FALSE ) 
				{
					array_push($data, $i);
			    	array_push($temp, $data);
			    	$i++;
				}
				return $temp;
			});
		return $success;
	}

?>