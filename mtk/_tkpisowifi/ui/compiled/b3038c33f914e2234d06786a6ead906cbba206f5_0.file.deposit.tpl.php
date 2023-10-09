<?php
/* Smarty version 4.3.1, created on 2023-10-06 18:19:47
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\deposit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fdf433d1a93_18539281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3038c33f914e2234d06786a6ead906cbba206f5' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\deposit.tpl',
      1 => 1694754792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_651fdf433d1a93_18539281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-primary panel-hovered panel-stacked mb30">
            <div class="panel-heading"><?php echo Lang::T('Refill Balance');?>
</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/deposit-post">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Account'];?>
</label>
                        <div class="col-md-6">
                            <select id="personSelect" class="form-control select2" name="id_customer" style="width: 100%"
                                data-placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Customer'];?>
...">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/balance"><?php echo Lang::T('Balance Plans');?>
</a></label>
                        <div class="col-md-6">
                            <select id="planSelect" class="form-control select2" name="id_plan" style="width: 100%"
                                data-placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Plans'];?>
...">
                                <option></option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'pl');
$_smarty_tpl->tpl_vars['pl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pl']->value) {
$_smarty_tpl->tpl_vars['pl']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['pl']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pl']->value['name_plan'];?>
 - <?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['pl']->value['price']);?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-success waves-effect waves-light"
                                type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</button>
                            Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
