<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>TKHOTSPOT - MIKROTIK PING CHECK</title>

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
                    <h1 class="h3 mb-4 text-gray-800">Customer</h1>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>FormCustomer</legend>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">File Button</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="searchinput">Search Input</label>
  <div class="col-md-4">
    <input id="searchinput" name="searchinput" type="search" placeholder="placeholder" class="form-control input-md">
    <p class="help-block">help</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

<!-- Prepended checkbox -->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedcheckbox">Prepended Checkbox</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">     
          <input type="checkbox">     
      </span>
      <input id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="placeholder">
    </div>
    <p class="help-block">help</p>
  </div>
</div>

<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="appendedtext">Appended Text</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="appendedtext" name="appendedtext" class="form-control" placeholder="placeholder" type="text">
      <span class="input-group-addon">append</span>
    </div>
    <p class="help-block">help</p>
  </div>
</div>
<!-- Appended checkbox -->
<div class="form-group">
  <label class="col-md-4 control-label" for="appendedcheckbox">Appended Checkbox</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="appendedcheckbox" name="appendedcheckbox" class="form-control" type="text" placeholder="placeholder">
	        <span class="input-group-addon">     
          <input type="checkbox">     
      </span>
    </div>
    <p class="help-block">help</p>
  </div>
</div>

<!-- Button Drop Down -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttondropdown">Button Drop Down</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="placeholder" type="text">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Action
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li><a href="#">Option one</a></li>
          <li><a href="#">Option two</a></li>
          <li><a href="#">Option three</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Prepended Text</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">prepend</span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="placeholder" type="text">
    </div>
    <p class="help-block">help</p>
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectmultiple">Select Multiple</label>
  <div class="col-md-4">
    <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Inline Radios</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      1
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      2
    </label> 
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      3
    </label> 
    <label class="radio-inline" for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      4
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Multiple Radios</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Option one
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Option two
    </label>
	</div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Multiple Checkboxes</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Option one
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Option two
    </label>
	</div>
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Inline Checkboxes</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      1
    </label>
    <label class="checkbox-inline" for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      2
    </label>
    <label class="checkbox-inline" for="checkboxes-2">
      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
      3
    </label>
    <label class="checkbox-inline" for="checkboxes-3">
      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
      4
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Inline Radios</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      1
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      2
    </label> 
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      3
    </label> 
    <label class="radio-inline" for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      4
    </label>
  </div>
</div>

<!-- Button Drop Down -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttondropdown">Button Drop Down</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="placeholder" type="text">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Status
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li><a href="#">Option one</a></li>
          <li><a href="#">Option two</a></li>
          <li><a href="#">Option three</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-4">
  <input id="Name" name="Name" type="text" placeholder="Name" class="form-control input-md" required="">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Cellphone">Cellphone</label>  
  <div class="col-md-4">
  <input id="Cellphone" name="Cellphone" type="text" placeholder="Cellphone" class="form-control input-md" required="">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-4">
  <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" required="">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">New Password </label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="placeholder" class="form-control input-md">
    <span class="help-block">help</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confirm Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="placeholder" class="form-control input-md">
    <span class="help-block">help</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Button Drop Down -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttondropdown">Button Drop Down</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="placeholder" type="text">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Action
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li><a href="#">Option one</a></li>
          <li><a href="#">Option two</a></li>
          <li><a href="#">Option three</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Address" name="Address">Address</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">Double Button</label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
  </div>
</div>

</fieldset>
</form>

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