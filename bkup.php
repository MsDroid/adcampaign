<?php 
include 'constant-inc.php';

$site_url = base_url();
// echo $site_url;

if($_SESSION['name'] == ''){
	redirect('sign-in.php');
}
?>

		<?php include 'include/sidebar.php'; ?>
		<div class="main">
			<?php include 'include/header.php';?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3>Add Campaign</h3>
						</div>
                    </div>
					<div class="row">
						insert page here
					</div>
                </div>
			</main>

			<?php include 'include/footer.php'; ?>
		