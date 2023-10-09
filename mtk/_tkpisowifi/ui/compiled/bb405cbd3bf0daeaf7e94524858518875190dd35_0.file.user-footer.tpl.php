<?php
/* Smarty version 4.3.1, created on 2023-10-06 19:22:59
  from 'C:\laragon\www\mtk\_tkpisowifi\ui\ui\sections\user-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651fee135ab408_41236472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb405cbd3bf0daeaf7e94524858518875190dd35' => 
    array (
      0 => 'C:\\laragon\\www\\mtk\\_tkpisowifi\\ui\\ui\\sections\\user-footer.tpl',
      1 => 1696140465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651fee135ab408_41236472 (Smarty_Internal_Template $_smarty_tpl) {
?>        </section>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['_c']->value['CompanyFooter']))) {?>
            <footer class="main-footer">
                <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyFooter'];?>

            </footer>
        <?php } else { ?>
            <footer class="main-footer">
                TKHOTSPOT <a href="" rel="nofollow noreferrer noopener"
                    target="_blank">iBNuX</a>, Theme by <a href="https://adminlte.io/" rel="nofollow noreferrer noopener"
                    target="_blank">AdminLTE</a>
            </footer>
        <?php }?>
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

        <?php if ($_smarty_tpl->tpl_vars['_c']->value['tawkto'] != '') {?>
            <!--Start of Tawk.to Script-->
            <?php echo '<script'; ?>
 type="text/javascript">
                var Tawk_API = Tawk_API || {},
                    Tawk_LoadStart = new Date();
                (function() {
                    var s1 = document.createElement("script"),
                        s0 = document.getElementsByTagName("script")[0];
                    s1.async = true;
                    s1.src='https://embed.tawk.to/<?php echo $_smarty_tpl->tpl_vars['_c']->value['tawkto'];?>
';
                    s1.charset = 'UTF-8';
                    s1.setAttribute('crossorigin', '*');
                    s0.parentNode.insertBefore(s1, s0);
                })();
            <?php echo '</script'; ?>
>
            <!--End of Tawk.to Script-->
        <?php }?>

        
            <?php echo '<script'; ?>
>
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
