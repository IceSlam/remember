<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Вспоминая_будущее
 */

get_header();
?>

<div class="container mt-5 heading">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<?php
				 if ( function_exists('yoast_breadcrumb') ) {
					 yoast_breadcrumb( '<ol class="breadcrumb">','</ol>' );
				 }
				 ?>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 class="page-title">
				<? the_title(); ?>
			</h2>
		</div>
	</div>
</div>
</div>
</header>

<main class="is-main pb-0" style="">

<section class="section page-info container mt-5 mb-5">
	<div class="row">
		<div class="col-md-12">
			<? the_content(); ?>
		</div>
	</div>
	<div class="row mt-4">
		<? $address = get_field('theme_address', 'option');
		if ($address) { ?>
			<div class="col-md-6 mt-3">
				<div class="card d-flex justify-content-center px-4 py-4">
					<a href="
					<? $map = get_field('theme_map', 'option');
					if ($map) {
						the_field('theme_map', 'option');
					} else { ?>
						#!
					<? } ?>
					" class="text-center d-flex justify-content-center" style="font-size:1.25rem;font-weight:600;color: #111;">
						<img src="<? echo get_template_directory_uri() . '/assets/img/footer_geo_icon.svg'; ?>" alt="<? the_field('theme_address', 'option'); ?>" class="mr-3">
					 <? the_field('theme_address', 'option'); ?>
				 </a>
				</div>
			</div> <? } ?>
		<? $phone = get_field('theme_phone', 'option');
		if ($phone) { ?>
			<div class="col-md-6 mt-3">
				<div class="card d-flex justify-content-center px-4 py-4">
					<a href="tel:<? the_field('theme_phone', 'option'); ?>" class="text-center d-flex justify-content-center" style="font-size:1.25rem;font-weight:600;color: #111;">
						<img src="<? echo get_template_directory_uri() . '/assets/img/footer_phone_icon.svg'; ?>" alt="<? the_field('theme_phone', 'option'); ?>" class="mr-3">
					 <? the_field('theme_phone', 'option'); ?>
				 </a>
				</div>
			</div>
		<? } ?>
		<? $email = get_field('theme_email', 'option');
		if ($email) { ?>
			<div class="col-md-6 mt-3">
				<div class="card d-flex justify-content-center px-4 py-4">
					<a href="mailto:<? the_field('theme_email', 'option'); ?>" class="text-center d-flex justify-content-center" style="font-size:1.25rem;font-weight:600;color: #111;">
						<img src="<? echo get_template_directory_uri() . '/assets/img/footer_email_icon.svg'; ?>" alt="<? the_field('theme_email', 'option'); ?>" class="mr-3">
					 <? the_field('theme_email', 'option'); ?>
				 </a>
				</div>
			</div>
		<? } ?>
		<? $vk = get_field('theme_vk', 'option');
		if ($vk) { ?>
			<div class="col-md-6 mt-3">
				<div class="card d-flex justify-content-center px-4 py-4 ">
					<a href="<? the_field('theme_vk', 'option'); ?>" class="text-center d-flex justify-content-center align-items-center" style="font-size:1.25rem;font-weight:600;color: #111;">
						<svg class="mr-3" width="50" height="35" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.9257 7.22488C13.9088 7.18829 13.893 7.15794 13.8783 7.13362C13.6354 6.69547 13.1712 6.15768 12.4861 5.52008L12.4716 5.50548L12.4643 5.49832L12.457 5.49098H12.4497C12.1387 5.19409 11.9418 4.99446 11.8593 4.89225C11.7084 4.69756 11.6746 4.50049 11.7571 4.30081C11.8154 4.14995 12.0342 3.83134 12.4131 3.34456C12.6125 3.08658 12.7703 2.87982 12.8869 2.72405C13.7276 1.60458 14.0921 0.889223 13.9803 0.5777L13.9369 0.504902C13.9077 0.461074 13.8324 0.42098 13.711 0.384414C13.5894 0.347925 13.434 0.341891 13.2444 0.366208L11.1452 0.380732C11.1111 0.368663 11.0626 0.369788 10.9993 0.384414C10.9361 0.39904 10.9045 0.406379 10.9045 0.406379L10.868 0.424662L10.839 0.446627C10.8147 0.461151 10.788 0.486696 10.7588 0.52321C10.7297 0.559597 10.7055 0.602299 10.6861 0.650959C10.4575 1.23987 10.1977 1.78741 9.90602 2.29354C9.7262 2.59535 9.56107 2.85691 9.41026 3.07837C9.25966 3.29976 9.1333 3.46287 9.03133 3.56743C8.92921 3.67209 8.83705 3.75594 8.75428 3.81927C8.67163 3.88264 8.60855 3.90941 8.56486 3.89961C8.52108 3.88982 8.47985 3.8801 8.44081 3.87039C8.37282 3.82656 8.31813 3.76696 8.2769 3.69152C8.23549 3.61609 8.20761 3.52115 8.19303 3.40677C8.17853 3.29232 8.16995 3.19387 8.1675 3.1111C8.16523 3.02843 8.16628 2.9115 8.17121 2.76064C8.17626 2.6097 8.17853 2.50757 8.17853 2.45402C8.17853 2.26905 8.18213 2.0683 8.18936 1.85171C8.19671 1.63513 8.20266 1.46353 8.20764 1.33711C8.21259 1.21056 8.21489 1.07668 8.21489 0.935531C8.21489 0.794383 8.20631 0.683689 8.18936 0.603347C8.17261 0.523107 8.1469 0.44522 8.11302 0.369711C8.07894 0.294279 8.02905 0.235928 7.96359 0.194504C7.898 0.153131 7.81646 0.120299 7.71941 0.0959046C7.46184 0.0375276 7.13384 0.00594826 6.73528 0.00103876C5.83147 -0.00867795 5.25072 0.0497756 4.99317 0.176323C4.89112 0.229791 4.79878 0.302845 4.71621 0.395256C4.62872 0.50237 4.61651 0.560824 4.67968 0.570438C4.97129 0.614189 5.17773 0.718848 5.29923 0.884314L5.34302 0.971994C5.37707 1.03526 5.41108 1.14725 5.44511 1.30783C5.47909 1.46842 5.50103 1.64605 5.51068 1.84064C5.53493 2.19599 5.53493 2.50018 5.51068 2.75322C5.48635 3.00637 5.46337 3.20344 5.44144 3.34459C5.41951 3.48573 5.38672 3.60011 5.34302 3.68769C5.29923 3.77529 5.2701 3.82884 5.2555 3.84827C5.24092 3.8677 5.22877 3.87995 5.21912 3.88476C5.15595 3.909 5.09026 3.92135 5.02227 3.92135C4.95418 3.92135 4.87162 3.88724 4.77445 3.81907C4.6773 3.7509 4.57648 3.65726 4.47198 3.538C4.36749 3.41871 4.24964 3.25202 4.11838 3.0379C3.98723 2.82377 3.85115 2.5707 3.71022 2.27869L3.59363 2.06691C3.52074 1.93068 3.42117 1.7323 3.29481 1.47197C3.16839 1.21154 3.05664 0.959618 2.95949 0.716265C2.92066 0.614061 2.86232 0.536251 2.78458 0.482707L2.7481 0.460742C2.72385 0.441308 2.68491 0.420673 2.6315 0.398682C2.57801 0.376717 2.5222 0.360966 2.46384 0.351275L0.466599 0.365799C0.262507 0.365799 0.124028 0.412107 0.0511125 0.504595L0.0219309 0.548345C0.00735285 0.572714 0 0.611632 0 0.665202C0 0.718746 0.014578 0.784462 0.0437596 0.862272C0.33532 1.54858 0.652386 2.21047 0.994957 2.84804C1.33753 3.48561 1.63522 3.99919 1.88784 4.38831C2.14052 4.77772 2.39807 5.14525 2.6605 5.4907C2.92293 5.83628 3.09665 6.05775 3.18164 6.15504C3.26673 6.25252 3.33357 6.32539 3.38216 6.37405L3.56442 6.54923C3.68104 6.66607 3.8523 6.80599 4.07828 6.969C4.3043 7.13211 4.55453 7.29269 4.82908 7.451C5.10369 7.60905 5.42316 7.73802 5.78766 7.83777C6.15211 7.93763 6.50683 7.97769 6.85188 7.95836H7.69016C7.86017 7.94366 7.98897 7.89012 8.07651 7.7977L8.10551 7.76111C8.12502 7.73207 8.14328 7.68693 8.16012 7.6262C8.17718 7.56537 8.18566 7.49835 8.18566 7.42545C8.18068 7.21621 8.19658 7.02763 8.23294 6.85974C8.26927 6.69189 8.31068 6.56534 8.35699 6.48012C8.40328 6.39497 8.45552 6.32312 8.51365 6.26487C8.57191 6.20649 8.61342 6.17113 8.63778 6.15896C8.66198 6.14671 8.68131 6.1384 8.69589 6.13341C8.81251 6.09449 8.94976 6.13218 9.10785 6.24666C9.26581 6.36104 9.41396 6.50226 9.55254 6.6701C9.69105 6.8381 9.85746 7.02658 10.0518 7.23582C10.2463 7.44514 10.4163 7.60074 10.562 7.70309L10.7078 7.7907C10.8051 7.84915 10.9314 7.9027 11.087 7.95136C11.2422 7.99999 11.3782 8.01216 11.495 7.98785L13.361 7.9587C13.5456 7.9587 13.6892 7.92809 13.791 7.86736C13.8931 7.80653 13.9538 7.73951 13.9733 7.6666C13.9928 7.59363 13.9939 7.51083 13.977 7.41827C13.9597 7.32593 13.9427 7.26137 13.9257 7.22488Z" fill="#70c8d3"/>
						</svg>
					 ВКонтакте
				 </a>
				</div>
			</div>
		<? } ?>
		<? $fb = get_field('theme_fb', 'option');
		if ($fb) { ?>
			<div class="col-md-6 mt-3">
				<div class="card d-flex justify-content-center px-4 py-4">
					<a href="<? the_field('theme_fb', 'option'); ?>" class="text-center d-flex justify-content-center align-item-center" style="font-size:1.25rem;font-weight:600;color: #111;">
						<svg class="mr-3" width="20" height="38" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.223506 7.4564H1.7425V13.7742C1.7425 13.8989 1.84254 14 1.96601 14H4.54152C4.66498 14 4.76502 13.8989 4.76502 13.7742V7.48616H6.51124C6.62478 7.48616 6.7203 7.40008 6.73327 7.28614L6.99848 4.96025C7.00577 4.89625 6.9857 4.83217 6.94332 4.78416C6.9009 4.73611 6.84019 4.70861 6.77649 4.70861H4.76511V3.25062C4.76511 2.81111 4.99935 2.58824 5.46138 2.58824C5.52723 2.58824 6.77649 2.58824 6.77649 2.58824C6.89996 2.58824 7 2.48712 7 2.36243V0.227477C7 0.102742 6.89996 0.00167097 6.77649 0.00167097H4.96408C4.95129 0.00103871 4.92291 0 4.88107 0C4.5666 0 3.47351 0.0623677 2.61006 0.864884C1.65337 1.7542 1.78635 2.81901 1.81814 3.00363V4.70856H0.223506C0.100041 4.70856 0 4.80963 0 4.93437V7.23055C0 7.35528 0.100041 7.4564 0.223506 7.4564Z" fill="#70c8d3"/>
						</svg>
					 Facebook
				 </a>
				</div>
			</div>
		<? } ?>
		<? $ok = get_field('theme_ok', 'option');
		if ($ok) { ?>
			<div class="col-md-6 mt-3">
				<div class="card d-flex justify-content-center px-4 py-4">
					<a href="<? the_field('theme_ok', 'option'); ?>" class="text-center d-flex justify-content-center align-item-center" style="font-size:1.25rem;font-weight:600;color: #111;">
						<svg class="mr-3" width="26" height="37" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.3442 9.86105C2.31137 9.74786 1.38013 9.48056 0.582835 8.8253C0.483906 8.74378 0.381767 8.66519 0.291489 8.57413C-0.0574832 8.22194 -0.0926456 7.81858 0.183491 7.4029C0.41972 7.04719 0.816274 6.95204 1.22845 7.15628C1.30827 7.19587 1.38431 7.24528 1.45715 7.29836C2.94304 8.37121 4.98427 8.40083 6.47574 7.3466C6.62351 7.22754 6.78146 7.13048 6.96453 7.08092C7.32047 6.98488 7.65242 7.12227 7.84344 7.44953C8.06168 7.82327 8.05888 8.18807 7.79 8.47824C7.37754 8.9231 6.8815 9.24494 6.33035 9.46957C5.80919 9.68188 5.23836 9.78876 4.67339 9.85973C4.75865 9.95724 4.79883 10.0052 4.85213 10.0615C5.61929 10.8714 6.38979 11.678 7.15443 12.4905C7.41494 12.7673 7.46936 13.1105 7.32592 13.4325C7.16908 13.7844 6.81802 14.0159 6.47379 13.9911C6.2557 13.9753 6.08561 13.8612 5.93449 13.7013C5.35557 13.0891 4.76576 12.4883 4.19856 11.8645C4.03349 11.6831 3.9541 11.7175 3.80842 11.8749C3.22601 12.505 2.63411 13.1253 2.03872 13.7422C1.77138 14.0192 1.45324 14.069 1.1432 13.9108C0.813623 13.7429 0.603904 13.3894 0.62009 13.0341C0.631253 12.7938 0.743716 12.6102 0.900691 12.4456C1.65989 11.649 2.417 10.8503 3.17438 10.0524C3.22448 9.99932 3.27122 9.94301 3.3442 9.86105Z" fill="#70c8d3"/>
							<path d="M3.97335 7.08619C2.13082 7.07959 0.619951 5.4745 0.630695 3.53526C0.641299 1.57461 2.15314 -0.00541115 4.01382 1.39287e-05C5.87826 0.00529238 7.37476 1.60804 7.36541 3.58907C7.35592 5.52436 5.83459 7.09294 3.97335 7.08619ZM5.64789 3.53995C5.64468 2.57707 4.91492 1.81052 4.00042 1.80964C3.07825 1.80862 2.34193 2.5891 2.34905 3.56077C2.35588 4.51998 3.09192 5.28111 4.00893 5.27759C4.92316 5.27422 5.65096 4.50268 5.64789 3.53995Z" fill="#70c8d3"/>
						</svg>
					 Одноклассники
				 </a>
				</div>
			</div>
		<? } ?>
		<? $mailru = get_field('theme_mailru', 'option');
		if ($mailru) { ?>
			<div class="col-md-6 mt-3">
				<div class="card d-flex justify-content-center px-4 py-4">
					<a href="<? the_field('theme_mailru', 'option'); ?>" class="text-center d-flex justify-content-center align-item-center" style="font-size:1.25rem;font-weight:600;color: #111;">
						<svg class="mr-3" width="36" height="36" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.41781 6.93314C9.33834 5.32015 8.18926 4.34996 6.80161 4.34996H6.74937C5.14807 4.34996 4.26015 5.66243 4.26015 7.15342C4.26015 8.82252 5.33434 9.87696 6.74332 9.87696C8.31371 9.87696 9.34659 8.67768 9.42133 7.25937L9.41781 6.93314ZM6.75715 2.90613C7.82708 2.90613 8.8332 3.39911 9.5717 4.17104V4.17392C9.5717 3.80349 9.811 3.5241 10.1431 3.5241L10.2272 3.52351C10.7465 3.52351 10.8534 4.03594 10.8534 4.19804L10.8558 9.95901C10.8191 10.3363 11.2293 10.5312 11.4566 10.2889C12.3443 9.33822 13.4059 5.40154 10.9049 3.12114C8.57402 0.994616 5.44643 1.34489 3.78312 2.53996C2.01474 3.81106 0.883475 6.62471 1.98247 9.26717C3.18064 12.1492 6.60892 13.0088 8.6466 12.1513C9.67838 11.7172 10.1548 13.1709 9.08321 13.6459C7.46425 14.3646 2.95748 14.2921 0.852359 10.4909C-0.570027 7.92452 -0.494655 3.4088 3.27803 1.06934C6.1638 -0.720931 9.96876 -0.225429 12.263 2.27197C14.6612 4.88276 14.5211 9.77193 12.1823 11.6724C11.1224 12.5361 9.54809 11.6959 9.55802 10.4375L9.54724 10.0262C8.80928 10.7894 7.82706 11.2347 6.75713 11.2347C4.64318 11.2347 2.78304 9.29648 2.78304 7.09271C2.78304 4.86775 4.6432 2.90613 6.75715 2.90613Z" fill="#70c8d3"/>
						</svg>
					 МойМир M@il.ru
				 </a>
				</div>
			</div>
		<? } ?>
		<? $twitter = get_field('theme_twitter', 'option');
		if ($twitter) { ?>
			<div class="col-md-6 mt-3">
				<div class="card d-flex justify-content-center px-4 py-4">
					<a href="<? the_field('theme_twitter', 'option'); ?>" class="text-center d-flex justify-content-center align-item-center" style="font-size:1.25rem;font-weight:600;color: #111;">
						<svg class="mr-3" width="36" height="33" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14 1.42062C13.4794 1.66154 12.9246 1.82123 12.3462 1.89877C12.9412 1.524 13.3954 0.935077 13.6089 0.225231C13.0541 0.574154 12.4416 0.820615 11.7889 0.958154C11.2621 0.366462 10.5114 0 9.69238 0C8.10337 0 6.82412 1.36062 6.82412 3.02862C6.82412 3.26862 6.84338 3.49938 6.89062 3.71908C4.5045 3.59631 2.39313 2.38985 0.97475 0.552C0.727125 1.00523 0.581875 1.524 0.581875 2.08246C0.581875 3.13108 1.09375 4.06062 1.85675 4.59877C1.39562 4.58954 0.94325 4.44831 0.56 4.22585C0.56 4.23508 0.56 4.24708 0.56 4.25908C0.56 5.73046 1.55487 6.95262 2.8595 7.23415C2.62587 7.30154 2.37125 7.33385 2.107 7.33385C1.92325 7.33385 1.73775 7.32277 1.56362 7.28215C1.9355 8.48123 2.99075 9.36277 4.2455 9.39138C3.269 10.1972 2.02912 10.6828 0.686875 10.6828C0.4515 10.6828 0.22575 10.6717 0 10.6412C1.27137 11.5062 2.77813 12 4.403 12C9.6845 12 12.572 7.38462 12.572 3.384C12.572 3.25015 12.5676 3.12092 12.5615 2.99262C13.1311 2.56615 13.6097 2.03354 14 1.42062Z" fill="#70c8d3"/>
						</svg>
					 Twitter
				 </a>
				</div>
			</div>
		<? } ?>
		<div class="col-md-6 mt-3">
			<div class="card d-flex justify-content-center px-4 py-4">
				<a href="<? the_field('theme_inst', 'option'); ?>" class="text-center d-flex justify-content-center" style="font-size:1.25rem;font-weight:600;color: #111;">
					<svg class="mr-3" width="38" height="38" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M10.1364 0H3.86341C1.73313 0 0 1.73321 0 3.86349V10.1365C0 12.2669 1.73313 14 3.86341 14H10.1364C12.2669 14 14 12.2668 14 10.1365V3.86349C14.0001 1.73321 12.2669 0 10.1364 0ZM12.7579 10.1365C12.7579 11.582 11.582 12.7579 10.1365 12.7579H3.86341C2.41805 12.7579 1.24215 11.582 1.24215 10.1365V3.86349C1.24215 2.41813 2.41805 1.24215 3.86341 1.24215H10.1364C11.5819 1.24215 12.7579 2.41813 12.7579 3.86349V10.1365H12.7579Z" fill="#70c8d3"/>
						<path d="M7 3.39272C5.01082 3.39272 3.39255 5.01099 3.39255 7.00017C3.39255 8.98926 5.01082 10.6074 7 10.6074C8.98918 10.6074 10.6074 8.98926 10.6074 7.00017C10.6074 5.01099 8.98918 3.39272 7 3.39272ZM7 9.36522C5.69583 9.36522 4.6347 8.30426 4.6347 7.00008C4.6347 5.69583 5.69574 4.63479 7 4.63479C8.30426 4.63479 9.3653 5.69583 9.3653 7.00008C9.3653 8.30426 8.30417 9.36522 7 9.36522Z" fill="#70c8d3"/>
						<path d="M10.7587 2.33946C10.5194 2.33946 10.2843 2.43635 10.1153 2.60611C9.94546 2.77504 9.84783 3.01022 9.84783 3.25037C9.84783 3.48977 9.94555 3.72487 10.1153 3.89463C10.2842 4.06356 10.5194 4.16128 10.7587 4.16128C10.9989 4.16128 11.2332 4.06356 11.403 3.89463C11.5728 3.72487 11.6696 3.48969 11.6696 3.25037C11.6696 3.01022 11.5728 2.77504 11.403 2.60611C11.2341 2.43635 10.9989 2.33946 10.7587 2.33946Z" fill="#70c8d3"/>
					</svg>
				 Instagram
			 </a>
			</div>
		</div>
	</div>
</section>

<section class="is-section feedback container-fluid">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<h2>
					Обратная связь
				</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-4 mb-4">
				<input type="text" id="your-name" class="form-control" placeholder="Имя" required/>
			</div>
			<div class="col-lg-4 mb-4">
				<input type="tel" id="your-phone" class="form-control" placeholder="+7 (___) ___-__-__"/>
			</div>
			<div class="col-lg-4 mb-4">
				<input type="email" id="your-email" class="form-control" placeholder="E-mail"/>
			</div>
			<div class="col-lg-12 mb-4">
				<textarea class="form-control" id="application-text" rows="4" placeholder="Ваше сообщение" required></textarea>
			</div>
			<div class="col-lg-3 mb-4">
				<a
					class="btn is-btn is-btn-blue btn-block"
				>
					Отправить заявку
				</a>
			</div>
			<div class="col-lg-9 link">
				<p>
					Нажимая на кнопку, я даю согласие на
					<a href="<? the_permalink(3); ?>">
						обработку персональных данных
					</a>
				</p>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
