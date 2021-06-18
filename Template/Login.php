<div class="login100-form">
    <form class="validate-form" id="login" name="login" method="post" action="Models/Model-Login.php">
        <div class="wrap-input100 validate-input" data-validate="Enter username"><input class="input100" type="text"
                name="username" id="UserName" placeholder="Usuario" autocomplete="off"><span class="focus-input100"
                data-placeholder="&#xe82a;"></span></div>
        <div class="wrap-input100 validate-input" data-validate="Enter password"><input class="input100" type="password"
                name="pass" id="Password" placeholder="Password"><span class="focus-input100" data-placeholder="&#xe80f;"></span>
        </div>
        <div class="text-center my-3 py-2"><button type="submit" class="btn btn-info btn-round px-5">Login </button>
        <input type="hidden" id="LoginUser" name="LoginUser" value="false">
        </div>
    </form>
</div>
