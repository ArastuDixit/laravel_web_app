<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Web APP | Admin Panel</title>
        <link rel="stylesheet" href="{{ asset("admin_assets/assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback") }}">
        <link rel="stylesheet" href="{{ asset("admin_assets/assets/plugins/fontawesome-free/css/all.min.css")}}">
        <link rel="stylesheet" href="{{ asset("admin_assets/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{ asset("admin_assets/assets/css/adminlte.min.css?v=3.2.0")}}">
        {{-- <script nonce="5ab338ce-bb78-475a-8397-910cd7e11d3a">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script> --}}
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo mb-4">
                <a href="#"><img src="{{ asset("admin_assets/assets/img/AdminLTELogo.png")}}"></a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <script src="{{ asset("admin_assets/assets/plugins/jquery/jquery.min.js")}}"></script>
        <script src="{{ asset("admin_assets/assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{ asset("admin_assets/assets/js/adminlte.min.js?v=3.2.0")}}"></script>
    </body>
</html>
