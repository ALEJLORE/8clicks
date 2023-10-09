<?php
/* Smarty version 4.3.1, created on 2023-10-06 19:24:16
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\sections\user-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fee60d916b7_79229942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11575e530e5a60ac9b0423c2967c43714ab9f8d3' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\sections\\user-header.tpl',
      1 => 1696591453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651fee60d916b7_79229942 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</title>
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

        .content-wrapper {
            margin-top: 50px;
        }

        @media (max-width: 767px) {
            .content-wrapper {
                margin-top: 100px;
            }
        }
    </style>

    <?php if ((isset($_smarty_tpl->tpl_vars['xheader']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header" style="position:fixed; width: 100%">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home" class="logo">
                <span class="logo-mini"><b>N</b>uX</span>
                <span class="logo-lg"><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes') {?>
                                    <span style="color: whitesmoke;"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['_user']->value['balance']);?>
</span>
                                <?php } else { ?>
                                    <span><?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
</span>
                                <?php }?>
                                <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
?set=set3&size=100x100&bgset=bg1"
                                    onerror="this.src='system/uploads/user.default.jpg'" class="user-image"
                                    alt="User Image">
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
?set=set3&size=100x100&bgset=bg1"
                                        onerror="this.src='system/uploads/user.default.jpg'" class="img-circle"
                                        alt="User Image">

                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>

                                        <small><?php echo $_smarty_tpl->tpl_vars['_user']->value['phonenumber'];?>
</small><br>
                                        <small><?php echo $_smarty_tpl->tpl_vars['_user']->value['email'];?>
</small>
                                    </p>
                                </li>
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-7 text-center text-sm">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><i class="ion ion-settings"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a>
                                        </div>
                                        <div class="col-xs-5 text-center text-sm">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/profile"><i class="ion ion-person"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Account'];?>
</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout" class="btn btn-default btn-flat"><i
                                                class="ion ion-power"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar" style="position:fixed;">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'home') {?>class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home">
                            <i class="ion ion-monitor"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span>
                        </a>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_DASHBOARD']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] != 'yes') {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'voucher') {?>class="active" <?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation">
                                <i class="fa fa-ticket"></i>
                                <span><?php echo Lang::T('Voucher');?>
</span>
                            </a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] != 'none' || $_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] == '') {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'package') {?>class="active" <?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/package">
                                <i class="ion ion-ios-cart"></i>
                                <span><?php echo Lang::T('Buy Package');?>
</span>
                            </a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'history') {?>class="active" <?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/history">
                                <i class="fa fa-file-text"></i>
                                <span><?php echo Lang::T('Order History');?>
</span>
                            </a>
                        </li>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_ORDER']->value;?>

                    <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'list-activated') {?>class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/list-activated">
                            <i class="fa fa-list-alt"></i>
                            <span><?php echo Lang::T('Activation History');?>
</span>
                        </a>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_HISTORY']->value;?>

                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['_title']->value;?>

                </h1>
            </section>
            <section class="content">
<?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {
echo $_smarty_tpl->tpl_vars['notify']->value;
}
}
}
