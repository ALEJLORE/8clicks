<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:38:06
  from 'C:\laragon\www\mtk\tkpisowifi\ui\ui\app-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fd57edec798_79242690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02079ac8a61708b8a450cab6ab1f353d4ba642ff' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\tkpisowifi\\ui\\ui\\app-settings.tpl',
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
function content_651fd57edec798_79242690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app-post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-primary panel-hovered panel-stacked mb30">
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['General_Settings'];?>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name'];?>
</label>
                        <div class="col-md-6">
                            <input type="text" required class="form-control" id="company" name="company"
                                value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
">
                        </div>
                        <span class="help-block col-md-4"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name_Help_Text'];?>
</span>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Company Logo');?>
</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                            <span class="help-block">For PDF Reports | Best size 1078 x 200 | uploaded image will be
                                autosize</span>
                        </div>
                        <span class="help-block col-md-4">
                            <a href="./<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" target="_blank"><img src="./<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="48" alt="logo for PDF"></a>
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Company Footer');?>
</label>
                        <div class="col-md-6">
                            <input type="text" required class="form-control" id="footer" name="footer"
                                value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyFooter'];?>
">
                        </div>
                        <span class="help-block col-md-4"><?php echo Lang::T('Will show below user pages');?>
</span>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="address" name="address"
                                rows="3"><?php echo Lang::htmlspecialchars($_smarty_tpl->tpl_vars['_c']->value['address']);?>
</textarea>
                        </div>
                        <span class="help-block col-md-4"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</span>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
">
                        </div>
                    </div>
                    <div class="form-group hidden">
                        <label class="col-md-2 control-label">Radius Mode?</label>
                        <div class="col-md-6">
                            <select name="radius_mode" id="radius_mode" class="form-control">
                                <option value="0">No</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_mode']) {?>selected="selected" <?php }?>>Yes</option>
                            </select>
                        </div>
                        <p class="help-block col-md-4">Still on Testing.<br>
                            Changing from Radius will not add existing user to Mikrotik Hotspot.<br>
                            With Radius user can use Hotspot or PPOE.</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">APP URL</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">
                        </div>
                        <p class="help-block col-md-4">edit at config.php</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Disable Voucher');?>
</label>
                        <div class="col-md-6">
                            <select name="disable_voucher" id="disable_voucher" class="form-control">
                                <option value="no" <?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] == 'no') {?>selected="selected" <?php }?>>No
                                </option>
                                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] == 'yes') {?>selected="selected" <?php }?>>Yes
                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><?php echo Lang::T('Voucher activation menu will be hidden');?>
</p>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo Lang::T('Balance System');?>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Enable System');?>
</label>
                        <div class="col-md-6">
                            <select name="enable_balance" id="enable_balance" class="form-control">
                                <option value="no" <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'no') {?>selected="selected" <?php }?>>No
                                </option>
                                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes') {?>selected="selected" <?php }?>>Yes
                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><?php echo Lang::T('Customer can deposit money to buy voucher');?>
</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Allow Transfer');?>
</label>
                        <div class="col-md-6">
                            <select name="allow_balance_transfer" id="allow_balance_transfer" class="form-control">
                                <option value="no" <?php if ($_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'no') {?>selected="selected" <?php }?>>
                                    No</option>
                                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['_c']->value['allow_balance_transfer'] == 'yes') {?>selected="selected"
                                    <?php }?>>Yes</option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><?php echo Lang::T('Allow balance transfer between customers');?>
</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Minimum Balance Transfer');?>
</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="minimum_transfer" name="minimum_transfer"
                                value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['minimum_transfer'];?>
">
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo Lang::T('Telegram Notification');?>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Telegram Bot Token</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="telegram_bot" name="telegram_bot" onmouseleave="this.type = 'password'"
                            onmouseenter="this.type = 'text'"
                                value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['telegram_bot'];?>
" placeholder="123456:asdasgdkuasghddlashdashldhalskdklasd">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Telegram Target ID</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="telegram_target_id" name="telegram_target_id"
                                value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['telegram_target_id'];?>
" placeholder="12345678">
                        </div>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">You will get Payment and Error
                        notification</small>
                </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo Lang::T('SMS OTP Registration');?>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">SMS Server URL</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="sms_url" name="sms_url" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['sms_url'];?>
