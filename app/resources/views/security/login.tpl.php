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
        <div ng-controller="controllersFormsLogin">
            <form class="login-form" novalidate>
                <div class="login-form__content mdl-card mdl-shadow--2dp">
                    <header class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Eleganto</h2>
                    </header>
                    <div class="mdl-card__supporting-text">
                        <label for="username" class="mdl-textfield mdl-js-textfield">
                            Username: 
                            <input ng-model="user.username" type="text" name="username" value=" " class="mdl-textfield__input" autofocus />
                        </label>

                        <label for="password" class="mdl-textfield mdl-js-textfield">
                            Password: 
                            <input ng-model="user.password" type="password" name="password" value=" " class="mdl-textfield__input" />
                        </label>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <input ng-click="reset()" type="button" value="Reset" class="mdl-button mdl-js-button mdl-js-ripple-effect" />
                        <input ng-click="login(user)" type="submit" value="Login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" />
                    </div>
                </div>
            </form>
        </div>
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