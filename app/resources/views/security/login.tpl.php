<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ $__charset__ }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    
    <title>Login - Eleganto</title>
    
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//code.getmdl.io/1.1.3/material.blue_grey-deep_orange.min.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    
    <script defer src="//code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
</head>
<body ng-app="appEleganto">
    <main id="main">
        <form class="login-form" novalidate>
            <div ng-controller="controllersFormsLogin as cfl" class="login-form__content">
                <div class="gfx-logo--shadow"></div>
                <div class="mb-input">
                    <input ng-model="cfl.user.username" type="text" name="username" value=" " class="mb-input__field mb-input__field--username" autofocus />
                    <label for="username" class="mb-input__label"><i class="material-icons">person</i></label>
                </div>
                <div class="mb-input">
                    <input ng-model="cfl.user.password" type="password" name="password" value=" " class="mb-input__field mb-input__field--password" />
                    <label for="password" class="mb-input__label"><i class="material-icons">vpn_key</i></label>
                </div>
                <div class="login-form__actions">
                    <input ng-click="cfl.login(cfl.user)" type="submit" value="Login" class="mb-input--submit mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" />
                    <input ng-click="cfl.reset()" type="button" value="Reset" class="mb-input--reset mdl-button mdl-js-button mdl-js-ripple-effect" />
                </div>
            </div>
        </form>
    </main>
    
    <footer id="footer" class="mdl-mini-footer">
        <div class="mdl-mini-footer__left-section">
        <p>
            &copy; Matija Belec
<!--            {{ round(microtime(true) - MAKO_START, 4) }} seconds | {{ mako\Mako::VERSION }}-->
        </p>
        </div>
    </footer>
    
    <script src="/assets/js/ng/controllers/forms.js"></script>
    <script src="/assets/js/ng/eleganto.js"></script>
</body>
</html>