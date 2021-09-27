<?php include_once('header.php'); ?>
	    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel_flat" id="dialogbx_flat">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="gridSystemModalLabel_flat" style="color: #FFFFFF"></h4>
					</div>
					<div class="modal-body">
						<div class="col-sm-12">
							<h4 style="line-height: 28px;">
								<b>Only a single application has to be registered in case of flats and only a single water/ sewer connection 
								will be provided for a group of flats housed in one block.</b>
							</h4>
						</div>
						<div class="col-sm-12">
								<br>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							OK
						</button>
					</div>			
				</div>
			</div>
		</div>
		<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel_sewer_aa" id="dialogbx_sewer_aa">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="gridSystemModalLabel_sewer_aa" style="color: #FFFFFF"></h4>
					</div>
					<div class="modal-body">
						<div class="col-sm-12">
							<h4 style="line-height: 28px;" align="left">
								<b>
									For Single Assessement in "Ground + Two Floors &amp; Below Category" shoule be apply to this following link. 
									<br>
									<a href="https://alaithal-inaipu.chennaimetrowater.in/">https://alaithal-inaipu.chennaimetrowater.in</a>
								</b>
							</h4>
						</div>
						<div class="col-sm-12">
								<br>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							OK
						</button>
					</div>			
				</div>
			</div>
		</div>
		<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel_sewer_aa2" id="dialogbx_sewer_aa2">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="gridSystemModalLabel_sewer_aa2" style="color: #FFFFFF"></h4>
					</div>
					<div class="modal-body">
						<div class="col-sm-12">
							<h4 style="line-height: 28px;" align="left">
								<b>
									For Single Assessement in "Ground + Two Floors &amp; Below 
									Category" shoule be apply seperately for water individually &amp; sewer 
									connection by <a href="https://alaithal-inaipu.chennaimetrowater.in/">https://alaithal-inaipu.chennaimetrowater.in</a>

								</b>
							</h4>
						</div>
						<div class="col-sm-12">
								<br>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							OK
						</button>
					</div>			
				</div>
			</div>
		</div>
		
		<div class="container my-auto">
		   <div class="row" style="float: right;padding-right: 0px;">
				<a class="btn btn-primary" href="https://new-connection.chennaimetrowater.in/login.html">Login</a> &nbsp;&nbsp; <a class="btn btn-primary" href="https://new-connection.chennaimetrowater.in/status-login.html">Application Status</a>
				<!-- <br /><br />
				<img src="images/cm.jpg" height="250" width="230"/> -->
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-info">
						<div class="panel-heading">
							<strong>What's New</strong>
						</div>
						<div class="panel-body">
						<ul class="whats-new">
							<li><a href="https://youtu.be/xySO72scM2U" target="_blank">
								<b>Chennai Metro Water has launched preventive maintenance and mass desilting operation of the entire sewerage network
								<img src="static/blinking_new.gif"></b></a>
							</li>
							<li><a href="http://122.183.188.248:8080/CMWSSB-web/onlineMonitoringSystem/waterLevel" target="_blank">
								<b>Status of Ground Water Level, Rain Fall, Lake Storage
								<img src="static/blinking_new.gif"></b></a> 
							</li>
							<li>
								<a href="pdf/ESSA13April2021.pdf" target="_blank">
								<b>Environmental and Social Systems Assessment Report March 2021
								<img src="static/blinking_new.gif"></b></a> 
							</li>    
						</ul>
						</div>
					</div>
				</div>
				<form id="input_1" action="termscon.php" method="post">
					<br>
					<br>
					<br>
					<div class="main-login main-center">
						<div class="form-group">
							<input type="hidden" name="application_id" id="application_id">
							<input type="hidden" name="annual_val" id="annual_val">
							<input type="hidden" name="cus_name" id="cus_name">
							<!-- <input type="hidden" name="cus_address" id="cus_address"/> -->
							<input type="hidden" name="cus_door_no" id="cus_door_no">
							<input type="hidden" name="cus_street_name" id="cus_street_name">
							<input type="hidden" name="cus_location" id="cus_location">
							<input type="hidden" name="cus_pincode" id="cus_pincode">
							<input type="hidden" name="cmc_number" id="cmc_number">
							<div class="form-group" id="con_type_div">
								<b>Connection Type <span style="color:red">*</span>: </b>
								<br>
								<input type="radio" name="conn_type" id="water_conn" value="water">
								Water
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="conn_type" value="sewer">
								Sewer
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="conn_type" value="both">
								Both
							</div>
							<div class="form-group" id="step1">
								<b>Whether the Building is assessed or not ? <span style="color:red">*</span> :</b>
								<br>
								<input type="radio" name="cmc_pp" value="yes">
								YES &nbsp;&nbsp;&nbsp;
								<input type="radio" name="cmc_pp" value="no">
								No
							</div>
							<div class="form-group" id="area_div" style="display: none;">
								<label for="corporationZone ">Corporation Zone/Metro Water Area
								<span style="color:red">*</span> : </label>
								<div class="tooltipt">
									<img src="static/icon_ques.png" width="25" height="25">
									<span class="tooltiptext">Please select the relevant Area as 
