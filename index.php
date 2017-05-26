<!doctype html>
<html>
    <head>
        <title>EACIIT TEST</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/zebra_pagination.css" type="text/css">
        <link rel="stylesheet" href="public/css/style.css" type="text/css">
    </head>
    <body>

        <h2>CRUD CSV DATA</h2>
        <?php
		require "reader.php";
        session_start();
        if(isset($_SESSION['message'])){
            ?>
                <div class="panel panel-info">
                    <div class="panel-heading">Info</div>
                    <div class="panel-body"><?php echo $_SESSION['message']; ?></div>
                </div>
            <?php
            session_destroy();
        }
        if(isset($_GET['delete'])){
            $rowId = $_GET['delete'];
            $arr = file("companies.csv");
            
            unset($arr["$rowId"]);
            $fpp = fopen('companies.csv', 'w+');
            foreach ($arr as $line) {
                $res = fwrite($fpp, $line);
            }
            fclose($fpp);
            if($res){
                $_SESSION['message'] = 'Data has been Deleted.';
            }
            header('Location: http://localhost/eaciit');
        }


        // let's paginate data from an array...
        $data = getArray();
		$header = array_shift($data);print_r($data);
        // how many records should be displayed on a page?
        $records_per_page = 10;

        
        if(isset($_GET['search'])){
            $field      = $_GET['field'];   
            $keyword    = $_GET['keyword'];
            $result = array();
            foreach ($data as $dt) {
                if(strpos(strtoupper($dt[$field]), strtoupper($keyword))){
                    $result[] = $dt;
                }
            }   
            $data = $result;
        }

        // include the pagination class
        require 'Zebra_Pagination.php';

        // instantiate the pagination object
        $pagination = new Zebra_Pagination();

        // set position of the next/previous page links
        $pagination->navigation_position(isset($_GET['navigation_position']) && in_array($_GET['navigation_position'], array('left', 'right')) ? $_GET['navigation_position'] : 'outside');

        if (isset($_GET['direction']) && $_GET['direction'] == 'reversed') $pagination->reverse(true);

        // the number of total records is the number of records in the array
        $pagination->records(count($data));

        // records per page
        $pagination->records_per_page($records_per_page);
        $thisPage = ($pagination->get_page()-1) * $records_per_page;
        // here's the magick: we need to display *only* the records for the current page
        $data = array_slice(
            $data,                                             //  from the original array we extract
            (($pagination->get_page() - 1) * $records_per_page),    //  starting with these records
            $records_per_page                                       //  this many records
        );
        ?>
        <div class="col-sm-1">
            <a href="create_new.php" class="btn btn-xs btn-info"> Create </a>    
        </div>
        <div class="col-sm-6">
            <form action="" method="get">
            <label class="control-label col-sm-1">Filter: </label>
            <div class="col-sm-11">
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="keyword" placeholder="Type Keyword Here" />        
                </div>
                <div class="col-sm-5">
                    <select class="selectpicker form-control" name="field">
                        <?php
                            for($i=0;$i<count($header);$i++){
                                echo '<option value="'.$i.'">'.$header[$i].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="submit" name="search" value="Search" class="btn btn-xs btn-primary"/>        
                </div>
            </div>
            </form>
        </div>
        
        <table class="countries table" border="1" style="margin-top: 10px !important;">

        	<thead>
				<?php
                    echo '<th>Action</th>';
					foreach($header as $key => $value){
                        if($key<27){
                            echo '<th>'.$value.'</th>';    
                        }
					}
				?>
			</thead>
			<tbody>
				<?php
				for($i=0;$i<count($data);$i++){
					echo '<tr>';
                    echo '<td>
                            <a href="update_line.php?update='.($data[$i][27]).'" class="btn btn-xs btn-warning">Edit</a> &nbsp;
                            <a href="?delete='.($data[$i][27]).'" class="btn btn-xs btn-danger">Delete</a> &nbsp;
                            </td>';
                    foreach($data[$i] as $key => $value){
                        if($key==1){
                            echo '<td><a href="detail.php?detail='.$data[$i][27].'">'.$value.'</a></td>';
                        }else if($key<27){
                            echo '<td>'.$value.'</td>';    
                        }
					}					
					echo '</tr>';
				}
				
				?>
			</tbody>
        </table>

        <div class="text-center">
        <?php

        // render the pagination links
        $pagination->render();
        ?>
        </div>

    </body>
</html>
