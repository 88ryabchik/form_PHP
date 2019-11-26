        <form class="auth" action="">
            <fieldset>
                <legend>Авторизация</legend>
                <div class="auth__row">
                    <label for="username">User name</label>
                    <input value="Vasa" class="auth__text" type="text" id="username">
                    <i class="auth__error auth__error_hide ">Don't contain (_, {},$,0-9 lenght > 5 chars)</i>
                </div>
                <div class="auth__row">
                    <label for="useremail">User email</label>
                    <input value="Vasa@gmail.com" class="auth__text" type="text" id="useremail">
                    <i class="auth__error auth__error_hide ">Not valid email (example@gmail.com) </i>
                </div>

                <div class="auth__row">
                    <label for="userphone">User Phone</label>
                    <input value="0985423456" class="auth__text" type="text" id="userphone">
                    <i class="auth__error auth__error_hide ">Not valid phone (+380934555654) </i>
                </div>

                <div class="auth__row">
                    <label for="userpass">User password</label>
                    <input value="45433jhfsdjhf" class="auth__text" type="password" id="userpass">
                    <i class="auth__error auth__error_hide ">Must  contain (az, AZ, 0-9, lenght > 7 chars)</i>
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
    