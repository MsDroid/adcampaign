<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
							</ul>
						</div>
						<div class="col-6 text-end">
							<p class="mb-0">
								&copy; 2022 - <a href="https://thecybertize.com/" class="text-muted">TheCybertize</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
            </div>
	</div>

	<script src="<?php echo $site_url;?>js/app.js"></script>
	<script src="https://kit.fontawesome.com/bb74ce6b04.js" crossorigin="anonymous"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
						"Dec"
					],
					datasets: [{
						label: "Last year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .325,
						categoryPercentage: .5
					}, {
						label: "This year",
						backgroundColor: window.theme["primary-light"],
						borderColor: window.theme["primary-light"],
						hoverBackgroundColor: window.theme["primary-light"],
						hoverBorderColor: window.theme["primary-light"],
						data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
						barPercentage: .325,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					cornerRadius: 15,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							ticks: {
								stepSize: 20
							},
							stacked: true,
						}],
						xAxes: [{
							gridLines: {
								color: "transparent"
							},
							stacked: true,
						}]
					}
				}
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			$("#datetimepicker-dashboard").datetimepicker({
				inline: true,
				sideBySide: false,
				format: "L"
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Direct", "Affiliate", "E-mail", "Other"],
					datasets: [{
						data: [2602, 1253, 541, 1465],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							"#E8EAED"
						],
						borderWidth: 5,
						borderColor: window.theme.white
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					cutoutPercentage: 70,
					legend: {
						display: false
					}
				}
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			$("#datatables-dashboard-projects").DataTable({
				pageLength: 6,
				lengthChange: false,
				bFilter: false,
				autoWidth: false
			});
		});
	</script>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script>
	function singleImg(){
		$('#mi').css("display","none");
		$('#si').css("display","block");
	}

	function multiImg(){
		$('#si').css("display","none");
		$('#mi').css("display","block");
	}
</script>

<script>
        $(".d1").dropzone({
            addRemoveLinks: true,
            maxFiles: 1,
            dictDefaultMessage: '<img src="drop.png" style="width: 23%;"></img> <br><br> Drag And Drop Or Click here to upload Product Image',
            acceptedFiles: 'image/*',
            init: function() {
                this.on('success', function( file, resp ){});
            },    
        })
    </script>
    <script>
        $(".d2").dropzone({
            addRemoveLinks: true,
            maxFiles: 7,
            dictDefaultMessage: '<img src="drop.png" style="width: 23%;"></img> <br><br> Drag And Drop Or Click here to upload Product Image (Upto 5 Images)',
            acceptedFiles: 'image/*',
            init: function() {
                this.on('success', function( file, resp ){});
            },    
        })
    </script>


<script>
	$(document).ready(function(){
		$('#cc').click(function(){
			let title = $('#title').val()
			let desc = $('#desc').val()
			let link = $('#link').val()
			let media_no = $('#media_no').val()

			if(title != '' && desc != '' && link != ''){
				let dataString = 'title=' + title + '&desc=' + desc + '&link=' + link + '&media_no=' + media_no
				$.ajax({
					url:"api/create-campaign.php",
					method:'post',
					data: dataString,
					success:function(r){
						if(r == 'true'){
							alert("Successfully Campaign Created !");
							window.location.href = 'ad-plan.php';
						}else if(r == 'false'){
							alert("Please try again !!");
						}
					}
				})
			}else{
				alert("Please enter title, desc and link");
			}
		})
	});
</script>

</body>

</html>