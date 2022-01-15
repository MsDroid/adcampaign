<?php 
include 'constant-inc.php';

$site_url = base_url();
// echo $site_url;

if($_SESSION['name'] == ''){
	redirect('sign-in.php');
}

if($_GET['plan'] && $_GET['price'] != ''){
    $plan = $_GET['plan'];
    $price = $_GET['price'];
}

?>

<?php include 'include/sidebar.php'; ?>
<div class="main">
    <?php include 'include/header.php';?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <!-- <h3>Campaign</h3> -->
                </div>
            </div>
            <div class="row">
                <div class="jumbotron text-center">
                    <h1 class="display-3">Thank You!</h1>
                    <p class="lead">You selected a <strong><?php echo $plan; ?> Plan,</strong>  which is  successfully active. For any other query please contact Customer Care.</p>
                    <hr>
                    <p>
                        Having trouble? <a href="">Contact us</a>
                    </p>
                    <p class="lead">
                        <a class="btn btn-primary btn-sm" href="dashboard.php" role="button">Continue
                            to homepage</a>
                    </p>
                </div>

            </div>
        </div>
    </main>

    <?php include 'include/footer.php'; ?>