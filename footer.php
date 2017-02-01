<hr>

<footer>
<p>&copy; Company 2017</p>
<?php
    $defaults = array(
    'theme_location'  => 'secondary-menu',
    'menu'            => '',
    'container'       => 'nav',
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => 'footer-nav',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    );
    wp_nav_menu( $defaults );
?>
</footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php wp_footer(); ?>
</body>
</html>
