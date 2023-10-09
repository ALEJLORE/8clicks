<?php
/* Smarty version 4.3.1, created on 2023-10-06 18:19:42
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\customers-view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fdf3e9dc4a7_64608127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d460b3f79c0255cbbc80462bc7da4797046e705' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\customers-view.tpl',
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
function content_651fdf3e9dc4a7_64608127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-4 col-md-4">
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle"
                    src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
?set=set3&size=100x100&bgset=bg1"
                    onerror="this.src='system/uploads/user.default.jpg'" alt="avatar">

                <h3 class="profile-username text-center"><?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
</h3>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</b> <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
</span>
                    </li>
                    <li class="list-group-item">
                        <b><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</b> <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['d']->value['phonenumber'];?>
</span>
                    </li>
                    <li class="list-group-item">
                        <b><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</b> <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
</span>
                    </li>
                </ul>
                <p class="text-muted"><?php echo Lang::nl2br($_smarty_tpl->tpl_vars['d']->value['address']);?>
</p>
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</b> <span class="pull-right" style="background-color: black; color:black;"
                            onclick="this.select()"><?php echo $_smarty_tpl->tpl_vars['d']->value['password'];?>
</span>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['d']->value['pppoe_password'] != '') {?>
                        <li class="list-group-item">
                            <b>PPPOE <?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</b> <span class="pull-right"
                                style="background-color: black; color:black;"
                                onclick="this.select()"><?php echo $_smarty_tpl->tpl_vars['d']->value['pppoe_password'];?>
</span>
                        </li>
                    <?php }?>
                    <li class="list-group-item">
                        <b><?php echo Lang::T('Balance');?>
</b> <span class="pull-right"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['d']->value['balance']);?>
</span>
                    </li>
                    <li class="list-group-item">
                        <b><?php echo Lang::T('Auto Renewal');?>
</b> <span
                            class="pull-right"><?php if ($_smarty_tpl->tpl_vars['d']->value['auto_renewal']) {?>yes<?php } else { ?>no<?php }?></span>
                    </li>
                    <li class="list-group-item">
                        <b><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</b> <span
                            class="pull-right"><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['d']->value['created_at']);?>
</span>
                    </li>
                    <li class="list-group-item">
                        <b><?php echo Lang::T('Last Login');?>
</b> <span
                            class="pull-right"><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['d']->value['last_login']);?>
</span>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-xs-4">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/delete/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"
                            class="btn btn-danger btn-block btn-sm" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
?')"><span
                                class="fa fa-trash"></span></a>
                    </div>
                    <div class="col-xs-8">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/edit/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"
                            class="btn btn-warning btn-sm btn-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['package']->value) {?>
            <div class="box box-<?php if ($_smarty_tpl->tpl_vars['package']->value['status'] == 'on') {?>success<?php } else { ?>danger<?php }?>">
                <div class="box-body box-profile">
                    <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['package']->value['type'];?>
 - <?php echo $_smarty_tpl->tpl_vars['package']->value['namebp'];?>
</h4>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <?php echo Lang::T('Active');?>
 <span
                                class="pull-right"><?php if ($_smarty_tpl->tpl_vars['package']->value['status'] == 'on') {?>yes<?php } else { ?>no<?php }?></span>
                        </li>
                        <li class="list-group-item">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
 <span
                                class="pull-right"><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['package']->value['recharged_on'],$_smarty_tpl->tpl_vars['package']->value['recharged_time']);?>
</span>
                        </li>
                        <li class="list-group-item">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
 <span
                                class="pull-right"><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['package']->value['expiration'],$_smarty_tpl->tpl_vars['package']->value['time']);?>
</span>
                        </li>
                        <li class="list-group-item">
                            <?php echo $_smarty_tpl->tpl_vars['package']->value['routers'];?>
 <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['package']->value['method'];?>
</span>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/deactivate/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"
                                class="btn btn-danger btn-block btn-sm" onclick="return confirm('This will deactivate Customer Plan, and make it expired')"><?php echo Lang::T('Deactivate');?>
</a>
                        </div>
                        <div class="col-xs-4">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/recharge/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" onclick="return confirm('This will extend Customer plan, same as recharge')"
                                class="btn btn-success btn-sm btn-block"><?php echo Lang::T('Recharge');?>
</a>
                        </div>
                        <div class="col-xs-4">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/sync/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" onclick="return confirm('This will sync Customer to Mikrotik?')"
                                class="btn btn-primary btn-sm btn-block"><?php echo Lang::T('Sync');?>
</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="btn btn-success btn-sm btn-block mt-1"><?php echo Lang::T('Recharge');?>
</a><br>
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list" class="btn btn-primary btn-sm btn-block mt-1"><?php echo Lang::T('Back');?>
</a><br>
    </div>
    <div class="col-sm-8 col-md-8">
        <ul class="nav nav-tabs">
            <li role="presentation" <?php if ($_smarty_tpl->tpl_vars['v']->value == 'order') {?>class="active" <?php }?>><a
                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/order">30 <?php echo Lang::T('Order History');?>
</a></li>
            <li role="presentation" <?php if ($_smarty_tpl->tpl_vars['v']->value == 'activation') {?>class="active" <?php }?>><a
                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/activation">30 <?php echo Lang::T('Activation History');?>
</a></li>
        </ul>
        <div class="table-responsive" style="background-color: white;">
            <table id="datatable" class="table table-bordered table-striped">
                <?php if (Lang::arrayCount($_smarty_tpl->tpl_vars['activation']->value)) {?>
                    <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activation']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['plan_name'];?>
</td>
                                <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['ds']->value['price']);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                                <td class="text-success"><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['ds']->value['recharged_on'],$_smarty_tpl->tpl_vars['ds']->value['recharged_time']);?>

                                </td>
                                <td class="text-danger"><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['ds']->value['expiration'],$_smarty_tpl->tpl_vars['ds']->value['time']);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['method'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                <?php }?>
                <?php if (Lang::arrayCount($_smarty_tpl->tpl_vars['order']->value)) {?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['plan_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['gateway'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['payment_channel'];?>
</td>
                                <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['ds']->value['price']);?>
</td>
                                <td class="text-primary"><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['ds']->value['created_date']);?>
</td>
                                <td class="text-danger"><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['ds']->value['expired_date']);?>
</td>
                                <td class="text-success"><?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] != 1) {
echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['ds']->value['paid_date']);
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
                <?php }?>
            </table>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