per the CMWSSB or Zone as per the Greater Chennai Corporation (GCC) in 
which the buiding is constructed.</span>
								</div> 
								<select id="area" name="area" data-placeholder="" class="form-control" style="width:280px;">    <option value="" selected="selected">Please Select</option><option value="01">01 - Thiruvotriyur</option><option value="02">02 - Manali</option><option value="03">03 - Madhavaram</option><option value="04">04 - Tondiarpet</option><option value="05">05 - Royapuram</option><option value="06">06 - Thiru. Vi. Ka. Nagar</option><option value="07">07 - Ambattur</option><option value="08">08 - Anna Nagar</option><option value="09">09 - Teynampet</option><option value="10">10 - Kodambakkam</option><option value="11">11 - Valasaravakkam</option><option value="12">12 - Alandur</option><option value="13">13 - Adyar</option><option value="14">14 - Perungudi</option><option value="15">15 - Sholinganallur</option></select>
							</div>
							<div class="form-group" id="depot_div" style="display: none;">
								<label for="Depot ">Depot  No./Division No.
								<span style="color:red">*</span> : </label>
								<div class="tooltipt">
									<img src="static/icon_ques.png" width="25" height="25">
									<span class="tooltiptext">Please select the relevant Depot as 
per the CMWSSB or Division as per the Greater Chennai Corporation (GCC) 
 in which the buiding is constricted.</span>
								</div>
								<select id="depot" name="depot" data-placeholder="" class="form-control" style="width:280px;">
									<option value="" selected="selected">Please Select</option>
								</select>
							</div>
							<div class="form-group" id="step3" style="display: none;">
								<label for="pro_tax">Please Enter Bill no as per Property tax Assessment.<span style="color:red">*</span>:</label>
								<a href="#" class="tooltipnm"> <img src="static/icon_ques.png" width="25" height="25"> <span> <img src="static/PT.jpeg" width="450" height="550"> </span> </a>
								<input type="text" class="form-control" name="cmc_no" id="cmc_no" placeholder="Bill No.">
							</div>
							<div class="form-group" id="category_div">
								<label for="TypeofInputForms ">Please select Category 
								<span style="color:red">*</span>: </label>
								<div class="tooltipt">
										<img src="static/icon_ques.png" width="25" height="25">
										<span class="tooltiptext">Please select the appropriate category of the building as applicable</span>
									</div>
									<select class="form-control" name="typeof_inputforms" id="typeof_inputforms">
										<option value="0" selected="selected">*Please Select*</option>
										<optgroup style="color: #FF0000;" label="Residential(Single Assessment)">
											<option style="color: #003171;" value="1">Independent Houses - Upto 46.47 sq m.(500 Sq ft.)</option>
											<option style="color: #003171;" value="2">Independent Houses - Ground or Ground+One Floor or Stilt+One Floor(Above 46.47 Upto 100 sq m.)</option>
											<option style="color: #003171;" value="3">Independent Houses - Ground or Ground+One Floor or Stilt+One Floor(Above 100 sq m.)</option>
											<option style="color: #003171;" value="4">Independent Buildings - Ground+Two Floors or Stilt+Two Floors</option>
										</optgroup>
										<optgroup style="color: #FF0000;" label="Residential(Multiple Assessment)">
											<option style="color: #003171;" value="5">Flats Upto Ground + Two Floors</option>
										</optgroup>
										<optgroup style="color: #FF0000;" label="Non-Residential">
											<option style="color: #003171;" value="6">Single Assessment (Commercial, Institutional)</option>
											<option style="color: #003171;" value="7">Multiple Assessment (Commercial, Institutional)</option>
										</optgroup>
										<optgroup style="color: #FF0000;" label="Mixed use of Buildings">
											<option style="color: #003171;" value="8">Single Assessment (partly residential and party commercial etc.)</option>
											<option style="color: #003171;" value="9">Multiple Assessment (partly residential and party commercial etc.)</option>
										</optgroup>
									</select>
							</div>
						</div>
						<div class="form-group" id="proceed" align="center">
							<button type="button" id="ok" class="btn btn-primary" style="padding:5px 38px">
								<b>Proceed</b>
							</button>
						</div>
					</div>
					<br><br><br>
					<div class="form-group" align="center">
						<b>Your online Water / Sewer Connection Fee Payment Receipt will be generated within 24 Hours.</b>
					</div>
					<div class="form-group" align="center">
						<b>If you want know your application and payment status, Pleae click "Application Status" button.</b>
					</div>
					<div class="form-group" align="center">
						<b>For queries, please contact us via email "regncmwssb@gmail.com"</b>
					</div>
				</form>
				<br>
			</div>
		</div>
		<div class="row">
			<div id="loading" style="display: none;opacity:0.8;background-color:#ccc;position:fixed;width:100%;height:100%;top:0px;left:00px;z-index:1000;">
				<!-- <img width="350px" height="200px" style="padding-top: 15%;padding-left: 35%" src="images/loading-bar.gif" /> -->
				<span style="padding-right: 100px">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Loading, Please wait!</span>
			</div>
			<br>
		</div>
		

<?php include_once('footer.php') ;?>		