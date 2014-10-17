<footer class="mod-footer">
            <div class="footer-top">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="grid_3">
                            <div class="company-info">
                                <img src="images/logo-gray.png" alt="CouponDay">
                                <p class="rs">Toutes les promotions, les prospectus, les catalogues et les bonnes affaires proches de chez-vous.</p>
                               
                            </div>
                        </div>
                        <div class="grid_3">
                            <div class="block social-link">
                                <h3 class="title-block">Suivez nous</h3>
                                <div class="block-content">
                                    <ul class="rs">
                                        <li>
                                            <i class="fa fa-facebook-square fa-2x"></i>
                                            <a href="#" target="_blank">Aimez nous sur Facebook</a>
                                        </li>
                                        <li>
                                            <div class="fb-like" data-href="http://www.lespromos.ma" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--end: Follow us -->
                        <div class="grid_3">
                            <div class="block intro-video">
                                <h3 class="title-block">Contactez nous</h3>
                                <div class="block-content">
                                    <form action="#" method="post">
                                        <label class="wrap-txt" for="">
                                            <input class="input-txt" id="sys_nom" placeholder="Nom é Prenom" type="text" name="FORM_NAME">
                                            <input class="input-txt" id="sys_ville" placeholder="Ville" type="text" name="FORM_VILLE">
                                            <input class="input-txt" id="sys_email" placeholder="Email" type="text" name="FORM_EMAIL">
                                            <input class="input-txt" id="sys_sujet" placeholder="Sujet" type="text" name="FORM_SUJET">
                                            <textarea name="FORM_MESSAGE" placeholder="Message"></textarea>
                                            <button class="btn-flat gr btn-submit-reg" type="button" id="CONTACT_FORM_ENVOYER">Envoyer</button>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div><!--end: Intro Video -->
                        <div class="grid_3">
                            <div class="block blog-recent">
                                <h3 class="title-block">Carte d'adhésion</h3>
                                <div class="block-content">
                                    <div class="entry-item flex">
                                        <a class="try" id="try-1" href="javascript:void(0);" title="">
                                            <img src="images/carte.png" alt="carte groupormo" style="width:245px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: blog-recent -->
                    </div>
                </div>
            </div><!--end: .foot-top-->
            <div class="foot-copyright">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="left-link">
                            <a href="/">Accueil</a>
                            <a class="try" id="try-2" href="javascript:void(0);" title="">Demande un devis</a>
                            <a class="try" id="try-4" href="javascript:void(0);" title="">Contact</a>
                        </div>
                        <div class="copyright">
                            www.lespromos.ma Copyright © 2014 by <a href="http://www.inovancia.com" target="_blank">INOVANCIA</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery_002.js"></script>
<script type="text/javascript" src="js/jquery_004.js"></script>
<script type="text/javascript" src="js/jquery_003.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>
<!--//js for responsive menu-->
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/mlpushmenu.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<!--http://www.jqueryrain.com/?Tiyjhrlo-->
<script src="js/jquery.amaran.min.js"></script>

<script>
    $(function(){
        $('#CONTACT_FORM_ENVOYER').click(function(){
            var nom = $('#sys_nom').val();
            var ville = $('#sys_ville').val();
            var email = $('#sys_email').val();
            var sujet = $('#sys_sujet').val();
            var msg = $('#sys_msg').val();
            var data = "sys_nom="+nom+"&sys_ville="+ville+"&sys_email="+email+"&sys_sujet="+sujet+"&sys_msg="+msg+"&sendmail=1";
                $.ajax({
                    type: "POST",
                    url: 'ajax/ajaxtraitement.php',
                    data: data,
                    success : function(){
                        $.amaran({
                            content:{
                                title:'Contact',
                                message:'Votre message a été envoyé avec succès',
                                info:'',
                                icon:'fa fa-check-circle'
                            },
                            theme:'awesome ok'
                        });
                    },
                    error : function(){
                        $.amaran({
                            content:{
                                title:'Contact',
                                message:'Votre message n\'a pas été envoyé',
                                info:'',
                                icon:'fa fa-exclamation-triangle'
                            },
                            theme:'awesome error'
                        });
                    }
                });
            
        })
    });
</script>
<!--[if lte IE 9]>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/create.placeholder.js"></script>
<![endif]-->

<!--[if lte IE 8]>
<script type="text/javascript" src="js/ie8.js"></script>
<![endif]-->
</body></html>