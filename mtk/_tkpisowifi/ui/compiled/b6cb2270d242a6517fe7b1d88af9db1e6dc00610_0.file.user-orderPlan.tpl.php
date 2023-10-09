<?php
/* Smarty version 4.3.1, created on 2023-10-01 15:13:30
  from 'C:\trioj\htdocs\mtk\tkpisowifi\ui\ui\user-orderPlan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65191c1ae85547_42575243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6cb2270d242a6517fe7b1d88af9db1e6dc00610' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\ui\\ui\\user-orderPlan.tpl',
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
function content_65191c1ae85547_42575243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- user-orderPlan -->
<div class="row">
    <div class="col-sm-12">
        <div class="box box-solid box-default">
            <div class="box-header"><?php echo Lang::T('Order Internet Package');?>
</div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes') {?>
            <div class="box box-solid box-primary">
                <div class="box-header"><?php echo Lang::T('Balance Plans');?>
</div>
                <div class="box-body row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans_balance']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                        <div class="col col-md-4">
                            <div class="box box-solid box-default">
                                <div class="box-header"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <td><?php echo Lang::T('Price');?>
</td>
                                                <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>
</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="box-body">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/buy/0/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                        onclick="return confirm('<?php echo Lang::T('Buy Balance?');?>
')"
                                        class="btn btn-sm btn-block btn-primary">Buy</a>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['routers']->value, 'router');
$_smarty_tpl->tpl_vars['router']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['router']->value) {
$_smarty_tpl->tpl_vars['router']->do_else = false;
?>
            <div class="box box-solid box-info">
                <div class="box-header text-black"><?php echo $_smarty_tpl->tpl_vars['router']->value['name'];?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['router']->value['description'] != '') {?>
                    <div class="box-body">
                        <?php echo $_smarty_tpl->tpl_vars['router']->value['description'];?>

                    </div>
                <?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['plans_hotspot']->value) > 0) {?>
                    <div class="box-header"><?php echo Lang::T('Hotspot Plan');?>
</div>
                    <div class="box-body row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans_hotspot']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['router']->value['name'] == $_smarty_tpl->tpl_vars['plan']->value['routers']) {?>
                                <div class="col col-md-4">
                                    <div class="box box-solid box-default">
                                        <div class="box-header"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo Lang::T('Type');?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo Lang::T('Price');?>
</td>
                                                        <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo Lang::T('Validity');?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>
</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-body">
                                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/buy/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                    onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwrite');?>
')"
                                                    class="btn btn-sm btn-block btn-warning text-black">Buy</a>
                                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwrite');?>
')"
                                                        class="btn btn-sm btn-block btn-success"><?php echo Lang::T('Pay With Balance');?>
</a>
                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                    onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                    class="btn btn-sm btn-block btn-primary"><?php echo Lang::T('Buy for friend');?>
</a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['plans_pppoe']->value) > 0) {?>
                    <div class="box-header text-sm"><?php echo Lang::T('PPPOE Plan');?>
</div>
                    <div class="box-body row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans_pppoe']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['router']->value['name'] == $_smarty_tpl->tpl_vars['plan']->value['routers']) {?>
                                <div class="col col-md-4">
                                    <div class="box box-solid box-default">
                                        <div class="box-header"><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo Lang::T('Type');?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo Lang::T('Price');?>
</td>
                                                        <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo Lang::T('Validity');?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>
</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-body">
                                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/buy/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                    onclick="return confirm('<?php echo Lang::T('Buy this? your active package will be overwrite');?>
')"
                                                    class="btn btn-sm btn-block btn-warning text-black">Buy</a>
                                                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/pay/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                        onclick="return confirm('<?php echo Lang::T('Pay this with Balance? your active package will be overwrite');?>
')"
                                                        class="btn btn-sm btn-block btn-success"><?php echo Lang::T('Pay With Balance');?>
</a>
                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes' && $_smarty_tpl->tpl_vars['_user']->value['balance'] >= $_smarty_tpl->tpl_vars['plan']->value['price']) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/send/<?php echo $_smarty_tpl->tpl_vars['router']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"
                                                    onclick="return confirm('<?php echo Lang::T('Buy this for friend account?');?>
')"
                                                    class="btn btn-sm btn-block btn-primary"><?php echo Lang::T('Buy for friend');?>
</a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
