<?php
/* Smarty version 4.3.1, created on 2023-10-01 15:42:29
  from 'C:\trioj\htdocs\mtk\tkpisowifi\system\plugin\ui\port_tester.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651922e590eb35_28819414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19bcf77e0c1993019a3c79aaf4f8dfebf4f5f32c' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\system\\plugin\\ui\\port_tester.tpl',
      1 => 1692774126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_651922e590eb35_28819414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/port_tester">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-primary panel-hovered panel-stacked mb30">
                <div class="panel-heading">Testing port external</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Port</label>
                        <div class="col-md-6">
                            <input type="text" id="port" name="port" value="<?php echo $_smarty_tpl->tpl_vars['port']->value;?>
" placeholder="8728" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-success waves-effect waves-light" type="submit">Test It</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['result']->value != '') {?>
            <div class="panel panel-primary panel-hovered panel-stacked mb30">
                <div class="panel-heading">Result</div>
                <div class="panel-body">
                    <?php echo Lang::nl2br($_smarty_tpl->tpl_vars['result']->value);?>

                </div>
            </div>
            <?php }?>
        </div>
    </div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
