<style>
a.fb-auth {
    text-decoration: none;
    color: #3B5998;
    font-size: 11px;
    line-height: 14px;
    background: #29447E url(https://s-static.ak.facebook.com/rsrc.php/v1/zL/r/FGFbc80dUKj.png);
    background-repeat: no-repeat;
    background-position: left -188px;
    cursor: pointer;
    display: inline-block;
    padding: 0 0 0 1px;
    outline: none;
}
.fb-auth-text {
    background: #5F78AB url(https://s-static.ak.facebook.com/rsrc.php/v1/zL/r/FGFbc80dUKj.png);
    border-top: solid 1px #879AC0;
    border-bottom: solid 1px #1A356E;
    color: white;
    display: block;
    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
    font-weight: bold;
    padding: 2px 6px 3px 6px;
    margin: 1px 1px 0 21px;
    text-shadow: none;
}
</style>
<a class="fb-auth" onclick="<?php echo $view['security']->isGranted("ROLE_FACEBOOK")?"":"top.window.location='".$login_url."'; return false;" ?>" href="<?php echo $view['security']->isGranted("ROLE_FACEBOOK")?logout_url:"#" ?>"><span class="fb-auth-text"><?php echo $view['security']->isGranted("ROLE_FACEBOOK")?$logout_label:$login_label ?></span></a>