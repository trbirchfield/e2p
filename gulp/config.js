module.exports = {

	// compile js
	js: [{
		namespace: 'admin',
		src: [
			'resources/admin/js/**/*.js',
			'!resources/admin/js/app/**/*.js'
		]
	}, {
		namespace: 'client',
		src: [
			'resources/client/js/**/*.js',
			'!resources/client/js/app/**/*.js'
		]
	}],

	// compile angular modules
	modules: [{
		module: 'app',
		namespace: 'admin',
		src: 'resources/admin/js/app',
		dependencies: [
			'bower_components/angular-messages/angular-messages.min.js',
			'bower_components/angular-loading-bar/build/loading-bar.min.js',
			'bower_components/angular-bootstrap/ui-bootstrap.min.js',
			'bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js',
			'bower_components/ng-ckeditor/ng-ckeditor.js',
			'bower_components/danialfarid-angular-file-upload/dist/ng-file-upload-all.js'
		]
	}, {
		module: 'app',
		namespace: 'client',
		src: 'resources/client/js/app',
		dependencies: [
			'bower_components/angular-messages/angular-messages.min.js',
			'bower_components/angular-loading-bar/build/loading-bar.min.js',
			'bower_components/angular-ui-sortable/sortable.js',
			'bower_components/angular-local-storage/dist/angular-local-storage.js',
			'bower_components/angular-payments/lib/angular-payments.js',
			'bower_components/ngInfiniteScroll/build/ng-infinite-scroll.min.js',
			'bower_components/ng-ckeditor/ng-ckeditor.js',
			'bower_components/angular-mask/dist/ngMask.min.js',
			'bower_components/danialfarid-angular-file-upload/dist/ng-file-upload-all.js',
			'bower_components/angular-slugify/angular-slugify.js',
			'bower_components/angularjs-datepicker/dist/angular-datepicker.min.js',
			'bower_components/angular-jquery-timepicker/src/timepickerdirective.min.js',
			'bower_components/angular-chosen-localytics/chosen.js'
		]
	}],

	// compile css
	css: [{
		namespace: 'admin',
		src: 'resources/admin/scss/**/*.scss'
	}, {
		namespace: 'client',
		src:'resources/client/scss/**/*.scss'
	}],

	// move fonts
	fonts: [
		'bower_components/bootstrap-sass/assets/fonts/bootstrap/**/*',
		'bower_components/fontawesome/fonts/**/*',
		'bower_components/slick-carousel/slick/fonts/**/*',
		'resources/client/fonts/**/*'
	],

	// move vendor files
	vendor: [
		'bower_components/modernizr/modernizr.js',
		'bower_components/bootstrap/dist/js/bootstrap.js',
		'bower_components/jquery/dist/jquery.js',
		'bower_components/foundation/js/foundation.js',
		'bower_components/angular/angular.js',
		'bower_components/lodash/lodash.js',
		'bower_components/google-code-prettify/bin/prettify.min.js',
		'bower_components/slick-carousel/slick/slick.js',
		'bower_components/jquery.localScroll/jquery.localScroll.min.js',
		'bower_components/jquery.scrollTo/jquery.scrollTo.min.js',
		'bower_components/moment/moment.js',
		'bower_components/scrollReveal.js/dist/scrollReveal.min.js',
		'bower_components/angular-ui-utils/ui-utils.min.js',
		'bower_components/Chart.js/Chart.min.js',
		'bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
		'bower_components/fancybox/source/jquery.fancybox.pack.js',
		'bower_components/fancybox/source/helpers/jquery.fancybox-media.js',
		'bower_components/jquery-timepicker-jt/jquery.timepicker.min.js',
		'bower_components/chosen/chosen.jquery.min.js'
	]
};
