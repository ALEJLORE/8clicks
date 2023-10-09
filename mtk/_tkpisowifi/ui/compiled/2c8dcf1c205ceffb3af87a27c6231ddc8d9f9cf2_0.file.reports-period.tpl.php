<?php
/* Smarty version 4.3.1, created on 2023-10-06 18:18:32
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\reports-period.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fdef86ac5a6_13647247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c8dcf1c205ceffb3af87a27c6231ddc8d9f9cf2' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\reports-period.tpl',
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
function content_651fdef86ac5a6_13647247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- reports-period -->

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="panel panel-primary panel-hovered panel-stacked mb30">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Period_Reports'];?>
</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/period-view">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['From_Date'];?>
</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
" name="fdate" id="fdate">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To_Date'];?>
</label>
                        <div class="col-md-9">
                        <input type="date" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
" name="tdate" id="tdate">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                        <div class="col-md-9">
                            <select class="form-control" id="stype" name="stype">
                                <option value="" selected=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions'];?>
</option>
                                <option value="Hotspot">Hotspot</option>
                                <option value="PPPOE">PPPOE</option>
                                <option value="Balance">Balance</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Period_Reports'];?>
</button>
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
