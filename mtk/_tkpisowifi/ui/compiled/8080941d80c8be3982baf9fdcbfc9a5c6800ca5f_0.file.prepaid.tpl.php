<?php
/* Smarty version 4.3.1, created on 2023-10-01 15:43:00
  from 'C:\trioj\htdocs\mtk\tkpisowifi\ui\ui\prepaid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651923042f9dc3_12294294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8080941d80c8be3982baf9fdcbfc9a5c6800ca5f' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\ui\\ui\\prepaid.tpl',
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
function content_651923042f9dc3_12294294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-hovered mb20 panel-primary">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_User'];?>
</div>
            <div class="panel-body">
                <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
                    <div class="col-md-8">
                        <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list/">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <input type="text" name="username" class="form-control"
                                    placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Username'];?>
..." value="<?php echo $_smarty_tpl->tpl_vars['cari']->value;?>
">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge" class="btn btn-primary btn-block waves-effect"><i
                                class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</a>
                    </div>&nbsp;
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
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
                                <tr <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'off') {?>class="danger"<?php }?>>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/viewu/<?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</a></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['namebp'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                                    <td><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['ds']->value['recharged_on'],$_smarty_tpl->tpl_vars['ds']->value['recharged_time']);?>
</td>
                                    <td><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['ds']->value['expiration'],$_smarty_tpl->tpl_vars['ds']->value['time']);?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['method'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                            class="btn btn-warning btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                        onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
?')"
                                            class="btn btn-danger btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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
