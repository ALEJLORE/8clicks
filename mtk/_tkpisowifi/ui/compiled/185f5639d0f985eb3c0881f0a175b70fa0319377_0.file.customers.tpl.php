<?php
/* Smarty version 4.3.1, created on 2023-10-06 18:16:20
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fde74dd7397_18432149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '185f5639d0f985eb3c0881f0a175b70fa0319377' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\customers.tpl',
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
function content_651fde74dd7397_18432149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-hovered mb20 panel-primary">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Accounts'];?>
</div>
            <div class="panel-body">
                <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
                    <div class="col-md-8">
                        <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
                            <div class="input-group">
                                <input type="text" name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" class="form-control"
                                    placeholder="<?php echo Lang::T('Search');?>
...">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="submit"><span
                                            class="fa fa-search"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add" class="btn btn-primary btn-block waves-effect"><i
                                class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Contact'];?>
</a>
                    </div>&nbsp;
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</th>
                                <th><?php echo Lang::T('Balance');?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Package'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
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
                                    <td onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
'" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
                                    <td onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
'" style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
</td>
                                    <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['ds']->value['balance']);?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['phonenumber'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['email'];?>
</td>
                                    <td align="center" api-get-text="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
autoload/customer_is_active/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                                        <span class="label label-default">&bull;</span>
                                    </td>
                                    <td><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['ds']->value['created_at']);?>
</td>
                                    <td align="center">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" style="margin: 0px;"
                                                class="btn btn-success btn-xs">&nbsp;&nbsp;<?php echo Lang::T('View');?>
&nbsp;&nbsp;</a>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge-user/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" style="margin: 0px;"
                                                class="btn btn-primary btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
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
