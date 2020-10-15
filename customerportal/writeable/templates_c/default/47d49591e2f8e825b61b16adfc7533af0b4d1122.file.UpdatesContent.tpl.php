<?php /* Smarty version Smarty-3.1.19, created on 2020-10-15 18:25:27
         compiled from "D:\Work\projects\vtigercrm\customerportal\layouts\default\templates\Portal\partials\UpdatesContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12728198215f889417c012c1-73526712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47d49591e2f8e825b61b16adfc7533af0b4d1122' => 
    array (
      0 => 'D:\\Work\\projects\\vtigercrm\\customerportal\\layouts\\default\\templates\\Portal\\partials\\UpdatesContent.tpl',
      1 => 1587736809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12728198215f889417c012c1-73526712',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f889417c05452_37391727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f889417c05452_37391727')) {function content_5f889417c05452_37391727($_smarty_tpl) {?>


<div class="row">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="container-fluid updatesContainer">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="container-fluid">
							<div class="row" ng-show="updates === ''">
								<span class="value">No Updates Found.</span>
							</div>
							<div class="row update-row" ng-repeat="update in updates" ng-if="isLanguage(update)">

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" ng-repeat="(fieldname,value) in update" ng-if="isLanguage(update)">
									<p ng-if="value.updateStatus=='updated'">
										<span class="update-bullet">&nbsp;</span>
										<strong> {{fieldname}} </strong>
										<span class="value">
											<span ng-if="value.previous!==''">&nbsp;{{'changed from'|translate}}&nbsp;
												<strong class="break" style="white-space:pre-line;">{{value.previous}}&nbsp;</strong>
												<span ng-if="value.current!==''">&nbsp;{{'to'|translate}}&nbsp;</span>
											</span>
										</span>
										<span class="value">
											<span ng-if="value.previous =='' && value.current!==''">&nbsp;{{'changed to'|translate}}&nbsp;</span>
											<strong class="break" style="white-space:pre-line;">{{value.current}}</strong>
										</span>
										<span class="value">
											<span ng-if="value.previous =='' && value.current==''">&nbsp;{{'deleted'|translate}}&nbsp;</span>
										</span>
										<small class="text-muted update-time">{{update.modifiedtime}}</small>
									</p>
									<p ng-if="value.updateStatus=='created'">
										<span class="update-bullet">&nbsp;</span>
										<span>
											<strong>{{update.created.user}}</strong>&nbsp;{{'created'|translate}}</span>
										<small class="text-muted update-time">{{update.modifiedtime}}</small>
									</p>
								</div>
							</div>
							<a ng-if="!updatesLoaded && !noUpdates  && created" ng-click="loadHistoryPage(historyPageNo)">{{'more'|translate}}...</a>
							<p ng-if="updatesLoaded && !noUpdates" class="text-muted">{{'No more updates'|translate}}</p>
							<p ng-if="!updatesLoaded && noUpdates" class="text-muted">{{'No updates'|translate}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php }} ?>
