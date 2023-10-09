<?php
/* Smarty version 4.3.1, created on 2023-10-06 19:12:42
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651febaa209829_82981500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95354bc132c1f484b2ffa989b8d47c9110db6f99' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\register.tpl',
      1 => 1694754792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651febaa209829_82981500 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Register'];?>
</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

    <link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">
    <link rel="stylesheet" href="ui/ui/styles/adminlte.min.css">

</head>

<body id="app" class="app off-canvas body-full">

    <div class="container">
        <div class="hidden-xs" style="height:150px"></div>
        <div class="form-head mb20">
            <h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"
                style="text-shadow: 2px 2px 4px #757575;"><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</h1>
            <hr>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                </div>
            </div>
        <?php }?>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Registration_Info'];?>
</div>
                    <div class="panel-body">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_path']->value)."/../pages/Registration_Info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                </div>
            </div>
            <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
register/post" method="post">
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">1. <?php echo $_smarty_tpl->tpl_vars['_L']->value['Register_Member'];?>
</div>
                        <div class="panel-body">
                            <div class="form-container">
                                <div class="md-input-container">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">+</span>
                                        <input type="text" class="form-control" name="username"
                                            placeholder="<?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {
echo $_smarty_tpl->tpl_vars['_c']->value['country_code_phone'];
}?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
">
                                    </div>
                                </div>
                                <div class="md-input-container md-float-label">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</label>
                                    <input type="text" required class="form-control" id="fullname" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
"
                                        name="fullname">
                                </div>
                                <div class="md-input-container md-float-label">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                    <input type="text" required class="form-control" id="email"
                                        placeholder="xxxxxxx@xxxx.xx" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" name="email">
                                </div>
                                <div class="md-input-container md-float-label">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                                    <input type="text" name="address" id="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">2. <?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</div>
                        <div class="panel-body">
                            <div class="form-container">
                                <div class="md-input-container md-float-label">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                    <input type="password" required class="form-control" id="password" name="password">
                                </div>
                                <div class="md-input-container md-float-label">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm_Password'];?>
</label>
                                    <input type="password" required class="form-control" id="cpassword"
                                        name="cpassword">
                                </div>
                                <br>
                                <div class="btn-group btn-group-justified mb15">
                                <div class="btn-group">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                                </div>
                                    <div class="btn-group">
                                        <button class="btn btn-success waves-effect waves-light"
                                            type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Register'];?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['_c']->value['tawkto'] != '') {?>
        <!--Start of Tawk.to Script-->
        <?php echo '<script'; ?>
 type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src='https://embed.tawk.to/<?php echo $_smarty_tpl->tpl_vars['_c']->value['tawkto'];?>
';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        <?php echo '</script'; ?>
>
        <!--End of Tawk.to Script-->
    <?php }?>
    <?php echo '<script'; ?>
 src="ui/ui/scripts/vendors.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
