<?php
/* Smarty version 4.3.1, created on 2023-10-06 19:22:58
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\user-dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fee12c45602_05859191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e18ee6ca85af5ceae7f13abf2e8fb5ccf85f1ce' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\user-dashboard.tpl',
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
function content_651fee12c45602_05859191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- user-dashboard -->

<div class="row">
    <div class="col col-md-6 col-md-push-6">
        <?php if ($_smarty_tpl->tpl_vars['unpaid']->value) {?>
            <div class="box box-danger box-solid">
                <div class="box-header">
                    <h3 class="box-title"><?php echo Lang::T('Unpaid Order');?>
</h3>
                </div>
                <table class="table table-condensed table-bordered table-striped table-hover">
                    <tbody>
                        <tr>
                            <td><?php echo Lang::T('expired');?>
</td>
                            <td><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['unpaid']->value['expired_date']);?>
 </td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['unpaid']->value['plan_name'];?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['unpaid']->value['price'];?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo Lang::T('Routers');?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['unpaid']->value['routers'];?>
</td>
                        </tr>
                    </tbody>
                </table>
                <div class="box-footer p-2">
                    <div class="btn-group btn-group-justified mb15">
                        <div class="btn-group">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/view/<?php echo $_smarty_tpl->tpl_vars['unpaid']->value['id'];?>
/cancel" class="btn btn-danger btn-sm"
                                onclick="return confirm('<?php echo Lang::T('Cancel it?');?>
')">
                                <span class="glyphicon glyphicon-trash"></span>
                                <?php echo Lang::T('Cancel');?>

                            </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-success btn-block btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/view/<?php echo $_smarty_tpl->tpl_vars['unpaid']->value['id'];?>
">
                                <span class="icon"><i class="ion ion-card"></i></span>
                                <span><?php echo Lang::T('PAY NOW');?>
</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        <?php }?>
        <div class="box box-info box-solid">
            <div class="box-header">
                <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Announcement'];?>
</h3>
            </div>
            <div class="box-body">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_path']->value)."/../pages/Announcement.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
    </div>
    <div class="col col-md-6 col-md-pull-6">
        <div class="box box-primary box-solid">
            <div class="box-header">
                <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</h3>
            </div>
            <table class="table table-bordered table-striped table-bordered table-hover">
                <tr>
                    <td class="small text-success text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</td>
                    <td class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_user']->value['username'];?>
</td>
                </tr>
                <tr>
                    <td class="small text-success text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</td>
                    <td class="small mb15"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['_user']->value['password'];?>
"
                            style="background-color: black; color:black; width:100%; border: 0px;"
                            onclick="this.select()"></td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes') {?>
                    <tr>
                        <td class="small text-warning text-uppercase text-normal"><?php echo Lang::T('Balance');?>
</td>
                        <td class="small mb15 text-bold">
                            <?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['_user']->value['balance']);?>

                            <?php if ($_smarty_tpl->tpl_vars['_user']->value['auto_renewal'] == 1) {?>
                                <a class="label label-success pull-right" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home&renewal=0"
                                    onclick="return confirm('<?php echo Lang::T('Disable auto renewal?');?>
')"><?php echo Lang::T('Auto Renewal On');?>
</a>
                            <?php } else { ?>
                                <a class="label label-danger pull-right" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home&renewal=1"
                                    onclick="return confirm('<?php echo Lang::T('Enable auto renewal?');?>
')"><?php echo Lang::T('Auto Renewal Off');?>
</a>
                            <?php }?>
                        </td>
                    </tr>
                <?php }?>
                <tr>
                    <td class="small text-primary text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</td>
                    <td class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['namebp'];?>
</td>
                </tr>
                <tr>
                    <td class="small text-info text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</td>
                    <td class="small mb15">
                        <?php if ($_smarty_tpl->tpl_vars['_bill']->value['time'] != '') {
echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['_bill']->value['recharged_on'],$_smarty_tpl->tpl_vars['_bill']->value['recharged_time']);?>

                        <?php }?>&nbsp;</td>
                </tr>
                <tr>
                    <td class="small text-danger text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</td>
                    <td class="small mb15">
                        <?php if ($_smarty_tpl->tpl_vars['_bill']->value['time'] != '') {
echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['_bill']->value['expiration'],$_smarty_tpl->tpl_vars['_bill']->value['time']);
}?>&nbsp;
                    </td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['nux_ip']->value) {?>
                    <tr>
                        <td class="small text-primary text-uppercase text-normal"><?php echo Lang::T('Current IP');?>
</td>
                        <td class="small mb15"><?php echo $_smarty_tpl->tpl_vars['nux_ip']->value;?>
</td>
                    </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['nux_mac']->value) {?>
                    <tr>
                        <td class="small text-primary text-uppercase text-normal"><?php echo Lang::T('Current MAC');?>
</td>
                        <td class="small mb15"><?php echo $_smarty_tpl->tpl_vars['nux_mac']->value;?>
</td>
                    </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_bill']->value['type'] == 'Hotspot' && $_smarty_tpl->tpl_vars['_bill']->value['status'] == 'on') {?>
                    <tr>
                        <td class="small text-primary text-uppercase text-normal"><?php echo Lang::T('Login Status');?>
</td>
                        <td class="small mb15" id="login_status">
                            Loading....
                        </td>
                    </tr>
                <?php }?>
            </table>
            <?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] == 'yes') {?>
                <div class="box-footer">
                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] != 'none' || $_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] == '') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/package" class="btn btn-primary btn-block">
                            <i class="ion ion-ios-cart"></i>
                            <?php echo Lang::T('Order Package');?>

                        </a>
                    <?php }?>
                </div>
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['_bill']->value['type'] == 'Hotspot' && $_smarty_tpl->tpl_vars['_bill']->value['status'] == 'on') {?>
            <?php echo '<script'; ?>
>
                setTimeout(() => {
                    $.ajax({
                        url: "index.php?_route=autoload_user/isLogin",
                        cache: false,
                        success: function(msg) {
                            $("#login_status").html(msg);
                        }
                    });
                }, 2000);
            <?php echo '</script'; ?>
>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && $_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes') {?>
            <div class="box box-primary box-solid mb30">
                <div class="box-header">
                    <h4 class="box-title"><?php echo Lang::T("Transfer Balance");?>
</h4>
                </div>
                <div class="box-body p-0">
                    <form method="post" onsubmit="return askConfirm()" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home">
                        <div class="form-group">
                            <div class="col-sm-5">
                                <input type="text" id="username" name="username" class="form-control" required
                                    placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
">
                            </div>
                            <div class="col-sm-5">
                                <input type="number" id="balance" name="balance" autocomplete="off" class="form-control"
                                    required placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
">
                            </div>
                            <div class="form-group col-sm-2" align="center">
                                <button class="btn btn-success btn-block" id="sendBtn" type="submit" name="send"
                                    onclick="return confirm('<?php echo Lang::T("Are You Sure?");?>
')" value="balance"><i class="glyphicon glyphicon-send"></i></button>
                            </div>
                        </div>
                    </form>
                    <?php echo '<script'; ?>
>
                        function askConfirm() {
                            if(confirm('<?php echo Lang::T('Send your balance?');?>
')){
                            setTimeout(() => {
                                document.getElementById('sendBtn').setAttribute('disabled', '');
                            }, 1000);
                            return true;
                        }
                        return false;
                        }
                    <?php echo '</script'; ?>
>
                </div>
                <div class="box-header">
                    <h4 class="box-title"><?php echo Lang::T("Recharge a friend");?>
</h4>
                </div>
                <div class="box-body p-0">
                    <form method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" id="username" name="username" class="form-control" required
                                    placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
">
                            </div>
                            <div class="form-group col-sm-2" align="center">
                                <button class="btn btn-success btn-block" id="sendBtn" type="submit" name="send"
                                    onclick="return confirm('<?php echo Lang::T("Are You Sure?");?>
')" value="plan"><i class="glyphicon glyphicon-send"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php }?>
        <br>
        <?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] != 'yes') {?>
            <div class="box box-primary box-solid mb30">
                <div class="box-header">
                    <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</h3>
                </div>
                <div class="box-body">
                    <form method="post" role="form" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation-post">
                        <div class="form-group">
                            <label class="col-sm-4 control-label text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code_Voucher'];?>
</label>
                            <div class="col-sm-7">
                                <input type="text" id="code" name="code" class="form-control"
                                    placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Enter_Voucher_Code'];?>
">
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <button class="btn btn-success" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</button>
                        </div>
                    </form>
                </div>
                <div class="box-body">
                    <div class="btn-group btn-group-justified" role="group">
                        <a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation">
                            <i class="ion ion-ios-cart"></i>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>

                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] != 'none' || $_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] == '') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
order/package" class="btn btn-primary">
                                <i class="ion ion-ios-cart"></i>
                                <?php echo Lang::T('Order Package');?>

                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
