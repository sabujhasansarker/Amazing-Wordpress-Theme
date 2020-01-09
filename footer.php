

<?php 
        $option='option';
        $site_logo = get_field('site_logo',$option);
        $header_logo =get_field('header_logo',$option);
        $footer_logo = get_field('footer_logo',$option);
        $phone_number_ = get_field('phone_number_',$option);
        $footer_text = get_field('footer_text',$option);
        $logo = get_field('if_you_went_same_logo_header_and_footer',$option);
        $logo_link = get_field('logo_link',$option);
 ?>
<footer class="footer">
    <div class="ftrIn">
        <div class="ftrInLft">
           <?php 
                if ($logo) {
                    ?>
                    <a class="ftrLogo" href="<?php echo($logo_link['url']) ?>"><amp-img width="208" height="63" layout="responsive" src="<?php echo($site_logo) ?>" alt="Logo"></amp-img></a>
                    <?php
                }else{
                    ?>
                    <a class="ftrLogo" href="<?php echo($logo_link['url']) ?>"><amp-img width="208" height="63" layout="responsive" src="<?php echo($footer_logo) ?>" alt="Logo"></amp-img></a>
                    <?php
                }
             ?>
            <span class="ftrPhone">Phone: <a href="tel:+<?php echo($phone_number_) ?>"><?php echo($phone_number_) ?></a></span>
        </div>
        <div class="ftrInRgt">
            <p><?php echo $footer_text; ?></p>
        </div>
    </div>
</footer>
<!-- Footer end -->
<?php wp_footer() ?>
</body>
</html>