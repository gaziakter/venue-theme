<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-veno">
                    <div class="logo">
                        <?php venue_show_footer_logo(); ?>
                    </div>
                        <?php venue_show_footer_text(); ?>
                    <ul class="social-icons">
                        <li>
                            <?php venue_social_icon(); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="useful-links">
                    <div class="footer-heading">
                        <h4>Useful Links</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?php venue_footer_menu(); ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info">
                    <div class="footer-heading">
                        <h4>Contact Information</h4>
                    </div>
                    <?php footer_contact_text(); ?>
                    <ul>
                        <?php footer_contact_info(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <?php venue_footer_copyright_show(); ?>
</div>

<?php wp_footer(); ?>

</body>

</html>