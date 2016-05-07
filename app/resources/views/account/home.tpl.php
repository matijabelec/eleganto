<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ $__charset__ }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    
    <title>Home - Eleganto</title>
    
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//code.getmdl.io/1.1.3/material.blue_grey-deep_orange.min.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    
    <script defer src="//code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
</head>
<body>
    <main id="main">
        <div>
            <div class="gfx-logo--shadow"></div>

            {% if($errors !== null) %}
                <div class="mb-error-messages--container">
                    <div class="mb-error-message">
                        <i class="material-icons mb-error-message__icon">error</i>
                        <span class="mb-error-message__text">{{ $errors }}</span>
                    </div>
                </div>
            {% endif %}

            <form action="/auth/logout" method="post">
                <input type="submit" value="Logout" class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect" />
            </form>
        </div>
    </main>
    
    <footer id="footer" class="mdl-mini-footer">
        <div class="mdl-mini-footer__left-section">
        <p>
            &copy; Matija Belec <br>
            {{ round(microtime(true) - MAKO_START, 4) }} seconds | {{ mako\Mako::VERSION }}
        </p>
        </div>
    </footer>
    
    <script src="/assets/js/ng/controllers/forms.js"></script>
    <script src="/assets/js/ng/eleganto.js"></script>
</body>
</html>