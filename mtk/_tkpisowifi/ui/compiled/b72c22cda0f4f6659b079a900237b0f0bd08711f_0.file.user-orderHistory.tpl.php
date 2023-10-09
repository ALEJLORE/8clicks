<?php
/* Smarty version 4.3.1, created on 2023-10-06 19:28:04
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\user-orderHistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fef44df33b1_44169833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b72c22cda0f4f6659b079a900237b0f0bd08711f' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\user-orderHistory.tpl',
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
function content_651fef44df33b1_44169833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- user-orderHistory -->

<div class="row">
    <div class="col-sm-12">
        <div class="panel mb20 panel-hovered panel-primary">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_History'];?>
</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
                                <th><?php echo Lang::T('Gateway');?>
</th>
                                <th><?php echo Lang::T('Routers');?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
                                <th><?php echo Lang::T('Date Done');?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                <tr>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['plan_name'];?>
</a></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['gateway'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['payment_channel'];?>
</td>
                                    <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['ds']->value['price']);?>
</td>
                                    <td class="text-primary"><?php echo date(((string)$_smarty_tpl->tpl_vars['_c']->value['date_format'])." H:i",strtotime($_smarty_tpl->tpl_vars['ds']->value['created_date']));?>
</td>
                                    <td class="text-danger"><?php echo date(((string)$_smarty_tpl->tpl_vars['_c']->value['date_format'])." H:i",strtotime($_smarty_tpl->tpl_vars['ds']->value['expired_date']));?>
</td>
                                    <td class="text-success"><?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] != 1) {
echo date(((string)$_smarty_tpl->tpl_vars['_c']->value['date_format'])." H:i",strtotime($_smarty_tpl->tpl_vars['ds']->value['paid_date']));
}?></td>
                                    <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 1) {
echo $_smarty_tpl->tpl_vars['_L']->value['UNPAID'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 2) {
echo $_smarty_tpl->tpl_vars['_L']->value['PAID'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 3) {
echo $_smarty_tpl->tpl_vars['_L']->value['FAILED'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 4) {
echo $_smarty_tpl->tpl_vars['_L']->value['CANCELED'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 5) {
echo $_smarty_tpl->tpl_vars['_L']->value['UNKNOWN'];?>

                                        <?php }?></td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

            </div>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
