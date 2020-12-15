<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;
?>

<style type="text/css">
	.page-title {
		display: none !important;
	}
</style>
<div class="mypage-dashboard">
	<div class="mypage-header dashboard-header">
		<h1>Account<br>Details<small>마이페이지</small></h1>
		<?php do_action( 'woocommerce_account_navigation' ); ?>
	</div>
	<div class="mypage-header address-header">
		<h1>Account<br>Address<small>내 주소</small></h1>
		<nav class="woocommerce-MyAccount-nav">
			<ul>
				<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
					<a href="/my-account/"><img src="/wp-content/uploads/2019/06/스크린샷-2019-06-01-오후-2.16.09.png" width="7" style="position: relative;top: 2px;" height="auto"> Back</a>
				</li>
		</nav>
	</div>

	<div class="woocommerce-MyAccount-content">
		<?php
			/**
			 * My Account content.
			 *
			 * @since 2.6.0
			 */
			do_action( 'woocommerce_account_content' );
		?>
	</div>
</div>
