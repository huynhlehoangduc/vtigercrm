<?php /* Smarty version Smarty-3.1.19, created on 2020-10-15 18:25:27
         compiled from "D:\Work\projects\vtigercrm\customerportal\layouts\default\templates\Products\partials\DetailRelatedContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17043172535f889417b8c058-79785377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d48eafee1257e5ce9f3634d452e32bbad6bb33f' => 
    array (
      0 => 'D:\\Work\\projects\\vtigercrm\\customerportal\\layouts\\default\\templates\\Products\\partials\\DetailRelatedContent.tpl',
      1 => 1587736809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17043172535f889417b8c058-79785377',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f889417b98925_95782789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f889417b98925_95782789')) {function content_5f889417b98925_95782789($_smarty_tpl) {?>

<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 rightEditContent">
    
        <ul class="nav nav-tabs" ng-init="tab = 1">
            <li ng-class="{active:tab===1}">
                <a href ng-click="tab = 1"><strong>Updates </strong></a>
            </li>
        </ul>
        
    <br>
    <div class="tab-content">
        <div  ng-show="tab === 1"> 
            <?php echo $_smarty_tpl->getSubTemplate ("Portal/partials/UpdatesContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
</div><?php }} ?>
