<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';

?>

<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Analize Başla</h2>
    </div>

    <div class="container">
        <div class="row" style="padding-bottom:20px;">
            <div class="col-md-6"><button type="button" class="btn btn-primary btn-lg">Fulfillment/Depolama Analizine Başla </button></div>
            <div class="col-md-6"><button type="button" class="btn btn-primary btn-lg">Kargo Analizine Başla</button></div>
        </div>
        <div class="row">
            <div class="col-md-6"><button type="button" class="btn btn-primary btn-lg">Finansal Analize Başla</button></div>
            <div class="col-md-6"><button type="button" class="btn btn-primary btn-lg">Ürün / Rakip Analinize Başla</button></div>
        </div>
    </div>   

   
</div>




<?php include_once 'includes/footer.php'; ?>