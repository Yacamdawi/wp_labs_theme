<!-- Google map -->
<style>
.mapouter, .gmap_canvas, #gmap_canvas {
    width: 100%;
    height: 100%;
}
</style>

<div class="mapouter">
    <div class="gmap_canvas">
        <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo urlencode(get_theme_mod('adresse-map')) ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>