<?php
/* Smarty version 4.3.1, created on 2023-10-01 15:13:27
  from 'C:\trioj\htdocs\mtk\tkpisowifi\ui\ui\user-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65191c17e73408_48901937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ff85c198e37c9b9931a5f96a107d7e40211cc3' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\ui\\ui\\user-activation.tpl',
      1 => 1694754792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/user-header.tpl' => 1,
    'file:sections/user-footer.tpl' => 1,
  ),
),false)) {
function content_65191c17e73408_48901937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- user-activation -->

<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="box-header"><h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</h3></div>
            <div class="box-body">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_path']->value)."/../pages/Order_Voucher.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-success panel-hovered panel-stacked mb30">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation-post">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code_Voucher'];?>
</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="code" name="code"
                                placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Enter_Voucher_Code'];?>
">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-success waves-effect waves-light"
                                type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</button>
                            Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
