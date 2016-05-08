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
</head>
<body>
    <main id="main">
        <form class="login-form" action="/auth/login_check" method="post">
            <div class="login-form__content">
                <div class="gfx-logo--shadow"></div>
                
                {% if($errors !== null) %}
                    <div class="mb-error-messages--container">
                        <div class="mb-error-message">
                            <i class="material-icons mb-error-message__icon">error</i>
                            <span class="mb-error-message__text">{{ $errors }}</span>
                        </div>
                    </div>
                {% endif %}
                
                <div class="mb-input">
                    <input type="text" name="username" minlength="6" maxlength="60" class="mb-input__field mb-input__field--username" autofocus required />
                    <label for="username" class="mb-input__label"><i class="material-icons">person</i></label>
                </div>
                <div class="mb-input">
                    <input type="password" name="password" minlength="6" class="mb-input__field mb-input__field--password" required />
                    <label for="password" class="mb-input__label"><i class="material-icons">vpn_key</i></label>
                </div>
                
                <div class="login-form__actions">
                    <input type="submit" value="Login" class="mb-input--submit mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect" />
                    <input type="button" value="Reset" class="mb-input--reset mdl-button mdl-js-button mdl-js-ripple-effect" />
                </div>
            </div>
        </form>
    </main>
    
    <footer id="footer" class="mdl-mini-footer">
        <div class="mdl-mini-footer__left-section">
        <p>
            &copy; Matija Belec <br>
            {{ round(microtime(true) - MAKO_START, 4) }} seconds | {{ mako\Mako::VERSION }}
        </p>
        </div>
    </footer>
</body>
</html>