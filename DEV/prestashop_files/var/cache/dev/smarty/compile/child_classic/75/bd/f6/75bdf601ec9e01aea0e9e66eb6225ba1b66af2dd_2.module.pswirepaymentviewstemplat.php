<?php
/* Smarty version 3.1.48, created on 2025-01-20 14:19:38
  from 'module:pswirepaymentviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678e4d6a0beb33_67841810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75bdf601ec9e01aea0e9e66eb6225ba1b66af2dd' => 
    array (
      0 => 'module:pswirepaymentviewstemplat',
      1 => 1652973222,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl' => 1,
  ),
),false)) {
function content_678e4d6a0beb33_67841810 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/ps_wirepayment/views/templates/hook/payment_return.tpl -->
<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_name']->value),'d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
<br/>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please send us a bank wire with:','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>

</p>
<?php $_smarty_tpl->_subTemplateRender('module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please specify your order reference %s in the bankwire description.','sprintf'=>array($_smarty_tpl->tpl_vars['reference']->value),'d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
<br/>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ve also sent you this information by e-mail.','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>

</p>
<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order will be sent as soon as we receive payment.','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
</strong>
<p>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have questions, comments or concerns, please contact our [1]expert customer support team[/1].','d'=>'Modules.Wirepayment.Shop','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['contact_url']->value)."'>",'[/1]'=>'</a>')),$_smarty_tpl ) );?>

</p>
<!-- end /var/www/html/modules/ps_wirepayment/views/templates/hook/payment_return.tpl --><?php }
}
