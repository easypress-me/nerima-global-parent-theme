<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="woocommerce-MyAccount-nav">
	<ul>
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<?php 
			if($label == '대시보드')
				$label = "주문내역";
			if($label == '다운로드')
				continue;
			if($label == '주문')
				continue;
			if($label == '계정 정보')
				$label = "암호 재설정";
			if($label == '주소')
				$label = "주소 관리";
			if($label == '로그아웃')
				$label = "Logout";
			?>
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<a href="<?php if($label == '주소 관리') { echo '/my-account/edit-address/billing/'; } else {  echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); } ?>"><?php echo esc_html( $label ); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>

<?php //do_action( 'woocommerce_after_account_navigation' ); ?>
