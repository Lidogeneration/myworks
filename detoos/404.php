<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Takara
 * @since 1.0.0
 */

get_header();
?>

	<section class="done d-flex justify-content-center align-items-center">
  <div class="text-center">
  <h1><i class="fas fa-times"></i></h1>
  <h1>Ошибка 404</h1>
  <h2>Страница не найдена</h2>
  </div>
</section>
<script>
setTimeout(function(){ window.location = "/"; },5000);
</script>
<?php
get_footer();
