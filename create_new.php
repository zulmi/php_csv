<html>
	<head>
		<title>Input New Data</title>
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
	</head>
	<body>
		<div class="panel panel-info">
  			<div class="panel-heading"><h5>Input New Data</h5></div>
  			<div class="panel-body">
  				<form class="form-horizontal" action="write.php" method="post">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<div class="form-group">
								<label>ID : </label> 
								<input type="text" class="form-control" name="id" value="-" />	
							</div>
							<div class="form-group">
								<label>Name : </label> 
								<input type="text" name="name" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>ClientTier : </label> 
								<input type="text" name="ClientTier" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>GCPStream : </label> 
								<input type="text" name="GCPStream" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>GCPBusiness : </label> 
								<input type="text" name="GCPBusiness" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>CMGGlobalBU : </label> 
								<input type="text" name="CMGGlobalBU" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>CMGSegmentName : </label> 
								<input type="text" name="CMGSegmentName" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>GlobalControlPoint : </label> 
								<input type="text" name="GlobalControlPoint" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>GCPGeography : </label> 
								<input type="text" name="GCPGeography" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>GlobalRelationshipManagerName : </label> 
								<input type="text" name="GlobalRelationshipManagerName" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>REVENUE FY14 : </label> 
								<input type="text" name="REVENUE_FY14" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>REVENYE FY15X : </label> 
								<input type="text" name="REVENYE_FY15X" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>Deposits_EOP_FY14 : </label> 
								<input type="text" name="Deposits_EOP_FY14" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>Deposits_EOP_FY15x : </label> 
								<input type="text" name="Deposits_EOP_FY15x" class="form-control" value="-"/>	
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>TotalLimits_EOP_FY14 : </label> 
								<input type="text" name="TotalLimits_EOP_FY14" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>TotalLimits_EOP_FY15YTD : </label> 
								<input type="text" name="TotalLimits_EOP_FY15YTD" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>TotalLimits_EOP_FY15x : </label> 
								<input type="text" name="TotalLimits_EOP_FY15x" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>RWA FY15 : </label> 
								<input type="text" name="RWA_FY15" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>RWA FY14 : </label> 
								<input type="text" name="RWA_FY14" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>REV/RWA FY14 : </label> 
								<input type="text" name="REV/RWA_FY14" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>REV/RWA FY15 : </label> 
								<input type="text" name="REV/RWA_FY15" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>NPAT_AllocEq_FY14 : </label> 
								<input type="text" name="NPAT_AllocEq_FY14" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>NPAT_AllocEq_FY15X : </label> 
								<input type="text" name="NPAT_AllocEq_FY15X" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>RegulatoryCapital_AVG_FY15 : </label> 
								<input type="text" name="RegulatoryCapital_AVG_FY15" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>RegulatoryCapital_AVG_FY14 : </label> 
								<input type="text" name="RegulatoryCapital_AVG_FY14" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>ROE FY14 : </label> 
								<input type="text" name="ROE_FY14" class="form-control" value="-"/>	
							</div>
							<div class="form-group">
								<label>ROE FY15 : </label> 
								<input type="text" name="ROE_FY15" class="form-control" value="-"/>	
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<input type="submit" name="save" class="btn btn-sm btn-success" value="Save"/>
						<input type="reset" name="Reset" class="btn btn-sm btn-warning" value="Reset"/>	
					</div>
					
					
				</form>	
  			</div>
		</div>
		
		



</body>
</html>