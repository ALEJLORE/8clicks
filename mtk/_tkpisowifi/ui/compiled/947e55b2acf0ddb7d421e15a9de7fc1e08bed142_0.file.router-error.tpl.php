<?php
/* Smarty version 4.3.1, created on 2023-10-01 15:13:19
  from 'C:\trioj\htdocs\mtk\tkpisowifi\ui\ui\router-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65191c0fcd4332_28368822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947e55b2acf0ddb7d421e15a9de7fc1e08bed142' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\ui\\ui\\router-error.tpl',
      1 => 1696134480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65191c0fcd4332_28368822 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Error -TKHOTSPOT</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

    <link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">

    <link rel="stylesheet" href="ui/ui/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="ui/ui/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="ui/ui/fonts/MaterialDesign/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="ui/ui/styles/adminlte.min.css">
    <link rel="stylesheet" href="ui/ui/styles/skin-blue.min.css">
    <style>
        ::-moz-selection {
            /* Code for Firefox */
            color: red;
            background: yellow;
        }

        ::selection {
            color: red;
            background: yellow;
        }
    </style>

</head>

<body class="hold-transition skin-blue">
    <div class="container">

        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <img src="./ui/ui/images/error.png" class="img-responsive hidden-sm hidden-xs">
                </div>
                <div class="col-md-6">
                    <div class="box box-danger box-solid text-center">

                        <section class="content-header">
                            <h1 class="text-center">
                                <?php echo $_smarty_tpl->tpl_vars['error_title']->value;?>

                            </h1>
                        </section>
                        <div class="box-title" style="font-size:xx-large; color:red">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        </div>
                        <div class="box-body" style="font-size: larger;">
                            <br><br>
                            <?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>

                            <br><br><br>
                        </div>
                        <div class="box-footer">
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                <a href="./update.php?step=4" class="btn btn-info btn-sm btn-block">Update Database</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
community#update" class="btn btn-primary btn-sm btn-block">Update
                                    PHPNuxBill</a>
                            </div>
                            <br><br>
                            <a href="javascript::history.back()" onclick="history.back()"
                                class="btn btn-warning btn-block">back</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="./ui/ui/images/error.png" class="img-responsive hidden-md hidden-lg">
                </div>
            </div>
        </section>
    </div>
</body>

</html><?php }
}