"
                                placeholder="https://domain/?param_number=[number]&param_text=[text]&secret=">
                        </div>
                        <p class="help-block col-md-4">Must include <b>[text]</b> &amp; <b>[number]</b>, it will be
                            replaced.
                        </p>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">You can use WhatsApp in here too. <a
                            href="https://wa.nux.my.id/login" target="_blank">Free Server</a></small>
                </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo Lang::T('Whatsapp Notification');?>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Whatsapp Server URL</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="wa_url" name="wa_url" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['wa_url'];?>
"
                                placeholder="https://domain/?param_number=[number]&param_text=[text]&secret=">
                        </div>
                        <p class="help-block col-md-4">Must include <b>[text]</b> &amp; <b>[number]</b>, it will be
                            replaced.
                        </p>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">You can use WhatsApp in here too. <a
                            href="https://wa.nux.my.id/login" target="_blank">Free Server</a></small>
                </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo Lang::T('User Notification');?>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Expired Notification');?>
</label>
                        <div class="col-md-6">
                            <select name="user_notification_expired" id="user_notification_expired"
                                class="form-control">
                                <option value="none">None</option>
                                <option value="wa" <?php if ($_smarty_tpl->tpl_vars['_c']->value['user_notification_expired'] == 'wa') {?>selected="selected"
                                    <?php }?>>Whatsapp</option>
                                <option value="sms" <?php if ($_smarty_tpl->tpl_vars['_c']->value['user_notification_expired'] == 'sms') {?>selected="selected"
                                    <?php }?>>SMS</option>
                            </select>
                        </div>
                        <p class="help-block col-md-4"><?php echo Lang::T('User will get notification when package expired');?>
</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Payment Notification');?>
</label>
                        <div class="col-md-6">
                            <select name="user_notification_payment" id="user_notification_payment"
                                class="form-control">
                                <option value="none">None</option>
                                <option value="wa" <?php if ($_smarty_tpl->tpl_vars['_c']->value['user_notification_payment'] == 'wa') {?>selected="selected"
                                    <?php }?>>Whatsapp</option>
                                <option value="sms" <?php if ($_smarty_tpl->tpl_vars['_c']->value['user_notification_payment'] == 'sms') {?>selected="selected"
                                    <?php }?>>SMS</option>
                            </select>
                        </div>
                        <p class="help-block col-md-4">
                            <?php echo Lang::T('User will get invoice notification when buy package or package refilled');?>
</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Reminder Notification');?>
</label>
                        <div class="col-md-6">
                            <select name="user_notification_reminder" id="user_notification_reminder"
                                class="form-control">
                                <option value="none">None</option>
                                <option value="wa" <?php if ($_smarty_tpl->tpl_vars['_c']->value['user_notification_reminder'] == 'wa') {?>selected="selected"
                                    <?php }?>>Whatsapp</option>
                                <option value="sms" <?php if ($_smarty_tpl->tpl_vars['_c']->value['user_notification_reminder'] == 'sms') {?>selected="selected"
                                    <?php }?>>SMS</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo Lang::T('Tawk.to Chat Widget');?>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">https://tawk.to/chat/</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="tawkto" name="tawkto" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['tawkto'];?>
"
                                placeholder="62f1ca7037898912e961f5/1ga07df">
                        </div>
                        <p class="help-block col-md-4">From Direct Chat Link.</p>
                    </div>
                    <label class="col-md-2"></label>
                    <p class="col-md-6 help-block">/ip hotspot walled-garden<br>
                        add dst-host=tawk.to<br>
                        add dst-host=*.tawk.to</p>
                </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo Lang::T('Invoice');?>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Invoice Footer');?>
</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="note" name="note"
                                rows="3"><?php echo Lang::htmlspecialchars($_smarty_tpl->tpl_vars['_c']->value['note']);?>
</textarea>
                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</span>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary btn-xs" title="save" type="submit"><span
                                class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button>
                    </div>
                    <?php echo Lang::T('Proxy');?>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Proxy Server');?>
</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="http_proxy" name="http_proxy"
                                value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['http_proxy'];?>
" placeholder="127.0.0.1:3128">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Proxy Server Login');?>
</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="http_proxyauth" name="http_proxyauth" autocomplete="off"
                                value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['http_proxyauth'];?>
" placeholder="username:password" onmouseleave="this.type = 'password'"
                                onmouseenter="this.type = 'text'">
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="form-group">
                    <button class="btn btn-success btn-block waves-effect waves-light"
                        type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                </div>
            </div>

            <pre>/ip hotspot walled-garden
add dst-host=<?php echo $_smarty_tpl->tpl_vars['_domain']->value;?>

add dst-host=*.<?php echo $_smarty_tpl->tpl_vars['_domain']->value;?>
</pre>
        </div>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
