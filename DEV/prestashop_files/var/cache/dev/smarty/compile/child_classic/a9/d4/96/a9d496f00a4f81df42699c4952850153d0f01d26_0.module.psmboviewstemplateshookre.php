<?php
/* Smarty version 3.1.48, created on 2025-01-19 18:33:52
  from 'module:psmboviewstemplateshookre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678d3780ad4b86_24140016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d496f00a4f81df42699c4952850153d0f01d26' => 
    array (
      0 => 'module:psmboviewstemplateshookre',
      1 => 1737229724,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678d3780ad4b86_24140016 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<?php echo '<script'; ?>
>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesTitleTranslated']->value,'javascript' ));?>
',
        'description': "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesDescriptionTranslated']->value,'javascript' ));?>
",
        'Close': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesCloseTranslated']->value,'javascript' ));?>
',
      },
      recommendedModulesUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesUrl']->value,'javascript' ));?>
',
      shouldAttachRecommendedModulesAfterContent: <?php echo intval($_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesAfterContent']->value);?>
,
      shouldAttachRecommendedModulesButton: <?php echo intval($_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesButton']->value);?>
,
      shouldUseLegacyTheme: <?php echo intval($_smarty_tpl->tpl_vars['shouldUseLegacyTheme']->value);?>
,
    });
  }
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['shouldDisplayModuleManagerMessage']->value) {
echo '<script'; ?>
>
$(document).ready( function () {
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== "undefined") {
    const targetDiv = $('#main-div .content-div').first()

    const divModuleManagerMessage = document.createElement("div");
    divModuleManagerMessage.setAttribute("id", "module-manager-message-cdc-container");

    divModuleManagerMessage.classList.add('module-manager-message-wrapper');
    divModuleManagerMessage.classList.add('cdc-container');

    targetDiv.prepend(divModuleManagerMessage)
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = <?php echo $_smarty_tpl->tpl_vars['shopContext']->value;?>
;

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
})
<?php echo '</script'; ?>
>
<?php }?>
<!-- end /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl --><?php }
}
