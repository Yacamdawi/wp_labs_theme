<!-- Contact section -->
<div class="contact-section spad fix" id="contact">
  <div class="container">
    <div class="row">
      <!-- contact info -->
      <div class="col-md-5 col-md-offset-1 contact-info col-push">
        <div class="section-title left">
          <h2><?php echo get_theme_mod('titre-contact') ?></h2>
        </div>
        <p><?php echo get_theme_mod('texte-contact') ?></p>
        <h3 class="mt60"><?php echo get_theme_mod('sous-titre-contact') ?></h3>
        <p class="con-item"><?php echo lineBreak('coordonnee-contact') ?></p>
      </div>
      <!-- contact form -->
      <div class="col-md-6 col-pull">
        <!-- On vérifie si une notification existe en variable de session -->
        <?php if (isset($_SESSION['notice'])) : ?>
          <?php
          // on récupère les variables de session et on les stocks dans des variables plus simple à utiliser
          $status = $_SESSION['notice']['status'];
          $message = $_SESSION['notice']['message'];
          ?>
          <div class="alert alert-<?= $status; ?> is-dismissible">
            <p><?= $message; ?></p>
          </div>
          <?php
          // on supprime la notification des variables de sessions afin qu'elle ne s'affiche plus au rechargement de la page
          unset($_SESSION['notice']);
          ?>
        <?php endif; ?>
        <form method="post" class="form-class" id="con_form" action="<?= admin_url('admin-post.php'); ?>#contact">
          <?php wp_nonce_field('send-mail'); ?>
          <input type="hidden" name="action" value="send-mail">
          <div class="row">
            <div class="col-sm-6">
              <input type="text" name="name" placeholder="Your name" value="<?php echo (is_user_logged_in()) ? wp_get_current_user()->user_login : ''; ?>">
            </div>
            <div class="col-sm-6">
              <input type="text" name="email" placeholder="Your email" value="<?php echo (is_user_logged_in()) ? wp_get_current_user()->user_email : ''; ?>">
            </div>
            <div class="col-sm-12">
              <input type="text" name="subject" placeholder="Subject" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['subject'] : '' ?>">
              <textarea name="message" placeholder="Message"><?php echo isset($_SESSION['old']) ? $_SESSION['old']['message'] : '' ?></textarea>
              <button type="submit" class="site-btn">send</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- Contact section end-->