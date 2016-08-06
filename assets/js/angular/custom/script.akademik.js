/**
 * Sistem Akademik Angular JS Script
 */

var appAkademik = angular.module("AppAkademi", ['ngRoute'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

/**
 * -------------------------------
 * Scope Route Sistem Akademik
 * -------------------------------
 */
appAkademik.config(function($routeProvider, $locationProvider) {
    var root = '/akademik/';
    $routeProvider
            .when('/', {
                templateUrl: root + 'home',
                controller: 'HomeController'
            })
            .when('/master/:name*', {
                templateUrl: function(urlattr) {
                    return root + 'master/' + urlattr.name;
                },
                controller: 'MasterBarangController'
            })
            .when('/penjadwalan/:name*', {
                templateUrl: function(urlattr) {
                    return root + 'penjadwalan/' + urlattr.name;
                },
                controller: 'PenjadwalanController'
            })
            .otherwise({
                redirectTo: '/'
            })
});

/**
 *--------------------------------------
 * Scope Controller Sistem Akademik
 * -------------------------------------
 */
appAkademik.controller('HomeController', function($scope) {
    $scope.message = 'HomeController';
    $('#button-click').on('click', function() {
        alert('HomeController');
    });
});

appAkademik.controller('MasterBarangController', function($scope) {
    $scope.message = 'MasterBarangController';
    $('#button-click').on('click', function() {
        alert('MasterBarangController');
    });
});

appAkademik.controller('PenjadwalanController', function($scope) {
    $scope.message = 'PenjadwalanController';
});

/**
 * ------------------------------------------
 * Scope Other Config Sistem Akademik
 * ------------------------------------------
 */

appAkademik.run(function($rootScope, $location, $route, $timeout) {

    $rootScope.config = {};
    $rootScope.config.appUrl = $location.url();
    $rootScope.config.app_path = $location.path();
    $rootScope.layout = {};
    $rootScope.layout.loading = false;
    /**
     * Confing Loading After Load
     */
    $rootScope.$on('$routeChangeStart', function() {
        $timeout(function() {
            $rootScope.layout.loading = true;
        });
    });
    $rootScope.$on('$routeChangeSuccess', function() {
        $timeout(function() {
            $rootScope.layout.loading = false;
        }, 300);
    });
    $rootScope.$on('$routeChangeError', function() {
        $timeout(function() {
            $rootScope.layout.loading = false;
        });
    });

});

/**
 * ------------------------------------
 * Global Method Sistem Akademik
 * ------------------------------------
 */
var myApp = {
    insert: function() {

    },
    update: function() {

    },
    delete: function() {

    },
    validation: function() {

    },
    global: {
        numeric: null,
        date: null
    }
}


