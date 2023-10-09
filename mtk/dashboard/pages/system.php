<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>TKHOTSPOT - SYSTEM USERS</title>

    <?php require('../tools/header.php');?>  

</head>

<body id="page-top">

     <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php require('../tools/sidebar.php');?>
	   <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                

                    <!-- Topbar Navbar -->
                    <?php require('../tools/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">System Setup and Configuration</h1>
<div class="container mt-5">
    <form class="form-horizontal" method="post" role="form" action="http://localhost/tkpisowifi/index.php?_route=settings/app-post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
               			

                <div class="panel panel-primary mb-4">
                    <div class="panel-heading">
                        General Settings
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Application Name</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
                        
						<div class="form-group">
                            <label class="col-md-2 control-label">Company Logo</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                                <small class="help-block">For PDF Reports | Best size 1078 x 200 | uploaded image will be autosize</small>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label class="col-md-2 control-label">Company Footer</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
						 <div class="form-group">
                            <label class="col-md-2 control-label">Address</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
						 <div class="form-group">
                            <label class="col-md-2 control-label">Phone Number</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
						 <div class="form-group">
                            <label class="col-md-2 control-label">App URL</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
						 <div class="form-group">
                            <label class="col-md-2 control-label">Disable Voucher</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
                       
                    </div>
                </div>


                

                <div class="panel panel-primary mb-4">
                    <div class="panel-heading">
                        Balance System
                    </div>
                     <div class="form-group">
                            <label class="col-md-2 control-label">Enable System</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
						 <div class="form-group">
                            <label class="col-md-2 control-label">Allow Transfer</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
						 <div class="form-group">
                            <label class="col-md-2 control-label">Minimum Balance Transfer</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
						
                </div>

                <div class="panel panel-primary mb-4">
                    <div class="panel-heading">
                        Telegram Notification
                    </div>
                     <div class="form-group">
                            <label class="col-md-2 control-label">Telegram BOT Token</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
						 <div class="form-group">
                            <label class="col-md-2 control-label">Telegram Target ID</label>
                            <div class="col-md-6">
                                <input type="text" required class="form-control" id="company" name="company" value="TKHOTSPOT">
                            </div>
                            <small class="help-block col-md-4">This Name will be shown on the Title</small>
                        </div>
                </div>

                <div class="panel panel-primary mb-4">
                    <div class="panel-heading">
                        SMS OTP Registration
                    </div>
                    Telegram Target ID
                </div>

                <div class="panel panel-primary mb-4">
                    <div class="panel-heading">
                        Whatsapp Notification
                    </div>
                    <div class="panel-body">
                        <!-- Whatsapp Notification Form Groups -->
                        <!-- ... -->
                    </div>
                </div>

                <div class="panel panel-primary mb-4">
                    <div class="panel-heading">
                        User Notification
                    </div>
                    <div class="panel-body">
                        <!-- User Notification Form Groups -->
                        <!-- ... -->
                    </div>
                </div>

                <div class="panel panel-primary mb-4">
                    <div class="panel-heading">
                        Tawk.to Chat Widget
                    </div>
                    <div class="panel-body">
                        <!-- Tawk.to Chat Widget Form Groups -->
                        <!-- ... -->
                    </div>
                </div>

                <div class="panel panel-primary mb-4">
                    <div class="panel-heading">
                        Invoice
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Invoice Footer</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="note" name="note" rows="3">Thank you...</textarea>
                                <small class="help-block">You can use html tag</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary mb-4">
                    <div class="panel-heading">
                        Proxy
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Proxy Server</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="http_proxy" name="http_proxy" value="" placeholder="127.0.0.1:3128">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Proxy Server Login</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="http_proxyauth" name="http_proxyauth" autocomplete="off" value="" placeholder="username:password">
                            </div>
                        </div>
                    </div>
                </div>


				
				
                
                <div class="panel-body">
                    <div class="form-group">
                        <button class="btn btn-success btn-block" type="submit">Save Changes</button>
                    </div>
                </div>
              
            </div>
        </div>
    </form>
</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

             <!-- Footer -->
            <?php require('../tools/footer.php');?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php require('../tools/scroll.php');?>

    <!-- Logout Modal-->
    <?php require('../tools/logout.php');?>

    <!-- Bootstrap core JavaScript-->
    <!-- Core plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <?php require('../tools/scripts.php');?>

</body>

</html>