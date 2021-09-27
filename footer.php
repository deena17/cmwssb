<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 text-center">
						<p>Site last updated: 27/08/2021 03:00</p>
					</div>
					<div class="col-md-6 text-center">
						<p style="text-align:center">
							This website works well with latest versions of browsers like Internet Explorer,
							Chrome, Safari and Mozilla FireFox & Comfortable Screen Resolution 1366x768
						</p>
						<ul class="footer-policy">
							<li><a href="disclaimer.php">Disclaimer</a></li>
							<li><a href="privacy_policy.php">Privacy and Copyright Policy</a></li>
							<li><a href="terms_of_use.php">Terms of Use</a></li>
							<li><a href="feedback.php">Feedback</a></li>
							<li>
							<a target="_blank" href="https://www.w3.org/">
								<img src="static/w3c_home.png" alt="W3C Logo" height="20" width="30" >
							</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 text-center">
						<p><strong>Visitor Count</strong></p>
						<?php include_once('counter.php'); ?>
					</div>
				</div>	
				<hr>
				<div class="row">
					<div class="col-md-12" style="padding:10px">
						<span>© 2019 CMWSSB All Rights Reserved.</span>
						<span style="float: right">Designed &amp; Developed by <b>Broadline</b></span>
					</div>
				</div>
			</div>
		</footer>
		<script src="static/jquery.js"></script>
		<script src="static/bootstrap.js"></script>
		<script src="static/index.js"></script>
		<script src="static/accessibility.js"></script>
		<script>
			function display_ct7() {
				var x = new Date()
				var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
				hours = x.getHours( ) % 12;
				hours = hours ? hours : 12;
				hours=hours.toString().length==1? 0+hours.toString() : hours;

				var minutes=x.getMinutes().toString()
				minutes=minutes.length==1 ? 0+minutes : minutes;

				var seconds=x.getSeconds().toString()
				seconds=seconds.length==1 ? 0+seconds : seconds;

				var month=(x.getMonth() +1).toString();
				month=month.length==1 ? 0+month : month;

				var dt=x.getDate().toString();
				dt=dt.length==1 ? 0+dt : dt;

				var x1=dt + "/" + month + "/" + x.getFullYear();
				x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
				document.getElementById('date').innerHTML = x1;
				display_c7();
				}
				function display_c7(){
				var refresh=1000; // Refresh rate in milli seconds
				mytime=setTimeout('display_ct7()',refresh)
				}
				display_c7()
		</script>
		<script>
			(function() {
				var cx = '015657111769868842794:m5ia3xoux-m';
				var gcse = document.createElement('script');
				gcse.type = 'text/javascript';
				gcse.async = true;
				gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(gcse, s);
			})();
        </script>
	</body>
</html>