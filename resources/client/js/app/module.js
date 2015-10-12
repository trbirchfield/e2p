angular.module('app', ['ngMessages', 'angular-loading-bar', 'ui.sortable', 'LocalStorageModule', 'infinite-scroll', 'ngMask', 'ngFileUpload','slugifier', '720kb.datepicker', 'ui.timepicker', 'localytics.directives'])
	.config(['$interpolateProvider', function($interpolateProvider) {
		$interpolateProvider.startSymbol('<%').endSymbol('%>');
	}]);
