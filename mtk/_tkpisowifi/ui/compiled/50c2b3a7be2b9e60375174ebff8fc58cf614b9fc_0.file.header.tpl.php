<?php
/* Smarty version 4.3.1, created on 2023-10-06 18:16:08
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\sections\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fde6861e0c3_78715367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c2b3a7be2b9e60375174ebff8fc58cf614b9fc' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\sections\\header.tpl',
      1 => 1696146028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651fde6861e0c3_78715367 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

    <link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">

    <link rel="stylesheet" href="ui/ui/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="ui/ui/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="ui/ui/fonts/MaterialDesign/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="ui/ui/styles/adminlte.min.css">
    <link rel="stylesheet" href="ui/ui/styles/skin-blue.min.css">
    <link rel="stylesheet" href="ui/ui/styles/select2.min.css" />
    <link rel="stylesheet" href="ui/ui/styles/select2-bootstrap.min.css" />
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

        .select2-container .select2-selection--single .select2-selection__rendered {
            margin-top: 0px !important;
        }
    </style>

    <?php if ((isset($_smarty_tpl->tpl_vars['xheader']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="logo">
                <span class="logo-mini"><b>TKHOTSPOT</b></span>
                <span class="logo-lg"><?php echo Lang::T('Logo');?>
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
                                <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
?set=set3&size=100x100&bgset=bg1"
                                    onerror="this.src='system/uploads/admin.default.png'" class="user-image"
                                    alt="Avatar">
                                <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>
</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
?set=set3&size=100x100&bgset=bg1"
                                        onerror="this.src='system/uploads/admin.default.png'" class="img-circle"
                                        alt="Avatar">

                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>

                                        <small><?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin') {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Administrator'];?>

                                            <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
 <?php }?></small>
                                    </p>
                                </li>
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-7 text-center text-sm">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password"><i class="ion ion-settings"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a>
                                        </div>
                                        <div class="col-xs-5 text-center text-sm">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
">
                                                <i class="ion ion-person"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Account'];?>
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

        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'dashboard') {?>class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard">
                            <i class="ion ion-monitor"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span>
                        </a>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_DASHBOARD']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin' || $_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Sales') {?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'customers') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="ion ion-android-contacts"></i> <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'add') {?>class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add"><i
                                            class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Contact'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><i
                                            class="fa fa-users"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Contact'];?>
</a></li>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_CUSTOMERS']->value;?>

                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_CUSTOMERS']->value;?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'prepaid') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="fa fa-ticket"></i> <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid'];?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_User'];?>
</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] != 'yes') {?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'voucher') {?>class="active" <?php }?>><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_Vouchers'];?>
</a></li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'refill') {?>class="active" <?php }?>><a
                                            href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/refill"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Refill_Account'];?>
</a></li>
                                <?php }?>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'recharge') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'deposit') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/deposit"><?php echo Lang::T('Refill Balance');?>
</a></li>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_PREPAID']->value;?>

                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_PREPAID']->value;?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'services') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="ion ion-cube"></i> <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'hotspot') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/hotspot"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hotspot_Plans'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'pppoe') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bandwidth/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bandwidth_Plans'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'balance') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/balance"><?php echo Lang::T('Balance Plans');?>
</a></li>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_SERVICES']->value;?>

                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_SERVICES']->value;?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'reports') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="ion ion-clipboard"></i> <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports'];?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'daily-report') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/daily-report"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Daily_Report'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'by-period') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Period_Reports'];?>
</a></li>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_REPORTS']->value;?>

                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_REPORTS']->value;?>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin') {?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'network') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="ion ion-network"></i> <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Network'];?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'routers' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'pool' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pool/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pool'];?>
</a></li>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_NETWORK']->value;?>

                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_NETWORKS']->value;?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pages') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="ion ion-document"></i> <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Static_Pages'];?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Order_Voucher') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Order_Voucher"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Voucher') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Voucher"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher'];?>
 Template</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Announcement') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Announcement"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Announcement'];?>
 Editor</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Registration_Info') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Registration_Info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Registration_Info'];?>
 Editor</a></li>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_PAGES']->value;?>

                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_PAGES']->value;?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'settings' || $_smarty_tpl->tpl_vars['_system_menu']->value == 'paymentgateway') {?>active<?php }?> treeview">
                            <a href="#">
                                <i class="ion ion-gear-a"></i> <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'app') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General_Settings'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'localisation') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'notifications') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/notifications"><?php echo Lang::T('User Notification');?>
</a></li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'users') {?>class="active" <?php }?>><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Administrator_Users'];?>
</a></li>
                                                                <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'pluginmanager') {?>class="active" <?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pluginmanager"><?php echo Lang::T('Plugin Manager');?>
</a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'paymentgateway') {?>class="active" <?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway">
                                        <span class="text"><?php echo Lang::T('Payment Gateway');?>
</span>
                                    </a>
                                </li>
                                <?php echo $_smarty_tpl->tpl_vars['_MENU_SETTINGS']->value;?>

                            </ul>
                        </li>
                        <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_SETTINGS']->value;?>

                        <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'community') {?>class="active" <?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
community">
                                <i class="ion ion-chatboxes"></i>
                                <span class="text"><?php echo Lang::T('Community');?>
</span>
                            </a>
                        </li>
                    <?php }?>
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
