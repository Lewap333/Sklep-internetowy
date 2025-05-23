<?php
/* Smarty version 3.1.48, created on 2025-01-19 19:16:39
  from '/var/www/html/admin-dev/themes/new-theme/template/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678d4187199764_96751824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ea54ccfd0b6ca69baab32170568c25c08054a8' => 
    array (
      0 => '/var/www/html/admin-dev/themes/new-theme/template/header.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678d4187199764_96751824 (Smarty_Internal_Template $_smarty_tpl) {
?><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=<?php echo (isset($_smarty_tpl->tpl_vars['viewport_scale']->value)) ? $_smarty_tpl->tpl_vars['viewport_scale']->value : '1';?>
">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="robots" content="NOFOLLOW, NOINDEX">

<link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
favicon.ico" />
<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
app_icon.png" />

<title><?php if ($_smarty_tpl->tpl_vars['meta_title']->value != '') {
echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
 • <?php }
echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>

<?php if (!(isset($_smarty_tpl->tpl_vars['display_header_javascript']->value)) || $_smarty_tpl->tpl_vars['display_header_javascript']->value) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    var help_class_name = '<?php echo addcslashes($_smarty_tpl->tpl_vars['controller_name']->value,'\'');?>
';
    var iso_user = '<?php echo addcslashes($_smarty_tpl->tpl_vars['iso_user']->value,'\'');?>
';
    var lang_is_rtl = '<?php echo intval($_smarty_tpl->tpl_vars['lang_is_rtl']->value);?>
';
    var full_language_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['full_language_code']->value,'\'');?>
';
    var full_cldr_language_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['full_cldr_language_code']->value,'\'');?>
';
    var country_iso_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['country_iso_code']->value,'\'');?>
';
    var _PS_VERSION_ = '<?php echo addcslashes((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null),'\'');?>
';
    var roundMode = <?php echo intval($_smarty_tpl->tpl_vars['round_mode']->value);?>
;
    var youEditFieldFor = '';
    <?php if ((isset($_smarty_tpl->tpl_vars['shop_context']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['shop_context']->value == Shop::CONTEXT_ALL) {?>
    youEditFieldFor = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This field will be modified for all your shops.','js'=>1,'d'=>'Admin.Notifications.Info'),$_smarty_tpl ) );?>
';
    <?php } elseif ($_smarty_tpl->tpl_vars['shop_context']->value == Shop::CONTEXT_GROUP) {?>
    youEditFieldFor = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This field will be modified for all shops in this shop group:','js'=>1,'d'=>'Admin.Notifications.Info'),$_smarty_tpl ) );?>
 <b><?php echo addcslashes($_smarty_tpl->tpl_vars['shop_name']->value,'\'');?>
</b>';
    <?php } else { ?>
    youEditFieldFor = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This field will be modified for this shop:','js'=>1,'d'=>'Admin.Notifications.Info'),$_smarty_tpl ) );?>
 <b><?php echo addcslashes($_smarty_tpl->tpl_vars['shop_name']->value,'\'');?>
</b>';
    <?php }?>
    <?php }?>
    var new_order_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A new order has been placed on your shop.','js'=>1,'d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
';
    var order_number_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order number:','js'=>1,'d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
 ';
    var total_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total:','js'=>1,'d'=>'Admin.Global'),$_smarty_tpl ) );?>
 ';
    var from_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From:','js'=>1,'d'=>'Admin.Global'),$_smarty_tpl ) );?>
 ';
    var see_order_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View this order','js'=>1,'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
';
    var new_customer_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A new customer registered on your shop.','js'=>1,'d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
';
    var customer_name_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer name:','js'=>1,'d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
 ';
    var new_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A new message was posted on your shop.','js'=>1,'d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
';
    var see_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read this message','js'=>1,'d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
';
    var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
    var token_admin_orders = tokenAdminOrders = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminOrders'),$_smarty_tpl ) );?>
';
    var token_admin_customers = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomerThreads'),$_smarty_tpl ) );?>
';
    var currentIndex = '<?php echo addcslashes($_smarty_tpl->tpl_vars['currentIndex']->value,'\'');?>
';
    var employee_token = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminEmployees'),$_smarty_tpl ) );?>
';
    var choose_language_translate = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose language:','js'=>1,'d'=>'Admin.Actions'),$_smarty_tpl ) );?>
';
    var default_language = '<?php echo intval($_smarty_tpl->tpl_vars['default_language']->value);?>
';
    var admin_modules_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminModulesSf",true,array('route'=>"admin_module_catalog_post")));?>
';
    var admin_notification_get_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminCommon"));?>
';
    var admin_notification_push_link = adminNotificationPushLink = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminCommon",true,array('route'=>'admin_common_notifications_ack')));?>
';
    var tab_modules_list = '<?php if ((isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)) && $_smarty_tpl->tpl_vars['tab_modules_list']->value) {
echo addslashes($_smarty_tpl->tpl_vars['tab_modules_list']->value);
}?>';
    var update_success_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful','js'=>1,'d'=>'Admin.Notifications.Success'),$_smarty_tpl ) );?>
';
    var errorLogin = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.','js'=>1,'d'=>'Admin.Notifications.Warning'),$_smarty_tpl ) );?>
';
    var search_product_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for a product','js'=>1,'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
';
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['css_files']->value))) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value, 'media', false, 'css_uri');
$_smarty_tpl->tpl_vars['media']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css_uri']->value => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->do_else = false;
?>
    <link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css_uri']->value,'html','UTF-8' ));?>
" rel="stylesheet" type="text/css"/>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['js_def']->value)) && count($_smarty_tpl->tpl_vars['js_def']->value) || (isset($_smarty_tpl->tpl_vars['js_files']->value)) && count($_smarty_tpl->tpl_vars['js_files']->value))) {?>
  <?php $_smarty_tpl->_subTemplateRender(((defined('_PS_ALL_THEMES_DIR_') ? constant('_PS_ALL_THEMES_DIR_') : null)).("javascript.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value;?>

<?php }
}
}
