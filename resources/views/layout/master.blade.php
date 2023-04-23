<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>projet gestion</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    @livewireStyles


    <script nonce="aa3dc12f-3dab-45fb-9f42-3fe2f990a0be">
        (function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})))))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include("composant.topmenu")


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">

                <span class="brand-text font-weight-blod "><b style="size: 1.5em">Logement</b></span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('/images/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block debordement">{{ auth()->user()->prenom }} {{ auth()->user()->nom }}</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

              @include("composant.menu")

            </div>

        </aside>

        <div class="content-wrapper">



            <div class="content">
                @yield("contenu")
            </div>

        </div>

           @include("composant.sidebar")

        <footer class="main-footer bg-dark">

            <div class="float-right d-none d-sm-inline">

            </div>

            <i><p> &copy; <strong> BlackSilver Atlantic <i class="icon fas fa-code text-blue"></i>  <a href="https://adminlte.io">silvermomo.com</a>.</strong> 2022-2023   All rights
            reserved.</p></i>
        </footer>
    </div>


    <script src="{{mix('js/app.js')}}"></script>
    @livewireScripts

</body>

</html>
