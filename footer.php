<footer id="Footer" class="clearfix">
            <div class="widgets_wrapper" style="padding:60px 0;">
                <div class="container">
                    <div class="column one">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home_repair_logo_footer.png">
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <div class="copyright">
                            &copy; 2017 BeRepair - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- Side Menu -->
    <div id="Side_slide" class="right dark">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>


    <!-- JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-migrate-3.4.0.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/mfn.menu.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.jplayer.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/animations/animations.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/translate3d.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.themepunch.revolution.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        /*<![CDATA[*/
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f> i && (t = r = f, l = e), i> f && f> r && (r = f, n = e)
                    }), t> r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h> 1 ? 1 : h, f = Math.round(h * f),"fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (
                        void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c)
                            jQuery.each(c, function(e, i) {
                                u = jQuery(i).length> 0 ? u - jQuery(i).outerHeight(!0) : u
                            }), e.fullScreenOffset.split("%").length> 1 &&
                            void 0 != e.fullScreenOffset && e.fullScreenOffset.length> 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 :
                            void 0 != e.fullScreenOffset && e.fullScreenOffset.length> 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else
                    void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        }; /*]]>*/
    </script>
    
    <script>
        setREVStartSize({
            c: jQuery('#rev_slider_1_1'),
            gridwidth: [1080],
            gridheight: [530],
            sliderLayout: 'auto'
        });
        var revapi1, tpj = jQuery;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType:"hero",
                    sliderLayout:"auto",
                    dottedOverlay:"none",
                    delay: 9000,
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1080,
                    gridheight: 530,
                    lazyType:"none",
                    shadow: 0,
                    spinner:"spinner2",
                    autoHeight:"off",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll:"off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>
	
</body>	
</html>