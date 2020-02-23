<!DOCTYPE html>
<html>
    <!-- HEAD -->
    <?php $this->load->view("_partials/head.php") ?>
    <!-- /HEAD -->


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <?php $this->load->view("_partials/navbar.php") ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <?php $this->load->view("_partials/sidebar.php") ?>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <?php $this->load->view("_partials/breadcrumb.php") ?>

                        <div class="row">
                        <?php $this->load->view($content) ?>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <?php $this->load->view("_partials/footer.php") ?>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <?php $this->load->view("_partials/rightNavbar.php") ?>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <?php // $this->load->view("_partials/js.php") ?>


        
	</body>
</html>