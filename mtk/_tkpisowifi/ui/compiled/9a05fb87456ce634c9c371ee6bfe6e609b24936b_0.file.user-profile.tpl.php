<?php
/* Smarty version 4.3.1, created on 2023-10-01 15:13:55
  from 'C:\trioj\htdocs\mtk\tkpisowifi\ui\ui\user-profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65191c33232bc4_47150509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a05fb87456ce634c9c371ee6bfe6e609b24936b' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\ui\\ui\\user-profile.tpl',
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
function content_65191c33232bc4_47150509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- user-profile -->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-primary panel-hovered panel-stacked mb30">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_User'];?>
</div>
            <div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/edit-profile-post">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">+</span>
                                <input type="text" class="form-control" name="username" id="username" readonly
                                    value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
"
                                    placeholder="<?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {
echo $_smarty_tpl->tpl_vars['_c']->value['country_code_phone'];
}?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="fullname" name="fullname"
                                value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                        <div class="col-md-6">
                            <textarea name="address" id="address" class="form-control"><?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">+</span>
                                <input type="text" class="form-control" name="phonenumber" id="phonenumber"
                                    value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phonenumber'];?>
"
                                    placeholder="<?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {
echo $_smarty_tpl->tpl_vars['_c']->value['country_code_phone'];
}?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo Lang::T('Email');?>
</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-success waves-effect waves-light"
                                type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                            Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
