<?php
	session_start();
	require "reader.php";
	$updateRow = -1;
	$lines = file('companies.csv', FILE_IGNORE_NEW_LINES);
	//ambil data
	$updateRow = isset($_POST['updateID']) ? $_POST['updateID'] : -1; 
	$id = isset($_POST['id']) ? $_POST['id'] : '-';
	$name = isset($_POST['name']) ? $_POST['name'] : '-';
	$ClientTier = isset($_POST['ClientTier']) ? $_POST['ClientTier'] : '-';
	$GCPStream = isset($_POST['GCPStream']) ? $_POST['GCPStream'] : '-';
	$GCPBusiness = isset($_POST['GCPBusiness']) ? $_POST['GCPBusiness'] : '-';
	$CMGGlobalBU = isset($_POST['CMGGlobalBU']) ? $_POST['CMGGlobalBU'] : '-';
	$CMGSegmentName = isset($_POST['CMGSegmentName']) ? $_POST['CMGSegmentName'] : '-';
	$GlobalControlPoint = isset($_POST['GlobalControlPoint']) ? $_POST['GlobalControlPoint'] : '-';
	$REVENUE_FY14 = isset($_POST['REVENUE_FY14']) ? $_POST['REVENUE_FY14'] : '-';
	$REVENYE_FY15X = isset($_POST['REVENYE_FY15X']) ? $_POST['REVENYE_FY15X'] : '-';
	$Deposits_EOP_FY14 = isset($_POST['Deposits_EOP_FY14']) ? $_POST['Deposits_EOP_FY14'] : '-';
	$Deposits_EOP_FY15x = isset($_POST['Deposits_EOP_FY15x']) ? $_POST['Deposits_EOP_FY15x'] : '-';
	$TotalLimits_EOP_FY14 = isset($_POST['TotalLimits_EOP_FY14']) ? $_POST['TotalLimits_EOP_FY14'] : '-';
	$TotalLimits_EOP_FY15YTD = isset($_POST['TotalLimits_EOP_FY15YTD']) ? $_POST['TotalLimits_EOP_FY15YTD'] : '-';
	$TotalLimits_EOP_FY15x = isset($_POST['TotalLimits_EOP_FY15x']) ? $_POST['TotalLimits_EOP_FY15x'] : '-';
	$RWA_FY15 = isset($_POST['RWA_FY15']) ? $_POST['RWA_FY15'] : '-';
	$RWA_FY14 = isset($_POST['RWA_FY14']) ? $_POST['RWA_FY14'] : '-';
	$REVRWA_FY14 = isset($_POST['REV/RWA_FY14']) ? $_POST['REV/RWA_FY14'] : '-';
	$REVRWA_FY15 = isset($_POST['REV/RWA_FY15']) ? $_POST['REV/RWA_FY15'] : '-';
	$NPAT_AllocEq_FY14 = isset($_POST['NPAT_AllocEq_FY14']) ? $_POST['NPAT_AllocEq_FY14'] : '-';
	$NPAT_AllocEq_FY15X = isset($_POST['NPAT_AllocEq_FY15X']) ? $_POST['NPAT_AllocEq_FY15X'] : '-';
	$RegulatoryCapital_AVG_FY15 = isset($_POST['RegulatoryCapital_AVG_FY15']) ? $_POST['RegulatoryCapital_AVG_FY15'] : '-';
	$RegulatoryCapital_AVG_FY14 = isset($_POST['RegulatoryCapital_AVG_FY14']) ? $_POST['RegulatoryCapital_AVG_FY14'] : '-';
	$ROE_FY14 = isset($_POST['ROE_FY14']) ? $_POST['ROE_FY14'] : '-';
	$ROE_FY15 = isset($_POST['ROE_FY15']) ? $_POST['ROE_FY15'] : '-';

	
	$lines[$updateRow] = "{$id}, {$name}, {$ClientTier}, {$GCPStream}, {$GCPBusiness}, {$CMGGlobalBU}, {$CMGSegmentName}, {$GlobalControlPoint}, {$REVENUE_FY14}, {$REVENYE_FY15X}, {$Deposits_EOP_FY14}, {$Deposits_EOP_FY15x}, {$TotalLimits_EOP_FY14}, {$TotalLimits_EOP_FY15YTD}, {$TotalLimits_EOP_FY15x}, {$RWA_FY15}, {$RWA_FY14}, {$REVRWA_FY14}, {$REVRWA_FY15}, {$NPAT_AllocEq_FY14}, {$NPAT_AllocEq_FY15X}, {$RegulatoryCapital_AVG_FY15}, {$RegulatoryCapital_AVG_FY14}, {$ROE_FY14}, {$ROE_FY15}";
	// Create the string to write to the file
	$data_string = implode("\n",$lines);
	// Write the string to the file, overwriting the current contents
	
	$f = fopen('companies.csv','w');
	$write = fwrite($f,$data_string);
	if ($write) {
		$_SESSION['message'] = 'Data Saved.';
	} else {
		$_SESSION['message'] = 'Data not Saved.';	
	}
	fclose($f);
	header('Location: http://localhost/eaciit');

?>