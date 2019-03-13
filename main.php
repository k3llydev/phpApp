<?php
    class App{
        private $w;
        public function loadLanguage(){
            $data = file_get_contents(BASE_URL."phpApp/languages/es-mx.json");
            $this->w = json_decode($data);
        }
        
        public function initHTML($BASE,$type){
            switch($type){
                case "PC":
                    ?>



<!DOCTYPE html>
                     <html class="html" lang="es">
<head>
    <script>
        window.alert = function(){};
    </script>
  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.scrolleffects.js", "jquery.watch.js", "jquery.musemenu.js", "webpro3198.js", "jquery.musepolyfill.bgsize.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "museredirect.js", "index.css"], "outOfDate":[]};
</script>
    
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!--
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
</script>-->
<script script src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript"></script>

<link type="text/css" rel="stylesheet" href="css/lightslider.css" />                  
<script src="scripts/lightslider.js"></script>



    
<script src="scripts/museredirect58d1.js?4117159434" type="text/javascript"></script>

  <script type="text/javascript">
   Muse.Redirect.redirect('desktop', '', 'phone/', '');
</script>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.3.2.295"/>
  <title>Sofia Kuthy</title>
  <link media="only screen and (max-device-width: 370px)" rel="alternate" href="phone/index.html"/>
  <!-- <link media="only screen and (max-device-width: 960px)" rel="alternate" href="../../../www.w.com/tablet/index.html"/> -->
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global261a.css?518024997"/>
  <link rel="stylesheet" type="text/css" href="css/index2c06.css" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?499282594"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
    </script>
  <!-- JS includes -->
  <script type="text/javascript" src="http://webfonts.creativecloud.com/playfair-display:n4,i4:all;open-sans:n3,i3,n4:all;karla:n4:all;muli:n4,n3,i4:all.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
    <!--custom head HTML-->
  <link rel="stylesheet" href="https://webfonts.creativecloud.com/c/10d011/1w;karla,1,Whp:W:n4;muli,1,2cm8Nx:W:i4,2cm8Nt:W:n3,2cm8Nw:W:n4;open-sans,1,VvG:W:i3,VvF:W:n3,VvH:W:n4;playfair-display,1,XHN:W:i4,XHM:W:n4/l" media="all">
  <script src="http://webfonts.creativecloud.com/playfair-display:n4,i4:all;open-sans:n3,i3,n4:all;karla:n4:all;muli:n4,n3,i4:all.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    
    
 </head>
 <body>   









                    <?php
                break;
                    
                case "MOBILE":
                    ?>
                        
     
     
     
     
     
     <!DOCTYPE html>
<html class="html" lang="es">
<head>
    
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $BASE; ?>apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $BASE; ?>apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $BASE; ?>apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $BASE; ?>apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $BASE; ?>apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $BASE; ?>apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $BASE; ?>apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $BASE; ?>apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $BASE; ?>apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $BASE; ?>android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $BASE; ?>favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $BASE; ?>favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $BASE; ?>favicon-16x16.png">
<link rel="manifest" href="<?php echo $BASE; ?>manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $BASE; ?>ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="format-detection" content="telephone=no">

<script script src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript"></script>

<link type="text/css" rel="stylesheet" href="../css/lightslider.css" />                  
<script src="../scripts/lightslider.js"></script>
    
    <script>
        window.alert = function(){};
    </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.css" />
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->    
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.js"></script>

  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2014.3.2.295"/>
  <title>Sofia Kuthy</title>
  <meta name="viewport" content="width=380"/>
  
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../css/site_global261a.css?518024997"/>
  <link rel="stylesheet" type="text/css" href="css/indexf461.css?527531142" id="pagesheet"/>
<!--    <script src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript"></script>-->
<!--
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
-->
  <!-- JS includes -->
<!--  <script src="http://webfonts.creativecloud.com/playfair-display:n4,i4:all;open-sans:n3,i3,n4:all;karla:n4:all;muli:n4,n3,i4:all.js" type="text/javascript"></script>-->
  <!--[if lt IE 9]>
  <script src="../scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
    <!--custom head HTML-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">


 </head>
 <body>
     
     
     
     
     
     
     
     
     
     
                    <?php
                break;
            }
        }
        
        public function endHTML($BASE, $type="PC"){
            switch($type){
                    
                case "PC":
            ?>
                <div class="preload_images">
   <img class="preload" src="images/u2058-17-r.png" alt=""/>
   <img class="preload" src="images/u2058-17-m.png" alt=""/>
   <img class="preload" src="images/u2058-17-fs.png" alt=""/>
  </div>
  <!-- JS includes -->
  
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
  </script>
  <script src="scripts/museutils5b99.js?521960461" type="text/javascript"></script>
  <script src="scripts/jquery.musemenubf66.js?397543671" type="text/javascript"></script>
  <script src="scripts/jquery.musepolyfill.bgsize03e7.js?349594875" type="text/javascript"></script>
  <script src="scripts/jquery.scrolleffectsa9ac.js?4038615763" type="text/javascript"></script>
  <script src="scripts/jquery.watchff38.js?56779320" type="text/javascript"></script>
  <script src="scripts/webpro3198.js?220831917" type="text/javascript"></script>
  <script src="scripts/musewpslideshowbec0.js?224651946" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlayaee8.js?276313855" type="text/javascript"></script>
  <script src="scripts/touchswipe3545.js?325405309" type="text/javascript"></script>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.css" />
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.js"></script>
     
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() {
    try {
        (function() {
            var a = {},
                b = function(a) {
                    if (a.match(/^rgb/)) return a = a.replace(/\s+/g, "").match(/([\d\,]+)/gi)[0].split(","), (parseInt(a[0]) << 16) + (parseInt(a[1]) << 8) + parseInt(a[2]);
                    if (a.match(/^\#/)) return parseInt(a.substr(1), 16);
                    return 0
                };
            (function() {
                $('link[type="text/css"]').each(function() {
                    var b = ($(this).attr("href") || "").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);
                    b && b[1] && b[2] && (a[b[1]] = b[2])
                })
            })();
            (function() {
                $("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
                for (var c = $(".version"), d = 0; d < Muse.assets.required.length;) {
                    var f = Muse.assets.required[d],
                        g = f.match(/([\w\-\.]+)\.(\w+)$/),
                        k = g && g[1] ? g[1] : null,
                        g = g && g[2] ? g[2] : null;
                    switch (g.toLowerCase()) {
                        case "css":
                            k = k.replace(/\W/gi, "_").replace(/^([^a-z])/gi, "_$1");
                            c.addClass(k);
                            var g = b(c.css("color")),
                                h = b(c.css("background-color"));
                            g != 0 || h != 0 ? (Muse.assets.required.splice(d, 1), "undefined" != typeof a[f] && (g != a[f] >>> 24 || h != (a[f] & 16777215)) && Muse.assets.outOfDate.push(f)) : d++;
                            c.removeClass(k);
                            break;
                        case "js":
                            k.match(/^jquery-[\d\.]+/gi) &&
                                typeof $ != "undefined" ? Muse.assets.required.splice(d, 1) : d++;
                            break;
                        default:
                            throw Error("Unsupported file type: " + g);
                    }
                }
                c.remove();
                if (Muse.assets.outOfDate.length || Muse.assets.required.length) c = "Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.", (d = location && location.search && location.search.match && location.search.match(/muse_debug/gi)) && Muse.assets.outOfDate.length && (c += "\nOut of date: " + Muse.assets.outOfDate.join(",")), d && Muse.assets.required.length && (c += "\nMissing: " + Muse.assets.required.join(",")), alert(c)
            })()
        })();
        /* body */
        Muse.Utils.transformMarkupToFixBrowserProblemsPreInit(); /* body */
        Muse.Utils.prepHyperlinks(true); /* body */
        Muse.Utils.initWidget('.MenuBar', function(elem) {
            return $(elem).museMenu();
        }); /* unifiedNavBar */




        Muse.Utils.resizeHeight() /* resize height */


        
        /*
        Muse.Utils.initWidget('#slideshowu980', function(elem) {
            $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {
                autoPlay: false,
                displayInterval: 3500,
                slideLinkStopsSlideShow: false,
                transitionStyle: 'fading',
                lightboxEnabled_runtime: true,
                shuffle: false,
                transitionDuration: 500,
                enableSwipe: true,
                elastic: 'off',
                resumeAutoplay: true,
                resumeAutoplayInterval: 3000,
                playOnce: false
            }));


        });
        */



        Muse.Utils.initWidget('#widgetu2042', function(elem) {
            new WebPro.Widget.Form(elem, {
                validationEvent: 'submit',
                errorStateSensitivity: 'high',
                fieldWrapperClass: 'fld-grp',
                formSubmittedClass: 'frm-sub-st',
                formErrorClass: 'frm-subm-err-st',
                formDeliveredClass: 'frm-subm-ok-st',
                notEmptyClass: 'non-empty-st',
                focusClass: 'focus-st',
                invalidClass: 'fld-err-st',
                requiredClass: 'fld-err-st',
                ajaxSubmit: true
            });
        }); /* #widgetu2042 */
        Muse.Utils.fullPage('#page'); /* 100% height page */
        Muse.Utils.showWidgetsWhenReady(); /* body */
        Muse.Utils.transformMarkupToFixBrowserProblems(); /* body */
    } catch (e) {
        if (e && 'function' == typeof e.notify) e.notify();
        else Muse.Assert.fail('Error calling selector function:' + e);
    }
});
</script>
   </body>

</html>
            <?php
                    break;
                case "MOBILE" :
            ?>
     
     
     <div class="preload_images">
   <img class="preload" src="images/u2058-17-r.png" alt=""/>
   <img class="preload" src="images/u2058-17-m.png" alt=""/>
   <img class="preload" src="images/u2058-17-fs.png" alt=""/>
  </div>
   </body>

</html>
     
     
     <?php
                    
               break;     
                    
            }
        }
        
            
            
            
            
            
            
            
            
        public function output($string, $f = []){
            
            if(array_key_exists($string, (array) $this->w)){
                $string = $this->w->{$string};
            }
            
            $string = str_replace(" ","^",$string);

            
            if(in_array("spaced", $f)){
                $string = implode(' ',str_split($string)); 
                
            }
            
            if(in_array("upper", $f)){
                $string = mb_strtoupper($string);
            }
            
            
            
            
            
            $string = str_replace("^","&nbsp;",$string);
            
            echo $string;
            
        }
    }



$phpApp = new App;


?>