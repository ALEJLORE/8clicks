<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:38:12
  from 'C:\laragon\www\mtk\tkpisowifi\ui\ui\page-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fd584015c46_08529924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88cda7900f9b6cf0759c2e3bdcaf4f5d0e1d9232' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\tkpisowifi\\ui\\ui\\page-edit.tpl',
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
function content_651fd584015c46_08529924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col-sm-12">
        <div class="panel mb20 panel-primary panel-hovered">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['pageHeader']->value];?>
</div>
                <div id="myNicPanel" style="width: 100%;"></div>
                <div id="panel-edit" class="panel-body"><?php echo $_smarty_tpl->tpl_vars['htmls']->value;?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['writeable']->value) {?>
                <div class="panel-footer">
                    <a href="javascript:saveIt()" class="btn btn-primary btn-block">SAVE</a>
                    <br>
                    <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Info_Page'];?>
</p>
                    <input type="text" class="form-control" onclick="this.select()" readonly value="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/pages/<?php echo $_smarty_tpl->tpl_vars['pageHeader']->value;?>
.html">
                </div>
            <?php } else { ?>
                <div class="panel-footer">
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Failed_Save_Page'];?>

                </div>
            <?php }?>
        </div>
    </div>
</div>
<form id="formpages" class="hidden" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/<?php echo $_smarty_tpl->tpl_vars['pageHeader']->value;?>
-post" >
    <textarea name="html" id="html"></textarea>
</form>
<?php echo '<script'; ?>
 src="ui/ui/scripts/nicEdit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var myNicEditor
    bkLib.onDomLoaded(function() {
        myNicEditor = new nicEditor();
        myNicEditor.setPanel('myNicPanel');
        myNicEditor.addInstance('panel-edit');
    });
    function saveIt(){
        //alert(document.getElementById('panel-edit').innerHTML);
        document.getElementById('html').value = nicEditors.findEditor('panel-edit').getContent()
        document.getElementById('formpages').submit();
    }
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
