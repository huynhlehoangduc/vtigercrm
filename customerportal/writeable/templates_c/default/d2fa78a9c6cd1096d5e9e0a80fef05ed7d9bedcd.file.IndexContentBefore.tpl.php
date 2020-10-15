<?php /* Smarty version Smarty-3.1.19, created on 2020-10-15 18:24:03
         compiled from "D:\Work\projects\vtigercrm\customerportal\layouts\default\templates\Portal\partials\IndexContentBefore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4527700185f8893c3692a25-79909407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2fa78a9c6cd1096d5e9e0a80fef05ed7d9bedcd' => 
    array (
      0 => 'D:\\Work\\projects\\vtigercrm\\customerportal\\layouts\\default\\templates\\Portal\\partials\\IndexContentBefore.tpl',
      1 => 1587736809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4527700185f8893c3692a25-79909407',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f8893c369c7d5_98677156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8893c369c7d5_98677156')) {function content_5f8893c369c7d5_98677156($_smarty_tpl) {?>


<div class="navigation-controls-row">
<div ng-if="checkRecordsVisibility(filterPermissions)" class="panel-title col-md-12 module-title">{{ptitle}}
</div>
</div>
    <div class="row portal-controls-row">
        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-8">
		<div ng-if="!checkRecordsVisibility(filterPermissions)" class="panel-title col-md-12 module-title">{{ptitle}}</div>
            <div class="btn-group btn-group-justified" ng-if="checkRecordsVisibility(filterPermissions)">
                <div class="btn-group">
                    <button type="button" translate="Mine"
                            ng-class="{'btn btn-default btn-primary':searchQ.onlymine, 'btn btn-default':!searchQ.onlymine}" ng-click="searchQ.onlymine=true"></button>
                </div>
                <div class="btn-group">
                    <button type="button" translate = "All"
                            ng-class="{'btn btn-default btn-primary':!searchQ.onlymine, 'btn btn-default':searchQ.onlymine}" ng-click="searchQ.onlymine=false"></button>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
          <div class="addbtnContainer" ng-if="isCreatable">
            <button class="btn btn-primary" ng-click="createRecord(module)">New {{ptitle}}</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
          &nbsp;
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <button class="btn btn-primary" ng-if="exportEnabled" ng-csv="exportRecords(module)" csv-header="csvHeaders" add-bom="true" filename="{{filename}}.csv">{{'Export'|translate}}&nbsp;{{ptitle}}</button>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pagination-holder">
            <div class="pull-right">
                <div class="text-center">
                    <pagination
                        total-items="totalPages" max-size="3" ng-model="currentPage" ng-change="pageChanged(currentPage)" boundary-links="true">
                    </pagination>
                </div>
            </div>
        </div>
    </div>

<?php }} ?>
