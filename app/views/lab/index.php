
<?php 
require_once 'app/views/templates/header.php';
?> 


<div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="gradient-wrapper item-mb">
                            <div class="gradient-title">
                                <div class="row no-gutters">
                                    <div class="col-sm-12 col-12 text-center-mb">
                                        <h2 class="mb10--mb">Lab List</h2>
                                    </div> 
                                </div>
                            </div>
                             <div id="category-view" class="gradient-padding zoom-gallery category-list-layout3">
                                <div class="row">
                                    <div style="height:500px">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="gradient-wrapper mb--sm" >
                            <ul class="cp-pagination">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">Next<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>

<script>

    $(document).ready(function()
    { 
        var searchKey= '<?php  echo $data['search']; ?>';
        search(searchKey);
    });

</script>

