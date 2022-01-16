<?php 
include 'constant-inc.php';
$conn = connect();
$site_url = base_url();
// echo $site_url;
$count = 0;
if($_SESSION['name'] == ''){
	redirect('sign-in.php');
}

if($_SESSION['role'] == 'CST'){
	$user_id = $_SESSION['uid'];
	$sql = "SELECT * From campaign WHERE uid = '$user_id'";
	$query = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);
}

?>

		<?php include 'include/sidebar.php'; ?>
		<div class="main">
			<?php include 'include/header.php';?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3>Dashboard</h3>
						</div>

						
					</div>
					<div class="row">
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card illustration flex-fill">
								<div class="card-body p-0 d-flex flex-fill">
									<div class="row g-0 w-100">
										<div class="col-6">
											<div class="illustration-text p-3 m-1">
												<h4 class="illustration-text">Welcome Back, <?php echo $_SESSION['name'];?>!</h4>
												<p class="mb-0">Dashboard</p>
											</div>
										</div>
										<div class="col-6 align-self-end text-end">
											<img src="img/illustrations/customer-support.png" alt="Customer Support"
												class="img-fluid illustration-img">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h3 class="mb-2"><?php echo $count; ?></h3>
											<p class="mb-2">Total Campaign</p>
											<!-- <div class="mb-0">
												<span class="badge badge-soft-success me-2"> +5.35% </span>
												<span class="text-muted">Since last week</span>
											</div> -->
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-success" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					<?php if($_SESSION['role'] == 'ADM'){ ?>

						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h3 class="mb-2">43</h3>
											<p class="mb-2">Pending Orders</p>
											<div class="mb-0">
												<span class="badge badge-soft-danger me-2"> -4.25% </span>
												<span class="text-muted">Since last week</span>
											</div>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-danger" data-feather="shopping-bag"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h3 class="mb-2">$ 18.700</h3>
											<p class="mb-2">Total Revenue</p>
											<div class="mb-0">
												<span class="badge badge-soft-success me-2"> +8.65% </span>
												<span class="text-muted">Since last week</span>
											</div>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-info" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php } ?>

					<div class="card flex-fill">
						<div class="card-header">
							<div class="card-actions float-end">
								<!-- <div class="dropdown position-relative">
									<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
										<i class="align-middle" data-feather="more-horizontal"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</div> -->
							</div>
							<h5 class="card-title mb-0">Latest Campaign</h5>
						</div>
						<table id="datatables-dashboard-projects" class="table table-striped my-0">
							<thead>
								<tr>
									<th>Title</th>
									<th class="d-none d-xl-table-cell">Image</th>
									<th class="d-none d-xl-table-cell">Link</th>
									<th>Status</th>
									<th class="d-none d-md-table-cell">User</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$user_role =$_SESSION['role'];
									if($user_role == 'ADM'){
										$c_sql = "SELECT * FROM campaign";
									}elseif($user_role == 'CST'){
										$uid = $_SESSION['uid'];
										$c_sql = "SELECT * FROM campaign where uid = '$uid'";
									}
									
									$query = mysqli_query($conn, $c_sql);
									$count = mysqli_num_rows($query);

									if($count > 0){
										while($row = mysqli_fetch_assoc($query)){ ?>
											<tr>
												<td><?php echo $row['title'] ?></td>
												<td class="d-none d-xl-table-cell">01/01/2021</td>
												<td class="d-none d-xl-table-cell">31/06/2021</td>
												<td><span class="badge bg-success">Done</span></td>
												<td class="d-none d-md-table-cell">Carl Jenkins</td>
											</tr>
										<?php	
										}
									}
								?>
								
							</tbody>
						</table>
					</div>
				</div>
			</main>

			<?php include 'include/footer.php'; ?>
		