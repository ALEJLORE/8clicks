<?php
/* Smarty version 4.3.1, created on 2023-10-02 13:39:02
  from 'C:\trioj\htdocs\mtk\tkpisowifi\ui\ui\recharge.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651a5776417689_86715430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a31c428f6a2eaa4ac86239e518548b4f98be90e' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\ui\\ui\\recharge.tpl',
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
function content_651a5776417689_86715430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-primary panel-hovered panel-stacked mb30">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge-post">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Account'];?>
</label>
                        <div class="col-md-6">
                            <select <?php if ($_smarty_tpl->tpl_vars['cust']->value) {
} else { ?>id="personSelect"<?php }?> class="form-control select2"
                                name="id_customer" style="width: 100%" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Customer'];?>
...">
                                <?php if ($_smarty_tpl->tpl_vars['cust']->value) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cust']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cust']->value['username'];?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['cust']->value['fullname'];?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['cust']->value['email'];?>
</option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                        <div class="col-md-6">
                            <input type="radio" id="Hot" name="type" value="Hotspot"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Hotspot_Plans'];?>

                            <input type="radio" id="POE" name="type" value="PPPOE"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</label>
                        <div class="col-md-6">
                            <select id="server" name="server" class="form-control select2">
                                <option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Routers'];?>
</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service_Plan'];?>
</label>
                        <div class="col-md-6">
                            <select id="plan" name="plan" class="form-control select2">
                                <option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Plans'];?>
</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-success waves-effect waves-light"
                                type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</button>
                            Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
