$(document).ready(function() {
	$.ajax({
		url : "ajax.php",
		async : false,
		type : 'POST',
		cache : false,
		dataType: 'json',
		data : {
			action : "get_area"
		},
		success : function(response) {
			$("#area").html(response.ddl);	
		}
	});
	$('#cmc_no').bind('keyup', 'keydown', function(event) {
		var inputLength = event.target.value.length;
		if (event.keyCode != 8) {
			if (inputLength === 2 || inputLength === 6 || inputLength === 12) {
				var thisVal = event.target.value;
				thisVal += '/';
				$(event.target).val(thisVal);
			}
		}
	});
});

$("#typeof_inputforms").change(function() {
	var conn_type = $("input[name='conn_type']:checked").val();
	if($(this).val() == 5){
		$("#gridSystemModalLabel_flat").text("Instruction");
		$('#dialogbx_flat').modal('toggle');
		$("#ok").attr("disabled", false);
	} else if($(this).val() <= 4 || $(this).val() == 6 || $(this).val() == 8){
		if(conn_type == 'sewer'){
			$("#gridSystemModalLabel_sewer_aa").text("Instruction");
			$('#dialogbx_sewer_aa').modal('toggle');
			$("#typeof_inputforms").val('0');
			$("#ok").attr("disabled", true);
		} else if (conn_type == 'both'){
			$("#gridSystemModalLabel_sewer_aa2").text("Instruction");
			$('#dialogbx_sewer_aa2').modal('toggle');
			$("#typeof_inputforms").val('0');
			$("#ok").attr("disabled", true);
		} else {
			if(conn_type == '' || conn_type == undefined){
				alert("Please select the Connection type");
				$("#typeof_inputforms").val('0');
				$("#ok").attr("disabled", true);
			}
		}
		
	} else {
		$("#ok").attr("disabled", false);
	}
});
$("input[name='conn_type']").click(function() {
	$("#typeof_inputforms").val('0');
});

$("#area").change(function() {
	$.ajax({
		url : "ajax.php",
		async : false,
		type : 'POST',
		cache : false,
		dataType: 'json',
		data : {
			action : "get_depot",
			area : this.value
		},
		success : function(response) {
			$("#depot").html(response.ddl);	
		}
	});
});
$('input[type=radio][name=cmc_pp]').change(function() {
	if (this.value == 'yes') {
		$("#step3").show();
		$("#pro_bill_no").show();
		$("#depot_div").hide();
		$("#area_div").hide();
	} else if (this.value == 'no') {
		$("#step3").hide();
		$("#pro_bill_no").hide();
		$("#depot_div").show();
		$("#area_div").show();
	}
});
$("#ok").click(function() {
	
	var conn_type = $("input[name='conn_type']:checked").val();
	var if_cmc = $("input[name='cmc_pp']:checked").val();
	var category = $("#typeof_inputforms").val();
	if((conn_type == 'both' || conn_type == 'sewer') && (category <= 4 || category == 6 || category == 8)){
		alert("Invalid Request");
		return false;
	}
	if(if_cmc == 'yes'){
		var cmc_no = $("#cmc_no").val();
		cmc_no = cmc_no.replace(new RegExp('/', 'g'), "");
		if(cmc_no == "" || cmc_no.length != 13){
			alert("Invalid CMC No");
			return false;
		}
		// alert("Server unavailable, Please try again after sometime.");
		// return false;
		var depot = cmc_no.substr(2, 3);
		var area = cmc_no.substr(0, 2);
	} else {
		var depot = $("#depot").val();
		var area = $("#area").val();
		var cmc_no = '';
	}
	if(conn_type == "" || conn_type == undefined || depot == "" || area == "" || category == 0){
		alert("Field should not be Empty");
		// console.log("sdvd");
	} else {
		$.ajax({
			url : "ajax.php",
			async : false,
			type : 'POST',
			cache : false,
			data : {
				action : "get_depot_avail",
				depot : depot,
				cmc_no : cmc_no,
				conn_type : conn_type
			},
			success : function(response) {
				var res = response.split("@");
				if(res[3] == 't' && conn_type.trim() != "water"){
					alert("For Sewer Connection, Please contact your Depot Engineer.");
					return false;
				} else  if(res[0] == 0 && res[1] == 0){
					alert("Water and Sewer Connection not available in your Location");
					return false;
				} else if(res[0] == 0 && res[1] == 1 && conn_type.trim() != "sewer"){
					alert("Sewer Connection only available for your Location");
					return false;
				} else if(res[0] == 1 && res[1] == 0 && conn_type.trim() != "water"){
					alert("Water Connection only available for your Location");
					return false;
				} else if(res[2] == 1) {
					alert("You have already applied.");
					return false;
				} else {
					if (if_cmc == 'yes') {
						get_arrear_status(conn_type,cmc_no,category,depot);
					} else {
						submit_form(conn_type,category,area,depot);
					}
				}
				
			}
		});
	}
});
function get_arrear_status(conn_type,cmc_number,category,depot){
	$("#loading").show();
	$.ajax({
		url : "ajax.php",
		async : true,
		data : {
		action : 'get_details',
		cmc_number : cmc_number
	},
	success : function(res) {
		var main_data = $.parseJSON(res);
		if (main_data['result'] == 'No Customer Found') {
			alert(main_data['result']);
			$("#loading").hide();
			return false;
		} else if (main_data['result'] == 'Server too busy. Please try again after sometime.') {
			alert(main_data['result']);
			$("#loading").hide();
			return false;
		} else {
			if (main_data.arrearAmount != 0) {
				alert("CMWSSB arrear amount pending, Please clear your arrears to proceed with New Connection Registration.");
				$("#loading").hide();
				return false;
			} else {
				$("#annual_val").val(main_data.annualValue);
				$("#cus_name").val(main_data.customerName);
				$("#cus_door_no").val(main_data.door_no);
				$("#cus_street_name").val(main_data.street_name);
				$("#cus_location").val(main_data.location);
				$("#cus_pincode").val(main_data.pincode);
				$("#area").val(main_data.area);
				$("#depot").val(depot);
				$("#cmc_number").val(main_data.cmc_no);
				$("#loading").hide();
				$.ajax({
					url : "ajax.php",
					type : 'POST',
					async : false,
					data : {
						action : "insert_form2",
						conn_type : conn_type,
						category : category,
						annual_val : main_data.annualValue,
						customerName : main_data.customerName,
						custDoorno : main_data.door_no,
						custStreetname : main_data.street_name,
						custLocation : main_data.location,
						custPincode : main_data.pincode,
						counterCategory : main_data.counterCategory,
						catID : main_data.catID,
						classID : main_data.classID,
						area : main_data.area,
						division : main_data.division,
						cmc_no : main_data.cmc_no
	
					},
					success : function(response) {
						if (response.trim() != "failure") {
							//UPDATED BY CHAITANYA
							$("#application_id").val(response.trim());
							$("#input_1").submit();
						} else {
							alert("Error!");
						}
					}
				});
			  }
			}
		}
	});
	
} 

function submit_form(conn_type,category,area,depot){
	$.ajax({
		url : "ajax.php",
		type : 'POST',
		async : false,
		data : {
			action : "insert_form",
			conn_type : conn_type,
			category : category,
			area : area,
			depot : depot
		},
		success : function(response) {
			if (response.trim() != "failure") {
				$("#application_id").val(response.trim());
				$("#input_1").submit();
			} else {
				alert("Error!");
			}
		}
	});
}
