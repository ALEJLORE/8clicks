<?php
/* Smarty version 4.3.1, created on 2023-10-06 18:19:34
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\pppoe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fdf3627d735_19245405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac9a0f4afc88ee018eb27926ddfb424b8febf5b' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\pppoe.tpl',
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
function content_651fdf3627d735_19245405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-primary">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Name'];?>
...">
												<div class="input-group-btn">
													<button class="btn btn-success" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-add" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New_Plan'];?>
</a>
										</div>&nbsp;
									</div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <thead>
                                                <tr>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bandwidth_Plans'];?>
</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Validity'];?>
</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pool'];?>
</th>
                                                    <th><?php echo Lang::T('Expired IP Pool');?>
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
                                                <tr <?php if ($_smarty_tpl->tpl_vars['ds']->value['enabled'] != 1) {?>class="danger" title="disabled"<?php }?>>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_bw'];?>
</td>
                                                    <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['ds']->value['price']);?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['validity_unit'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_expired'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
                                                    <td>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-info btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
?')" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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
