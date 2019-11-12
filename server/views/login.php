        <form class="auth" action="">
            <fieldset>
                <legend>Авторизация</legend>
                <div class="auth__row">
                    <label for="username">User name</label>
                    <input class="auth__text" type="text" id="username">
                    <i class="auth__error">Don't contain (_, {},$,0-9 lenght > 5 chars)</i>
                </div>
                <div class="auth__row">
                    <label for="useremail">User email</label>
                    <input class="auth__text" type="text" id="useremail">
                </div>
                <div class="auth__row">
                    <label for="userpass">User password</label>
                    <input class="auth__text" type="password" id="userpass">
                </div>
                <label class="auth__check">
                    Subscribe
                    <input type="checkbox" id="usersubscribe">
                </label>
                
                <div class="auth__row">
                <button type="button" id="sendbtn" class="auth__btn">Login</button>
            </div>
            </fieldset>
        </form>
        <script defer src="/public/login.js"></script>
    