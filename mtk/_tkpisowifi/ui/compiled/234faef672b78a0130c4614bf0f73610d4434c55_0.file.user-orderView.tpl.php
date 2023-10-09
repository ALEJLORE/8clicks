<?php
/* Smarty version 4.3.1, created on 2023-10-01 15:13:19
  from 'C:\trioj\htdocs\mtk\tkpisowifi\ui\ui\user-orderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65191c0fe0e4d2_06276097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '234faef672b78a0130c4614bf0f73610d4434c55' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\ui\\ui\\user-orderView.tpl',
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
function content_65191c0fe0e4d2_06276097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- user-orderView -->
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div
            class="panel mb20 <?php if ($_smarty_tpl->tpl_vars['trx']->value['status'] == 1) {?>panel-warning<?php } elseif ($_smarty_tpl->tpl_vars['trx']->value['status'] == 2) {?>panel-success<?php } elseif ($_smarty_tpl->tpl_vars['trx']->value['status'] == 3) {?>panel-danger<?php } elseif ($_smarty_tpl->tpl_vars['trx']->value['status'] == 4) {?>panel-danger<?php } else { ?>panel-primary<?php }?> panel-hovered">
            <div class="panel-footer">Transaction #<?php echo $_smarty_tpl->tpl_vars['trx']->value['id'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['trx']->value['routers'] != 'balance') {?>
                <div class="panel-body">
                    <div class="panel panel-primary panel-hovered">
                        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['router']->value['name'];?>
</div>
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['router']->value['description'];?>

                        </div>
                    </div>
                </div>
            <?php }?>
            <div class="table-responsive">
                <?php if ($_smarty_tpl->tpl_vars['trx']->value['pg_url_payment'] == 'balance') {?>
                    <table class="table table-bordered table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td><?php echo Lang::T('Type');?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['trx']->value['plan_name'];?>
</td>
                            </tr>
                            <tr>
                                <td><?php echo Lang::T('Paid Date');?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['trx']->value['paid_date']));?>

                                    <?php echo date('H:i',strtotime($_smarty_tpl->tpl_vars['trx']->value['paid_date']));?>
 </td>
                            </tr>
                            <tr>
                            <?php if ($_smarty_tpl->tpl_vars['trx']->value['plan_name'] == 'Receive Balance') {?>
                                <td><?php echo Lang::T('From');?>
</td>
                                <?php } else { ?>
                                    <td><?php echo Lang::T('To');?>
</td>
                                <?php }?>
                                <td><?php echo $_smarty_tpl->tpl_vars['trx']->value['gateway'];?>
</td>
                            </tr>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</td>
                                <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['trx']->value['price']);?>
</td>
                            </tr>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <table class="table table-bordered table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td><?php echo Lang::T('Status');?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['trx']->value['status'] == 1) {
echo Lang::T('UNPAID');
} elseif ($_smarty_tpl->tpl_vars['trx']->value['status'] == 2) {
echo Lang::T('PAID');
} elseif ($_smarty_tpl->tpl_vars['trx']->value['status'] == 3) {
echo Lang::T('FAILED');
} elseif ($_smarty_tpl->tpl_vars['trx']->value['status'] == 4) {
echo Lang::T('CANCELED');
} else {
echo Lang::T('UNKNOWN');
}?>
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo Lang::T('expired');?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['trx']->value['expired_date']));?>

                                    <?php echo date('H:i',strtotime($_smarty_tpl->tpl_vars['trx']->value['expired_date']));?>
 </td>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['trx']->value['status'] == 2) {?>
                                <tr>
                                    <td><?php echo Lang::T('Paid Date');?>
</td>
                                    <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['trx']->value['paid_date']));?>

                                        <?php echo date('H:i',strtotime($_smarty_tpl->tpl_vars['trx']->value['paid_date']));?>
 </td>
                                </tr>
                            <?php }?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</td>
                            </tr>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</td>
                                <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['plan']->value['price']);?>
</td>
                            </tr>
                            <tr>
                                <td><?php echo Lang::T('Type');?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['plan']->value['type'];?>
</td>
                            </tr>
                            <?php if ($_smarty_tpl->tpl_vars['plan']->value['type'] != 'Balance') {?>
                                <?php if ($_smarty_tpl->tpl_vars['plan']->value['type'] == 'Hotspot') {?>
                                    <tr>
                                        <td><?php echo Lang::T('Plan_Type');?>
</td>
                                        <td><?php echo Lang::T($_smarty_tpl->tpl_vars['plan']->value['typebp']);?>
</td>
                                    </tr>
                                    <?php if ($_smarty_tpl->tpl_vars['plan']->value['typebp'] == 'Limited') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['plan']->value['limit_type'] == 'Time_Limit' || $_smarty_tpl->tpl_vars['plan']->value['limit_type'] == 'Both_Limit') {?>
                                            <tr>
                                                <td><?php echo Lang::T('Time_Limit');?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['time_limit'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time_unit'];?>
</td>
                                            </tr>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['plan']->value['limit_type'] == 'Data_Limit' || $_smarty_tpl->tpl_vars['plan']->value['limit_type'] == 'Both_Limit') {?>
                                            <tr>
                                                <td><?php echo Lang::T('Data_Limit');?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['data_limit'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['data_unit'];?>
</td>
                                            </tr>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Validity'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['plan']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['validity_unit'];?>
</td>
                                </tr>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bandwidth_Plans'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['bandw']->value['name_bw'];?>
<br><?php echo $_smarty_tpl->tpl_vars['bandw']->value['rate_down'];
echo $_smarty_tpl->tpl_vars['bandw']->value['rate_down_unit'];?>
/<?php echo $_smarty_tpl->tpl_vars['bandw']->value['rate_up'];
echo $_smarty_tpl->tpl_vars['bandw']->value['rate_up_unit'];?>

                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['trx']->value['status'] == 1) {?>
                <div class="panel-footer ">
                    <div class="btn-group btn-group-justified">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['trx']->value['pg_url_payment'];?>
" <?php if ($_smarty_tpl->tpl_vars['trx']->value['gateway'] == 'midtrans') {?> target="_blank" <?php }?>
                            class="btn btn-primary"><?php echo Lang::T('PAY NOW');?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/view/<?php echo $_smarty_tpl->tpl_vars['trx']->value['id'];?>
/check"
                            class="btn btn-info"><?php echo Lang::T('Check for Payment');?>
</a>
                    </div>
                </div>
                <div class="panel-footer ">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/view/<?php echo $_smarty_tpl->tpl_vars['trx']->value['id'];?>
/cancel" class="btn btn-danger"
                        onclick="return confirm('<?php echo Lang::T('Cancel it?');?>
')"><?php echo Lang::T('Cancel');?>
</a>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
