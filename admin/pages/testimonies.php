
<?php 

    include "../serv/manage.php";

?>            
            
            <!-- <div class="app-main__inner"> -->
            <!-- <link rel="stylesheet" href="css/fontawesome/css/all.css"> -->
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-table icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Table Of Testimonies
                <div class="page-title-subheading">
                </div>
            </div>
        </div>
    </div>
</div>            
<div class="main-card mb-3 card">
    <div class="card-body">
    <script src="assets\scripts\main.cba69814a806ecc7945a.js"></script>
            <script src="js/form.js"></script>
            <div style="float: right; margin-right: 10%;" class="search-wrapper">
                <div class="input-holder">
                    <input id="search" type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div>
        <table style="width: 100%;" id="table" class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Testimonies</th>
                <th>Pictures</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    testi() ;

                ?>
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Testimonies</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

               