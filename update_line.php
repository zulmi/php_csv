<html>
	<head>
		<title>Update Data</title>
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
	</head>
	<body>
		<?php
			require "reader.php";
			$updateRow = -1;
			$data = getArray();
			$lines = file('companies.csv', FILE_IGNORE_NEW_LINES);

			if(isset($_GET['update'])){
				$updateRow = $_GET['update'];
				$arr = $data["$updateRow"];

			}
		?>
		<div class="panel panel-info">
  			<div class="panel-heading"><h5>Update Data</h5></div>
  			<div class="panel-body">
  				<form class="form-horizontal" action="update.php" method="post">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group">
								<label>ID : </label> 
								<input type="text" class="form-control" name="id" value="<?php print_r($arr[0]); ?>" />	
								<input type="hidden" name="updateID" value="<?php echo $updateRow; ?>">
							</div>
							<div class="form-group">
								<label>Name : </label> 
								<input type="text" name="name" class="form-control" value="<?php echo $arr[1]; ?>"/>	
							</div>
							<div class="form-group">
								<label>ClientTier : </label> 
								<input type="text" name="ClientTier" class="form-control" value="<?php echo $arr[2]; ?>"/>	
							</div>
							<div class="form-group">
								<label>GCPStream : </label> 
								<input type="text" name="GCPStream" class="form-control" value="<?php echo $arr[3]; ?>"/>	
							</div>
							<div class="form-group">
								<label>GCPBusiness : </label> 
								<input type="text" name="GCPBusiness" class="form-control" value="<?php echo $arr[4]; ?>"/>	
							</div>
							<div class="form-group">
								<label>CMGGlobalBU : </label> 
								<input type="text" name="CMGGlobalBU" class="form-control" value="<?php echo $arr[5]; ?>"/>	
							</div>
							<div class="form-group">
								<label>CMGSegmentName : </label> 
								<input type="text" name="CMGSegmentName" class="form-control" value="<?php echo $arr[6]; ?>"/>	
							</div>
							<div class="form-group">
								<label>GlobalControlPoint : </label> 
								<input type="text" name="GlobalControlPoint" class="form-control" value="<?php echo $arr[7]; ?>"/>	
							</div>
							<div class="form-group">
								<label>GCPGeography : </label> 
								<input type="text" name="GCPGeography" class="form-control" value="<?php echo $arr[8]; ?>"/>	
							</div>
							<div class="form-group">
								<label>GlobalRelationshipManagerName : </label> 
								<input type="text" name="GlobalRelationshipManagerName" class="form-control" value="<?php echo $arr[9]; ?>"/>	
							</div>
							<div class="form-group">
								<label>REVENUE FY14 : </label> 
								<input type="text" name="REVENUE_FY14" class="form-control" value="<?php echo $arr[10]; ?>"/>	
							</div>
							<div class="form-group">
								<label>REVENYE FY15X : </label> 
								<input type="text" name="REVENYE_FY15X" class="form-control" value="<?php echo $arr[11]; ?>"/>	
							</div>
							<div class="form-group">
								<label>Deposits_EOP_FY14 : </label> 
								<input type="text" name="Deposits_EOP_FY14" class="form-control" value="<?php echo $arr[12]; ?>"/>	
							</div>
							<div class="form-group">
								<label>Deposits_EOP_FY15x : </label> 
								<input type="text" name="Deposits_EOP_FY15x" class="form-control" value="<?php echo $arr[13]; ?>"/>	
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>TotalLimits_EOP_FY14 : </label> 
								<input type="text" name="TotalLimits_EOP_FY14" class="form-control" value="<?php echo $arr[14]; ?>"/>	
							</div>
							<div class="form-group">
								<label>TotalLimits_EOP_FY15YTD : </label> 
								<input type="text" name="TotalLimits_EOP_FY15YTD" class="form-control" value="<?php echo $arr[15]; ?>"/>	
							</div>
							<div class="form-group">
								<label>TotalLimits_EOP_FY15x : </label> 
								<input type="text" name="TotalLimits_EOP_FY15x" class="form-control" value="<?php echo $arr[16]; ?>"/>	
							</div>
							<div class="form-group">
								<label>RWA FY15 : </label> 
								<input type="text" name="RWA_FY15" class="form-control" value="<?php echo $arr[17]; ?>"/>	
							</div>
							<div class="form-group">
								<label>RWA FY14 : </label> 
								<input type="text" name="RWA_FY14" class="form-control" value="<?php echo $arr[18]; ?>"/>	
							</div>
							<div class="form-group">
								<label>REV/RWA FY14 : </label> 
								<input type="text" name="REV/RWA_FY14" class="form-control" value="<?php echo $arr[19]; ?>"/>	
							</div>
							<div class="form-group">
								<label>REV/RWA FY15 : </label> 
								<input type="text" name="REV/RWA_FY15" class="form-control" value="<?php echo $arr[20]; ?>"/>	
							</div>
							<div class="form-group">
								<label>NPAT_AllocEq_FY14 : </label> 
								<input type="text" name="NPAT_AllocEq_FY14" class="form-control" value="<?php echo $arr[21]; ?>"/>	
							</div>
							<div class="form-group">
								<label>NPAT_AllocEq_FY15X : </label> 
								<input type="text" name="NPAT_AllocEq_FY15X" class="form-control" value="<?php echo $arr[22]; ?>"/>	
							</div>
							<div class="form-group">
								<label>RegulatoryCapital_AVG_FY15 : </label> 
								<input type="text" name="RegulatoryCapital_AVG_FY15" class="form-control" value="<?php echo $arr[23]; ?>"/>	
							</div>
							<div class="form-group">
								<label>RegulatoryCapital_AVG_FY14 : </label> 
								<input type="text" name="RegulatoryCapital_AVG_FY14" class="form-control" value="<?php echo $arr[24]; ?>"/>	
							</div>
							<div class="form-group">
								<label>ROE FY14 : </label> 
								<input type="text" name="ROE_FY14" class="form-control" value="<?php echo $arr[25]; ?>"/>	
							</div>
							<div class="form-group">
								<label>ROE FY15 : </label> 
								<input type="text" name="ROE_FY15" class="form-control" value="<?php echo $arr[26]; ?>"/>	
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<input type="submit" name="updateData" class="btn btn-sm btn-success" value="Update"/>
					</div>
					
					
				</form>	
  			</div>
		</div>

</body>
</html>