angular.module('controllersForms', [])
.controller('controllersFormsLogin', [function(){
    this.master = {};
    this.reset = function(){ this.user = angular.copy(this.master); };
    this.login = function(user){ this.master = angular.copy(user); };
    this.reset();
}])
;
