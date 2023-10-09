<?php
/* Smarty version 4.3.1, created on 2023-10-02 13:39:00
  from 'C:\trioj\htdocs\mtk\tkpisowifi\ui\ui\voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651a577422b255_38519014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '859b708eb7f598b6f4f3fdfac1c73810e223f0aa' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\ui\\ui\\voucher.tpl',
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
function content_651a577422b255_38519014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- voucher -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-hovered mb20 panel-primary">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_Vouchers'];?>
</div>
            <div class="panel-body">
                <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
                    <div class="col-md-8">
                        <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher/">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <input type="text" name="code" class="form-control"
                                    placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Code'];?>
..." value="<?php echo $_smarty_tpl->tpl_vars['_code']->value;?>
">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group" role="group">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/add-voucher" class="btn btn-primary btn-block waves-effect"><i
                                        class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Voucher'];?>
</a>
                            </div>
                            <div class="btn-group" role="group">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/print-voucher" target="print_voucher" class="btn btn-info"><i
                                        class="ion ion-android-print"> </i> Print</a>
                            </div>
                        </div>
                    </div>&nbsp;
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code_Voucher'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status_Voucher'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</td>
                                    <td><span style="background-color: black; color:black;"><?php echo $_smarty_tpl->tpl_vars['ds']->value['code'];?>
</span></td>
                                    <td align="center"><?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == '0') {?> <label class="btn-tag btn-tag-success">Not
                                            Use</label> <?php } else { ?> <label class="btn-tag btn-tag-danger">Used</label>
                                        <?php }?></td>
                                    <td align="center"><?php if ($_smarty_tpl->tpl_vars['ds']->value['user'] == '0') {?> - <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['user'];?>
 <?php }?></td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                            class="btn btn-danger btn-xs"
                                            onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
?')"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                    </td>
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


<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
