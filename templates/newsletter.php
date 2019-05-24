<!-- newsletter section -->
<div class="newsletter-section spad" id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" method="post" action="<?= admin_url('admin-post.php'); ?>#newsletter">
                    <?php wp_nonce_field('send-newsletter'); ?>
                    <input type="hidden" name="action" value="send-newsletter">
                    <input type="text" name="email" placeholder="Your e-mail here">
                    <button type="submit" class="site-btn btn-2">Newsletter</button>
                </form>
                <!-- On vérifie si une notification existe en variable de session -->
                <?php if (isset($_SESSION['newsletter'])) : ?>
                    <?php
                    // on récupère les variables de session et on les stocks dans des variables plus simple à utiliser
                    $status = $_SESSION['newsletter']['status'];
                    $message = $_SESSION['newsletter']['message'];
                    ?>
                    <div class="alert alert-<?= $status; ?> is-dismissible">
                        <p><?= $message; ?></p>
                    </div>
                    <?php
                    // on supprime la notification des variables de sessions afin qu'elle ne s'affiche plus au rechargement de la page
                    unset($_SESSION['newsletter']);
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->