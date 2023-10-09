<?php
/* Smarty version 4.3.1, created on 2023-10-01 15:18:24
  from 'C:\trioj\htdocs\mtk\tkpisowifi\ui\ui\sections\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65191d40968af4_71400836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0803b50ed365c6ab3836fcec7504f5ab03dc8ef' => 
    array (
      0 => 'C:\\trioj\\htdocs\\mtk\\tkpisowifi\\ui\\ui\\sections\\footer.tpl',
      1 => 1696140404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65191d40968af4_71400836 (Smarty_Internal_Template $_smarty_tpl) {
?>        </section>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs" id="version" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
community#latestVersion';"></div>
        TKHOTSPOT by <a href="#" rel="nofollow noreferrer noopener"
            target="_blank">iBNuX</a>, Theme by <a href="https://adminlte.io/" rel="nofollow noreferrer noopener"
            target="_blank">AdminLTE</a>
    </footer>
</div>

<?php echo '<script'; ?>
 src="ui/ui/scripts/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="ui/ui/scripts/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="ui/ui/scripts/adminlte.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="ui/ui/scripts/custom.js"><?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['xfooter']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>

<?php echo '<script'; ?>
>
$(document).ready(function() {
    $('.select2').select2({theme: "bootstrap"});
});

var listAtts = document.querySelectorAll(`[api-get-text]`);
listAtts.forEach(function(el) {
    $.get(el.getAttribute('api-get-text'), function(data) {
        el.innerHTML = data;
    });
});
<?php echo '</script'; ?>
>


</body>

</html><?php }
}
