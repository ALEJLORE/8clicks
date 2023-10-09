<?php
/* Smarty version 4.3.1, created on 2023-10-06 18:16:08
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fde681e2351_26931836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03e9758c204662e1dd820801000acb20aca3dace' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\dashboard.tpl',
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
function content_651fde681e2351_26931836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h4><sup><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
</sup>
                    <?php echo number_format($_smarty_tpl->tpl_vars['iday']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Today'];?>
</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-date" class="small-box-footer"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_Reports'];?>
 <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h4><sup><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
</sup>
                    <?php echo number_format($_smarty_tpl->tpl_vars['imonth']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>

                <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_This_Month'];?>
</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period" class="small-box-footer"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_Reports'];?>
 <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h4><?php echo $_smarty_tpl->tpl_vars['u_act']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['u_all']->value;?>
</h4>

                <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Users_Active'];?>
</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list" class="small-box-footer"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_All'];?>
 <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h4><?php echo $_smarty_tpl->tpl_vars['c_all']->value;?>
</h4>

                <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Users'];?>
</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list" class="small-box-footer"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_All'];?>
 <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <div class="panel panel-primary mb20 panel-hovered project-stats table-responsive">
            <div class="panel-heading">Vouchers Stock</div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
                            <th>unused</th>
                            <th>used</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'stok');
$_smarty_tpl->tpl_vars['stok']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stok']->value) {
$_smarty_tpl->tpl_vars['stok']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['stok']->value['name_plan'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['stok']->value['unused'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['stok']->value['used'];?>
</td>
                            </tr>
                        </tbody>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <tr>
                        <td>Total</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stocks']->value['unused'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stocks']->value['used'];?>
</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-warning mb20 panel-hovered project-stats table-responsive">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['User_Expired_Today'];?>
</div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('no', 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expire']->value, 'expired');
$_smarty_tpl->tpl_vars['expired']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['expired']->value) {
$_smarty_tpl->tpl_vars['expired']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/viewu/<?php echo $_smarty_tpl->tpl_vars['expired']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['expired']->value['username'];?>
</a></td>
                                <td><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['expired']->value['recharged_on'],$_smarty_tpl->tpl_vars['expired']->value['recharged_time']);?>

                                </td>
                                <td><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['expired']->value['expiration'],$_smarty_tpl->tpl_vars['expired']->value['time']);?>

                                </td>
                            </tr>
                        </tbody>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="panel panel-success panel-hovered mb20 activities">
            <div class="panel-heading"><?php echo Lang::T('Payment Gateway');?>
: <?php echo $_smarty_tpl->tpl_vars['_c']->value['payment_gateway'];?>
</div>
        </div>
        <div class="panel panel-info panel-hovered mb20 activities">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activity_Log'];?>
</div>
            <div class="panel-body">
                <ul class="list-unstyled">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dlog']->value, 'dlogs');
$_smarty_tpl->tpl_vars['dlogs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dlogs']->value) {
$_smarty_tpl->tpl_vars['dlogs']->do_else = false;
?>
                        <li class="primary">
                            <span class="point"></span>
                            <span class="time small text-muted"><?php echo time_elapsed_string($_smarty_tpl->tpl_vars['dlogs']->value['date'],true);?>
</span>
                            <p><?php echo $_smarty_tpl->tpl_vars['dlogs']->value['description'];?>
</p>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    </div>

</div>

<?php echo '<script'; ?>
>
    window.addEventListener('DOMContentLoaded', function() {
        $.getJSON("./version.json?" + Math.random(), function(data) {
            var localVersion = data.version;
            $('#version').html('Version: ' + localVersion);
            $.getJSON("https://raw.githubusercontent.com/ibnux/phpnuxbill/master/version.json?" + Math
                .random(),
                function(data) {
                    var latestVersion = data.version;
                    if (localVersion !== latestVersion) {
                        $('#version').html('Latest Version: ' + latestVersion);
                    }
                });
        });

    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
