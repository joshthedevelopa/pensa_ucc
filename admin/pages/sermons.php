
    <?php 
    
        include "..//serv/manage.php";

    ?>            
                
                <!-- <div class="app-main__inner"> -->
    
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-table icon-gradient bg-tempting-azure">
                    </i>
                </div>
                <div>Table Of Sermons
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
            <table style="width: 100%;" id="table" class="dataTable table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Preacher</th>
                    <th>Type</th>
                    <th>Sermon</th>
                    <th>Date</th>
                    <th>Action</th>
                    <!-- <th>Start date</th>
                    <th>Salary</th> -->
                </tr>
                </thead>
                <tbody>

                    <?php serms(); 
                    ?>

                </tbody>
                <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Preacher</th>
                    <th>Type</th>
                    <th>Sermon</th>
                    <th>Date</th>
                    <th>Action</th>
                    <!-- <th>Start date</th>
                    <th>Salary</th> -->
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
                <!-- </div> -->
               