<?php 
include 'constant-inc.php';

$site_url = base_url();
// echo $site_url;

if($_SESSION['name'] == ''){
	redirect('sign-in.php');
}

$media_number = rand().time(); 
?>

<?php include 'include/sidebar.php'; ?>
<div class="main">
    <?php include 'include/header.php';?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3>Campaign</h3>
                </div>
            </div>
            <!-- FORM: field -->
            <div class="row">
                <center>
                    <!-- FIXME: Form field-->
                    <form id="campaign-form" style="text-align:left;width:50%;">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title"
                                placeholder="My first ad">
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Desc</label>
                            <input type="text" class="form-control" id="desc"
                                placeholder="Another input placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control" id="link"
                                placeholder="https://ad1.redirect.com">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Image</label>
                            <h6><span class="img-size">Recommended Image Size 16:9 </span></h6>
                            <!-- <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder"> -->
                        </div>
                        <div class="col-md-4" style="width: 100%;margin-bottom:20px;">
                            <div class="d-flex" style="">
                                <label for="single" class="form-label"></label>
                                <button type="button" class="form-control attach-img" id="single" onclick="singleImg()"
                                    style="">
                                    <i class="far fa-image"></i>
                                    Cover Image
                                </button>
                                <button type="button" class="form-control attach-img" id="multi" onclick="multiImg()"
                                    style="margin-left:13%;">
                                    <i class="far fa-image"></i>
                                    Slider Image
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- TODO:  single image parser-->
                    <div class="col-md-4">
                        <div class="row" id="si" style="display:none;">
                            <!-- <h6><span class="img-size">Recommended Image Size 16:9 </span></h6> -->
                            <form action="single-img-parse.php" class="dropzone d1 col-md-12 x-magic-form upload-frm"
                                style="background-color:#fff; border: none; border: 1px dashed #ccc; border-radius: 10px; width: 100%;">
                                <input type="hidden" value="<?php echo $media_number; ?>" class="media_number"
                                    id="media_no" name="media-number" />
                            </form>
                        </div>
                    </div>

                    <!-- TODO: Multi image parser -->
                    <div class="col-md-4">
                        <div class="row" id="mi" style="display:none">
                            <!-- <h6><span class="img-size">Recommended Image Size 16:9 </span></h6> -->
                            <form action="multi-img-parse.php" class="dropzone d2 col-md-12 x-magic-form upload-frm"
                                style="background-color:#fff; border: none; border: 1px dashed #ccc; border-radius: 10px; width: 100%;">
                                <input type="hidden" value="<?php echo $media_number; ?>" class="media_number"
                                    id="media_no" name="media-number" />
                            </form>
                        </div>
                    </div>
                </center>
                <div class="col-md-4" style="text-align: right;width: 84%;margin-top:20px;">
                    <button class="btn btn-primary" id="cc" type="button">Next &nbsp;&nbsp;<i class="fas fa-arrow-circle-right"></i></button>
                </div>
            </div>
        </div>
    </main>



    <?php include 'include/footer.php'; ?>