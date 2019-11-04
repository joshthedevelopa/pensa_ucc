<?php    
    include "../serv/manage.php";
?>
<div class="app-page-title">

    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-map">
                </i>
            </div>
            <div>Dashboard
                <div class="page-title-subheading">

                </div>
            </div>
        </div>    
    </div>
</div>           
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Testimonies</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><?php num("t");?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Sermons</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><?php num("s");?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Events</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><?php num("e");?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Comments</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><?php num("c");?></span></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
               