<div class="separator">
	<span class="separator__diamond separator__diamond--orange"></span>
</div>
<section class="section-cyclists-blocks relative -mt-12 py-12">
<div class="bg-white absolute w-full h-full left-0 top-0 bottom-0 flex justify-center items-center -z-[1]">
		<svg width="1438" height="1359" viewBox="0 0 1438 1359" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full">
			<path fill-rule="evenodd" clip-rule="evenodd"
				d="M1223.52 1119.33C1271.92 924.273 1396.22 828.552 1429.31 714.823C1462.18 540.222 1336.11 394.042 1357.73 217.146C1372.39 15.2084 1526.04 -50.3143 1517.64 -256.954C1486.52 -529.053 1190 -396.398 997.092 -435.729C806.33 -486.435 593.883 -735.268 454.596 -497.914C360.643 -312.144 465.796 -182.04 408.29 -0.650453C352.926 169.365 185.315 243.854 141.306 415.593C121.606 520.241 197.733 680.451 162.723 866.427C128.041 1112.71 -49.9276 1245.32 -31.2731 1394.41C0.736962 1726.92 334.834 1577.72 564.184 1612.67C787.004 1682.31 1042.87 1951.81 1204.32 1658.74C1260.47 1549.71 1165.78 1360.91 1223.52 1119.33ZM1165.08 1553.88C1023.65 1802.61 795.456 1575.37 606.942 1512.72C400.65 1482.47 104.124 1615.13 77.2869 1320.28C65.7113 1257.68 101.376 1192.31 136.934 1127.51C291.858 869.134 537.395 1004.24 537.395 1004.24C325.495 876.583 261.179 718.781 242.183 630.457C230.607 567.86 218.469 505.147 227.249 458.511C240.417 388.556 287.785 326.166 332.45 275.035C456.647 179.882 772.59 316.35 772.59 316.35C531.336 158.496 482.095 -20.4456 468.378 -71.6686C463.44 -169.528 435.337 -271.52 490.922 -380.662C611.761 -585.163 768.624 -227.188 936.889 -181.069C1129.79 -141.737 1379.33 -465.277 1413.48 -144.134C1416.27 -34.8997 1369.36 28.1746 1330.99 104.802C1328.85 116.177 1212.29 297.929 897.335 342.375C897.335 342.375 1237.82 351.56 1315.53 500.28C1338.91 565.286 1361.74 630.177 1346.43 711.507C1337.65 758.143 1319.87 790.542 1288.03 832.477L1290.17 821.102C1290.17 821.102 1189.58 1042.13 838.736 1091.07C838.736 1091.07 1103.75 1060.66 1151.4 1372.15C1157.67 1382.29 1153.97 1383.31 1152.36 1379.44C1159.74 1461.26 1170.51 1521.92 1164.19 1555.47L1165.08 1553.88Z"
				fill="#F5F0EF" fill-opacity="0.5" />
		</svg>
	</div>

	<div class="theme-container pt-8 lg:pt-28 xl:pt-40">
		<?php
		if (have_rows('blocks')):
			$i = 0;
			while (have_rows('blocks')):
				the_row();

				$diamond_position_class = $i === 1 ? 'lg:right-[-2.8rem] right-[-1.275rem]' : ' lg:left-[-2.8rem] left-[-1.275rem]';
				$cyclists_image_class = $i === 1 ? 'lg:order-1 after:left-[35px] lg:after:right-[-30px] after:right-[-5px]' : 'lg:order-2 after:right-[35px] lg:after:left-[-30px] after:left-[-5px]';
				?>
				<div
					class="card-perfect-for--cyclists relative grid grid-cols-2 lg:grid-cols-12 row-span-1 gap-x-6 py-12 fade-in">
					<div
						class="card-perfect-for--cyclists-content flex flex-col justify-center col-span-2 lg:col-span-6 relative z-20 order-2 px-4 lg:px-24 <?php echo ($i === 1) ? 'lg:order-2' : 'lg:order-1'; ?>">
						<h2 class="text-title-h2 lg:!text-4xl my-8 lg:mb-7 lg:max-w-[450px]"><?php the_sub_field('title'); ?>
						</h2>
						<div class="text-body mb-12 lg:max-w-[410px]"><?php the_sub_field('description'); ?></div>
						<?php
						$blink = get_sub_field('link');
						if ($blink):
							$link_url = $blink['url'];
							$link_title = $blink['title'];
							$link_target = $blink['target'] ? $blink['target'] : '_self';
							?>
							<a class="btn btn--secondary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
								<?php echo esc_html($link_title); ?>
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="10" viewBox="0 0 19 10" fill="none">
									<path d="M0.828125 1L7.82812 5L0.828125 9M10.8281 1L17.8281 5L10.8281 9" stroke="#34302D"/>
								</svg>
							</a>
							<?php
						endif;
						?>
					</div>
					<div
						class="card-perfect-for--cyclists-image col-start-1 col-span-2 lg:col-span-6 mb-12 px-6 lg:z-10 order-1 <?php echo $cyclists_image_class; ?>">
						<div
							class="absolute h-16 z-10 bg-white w-8 top-1/2 -translate-y-1/2  <?php echo $diamond_position_class; ?>">
							<span
								class="diamond diamond--white !w-4 !h-4 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2"></span>
						</div>
						<?php
						$iimage = get_sub_field('image');
						if ($iimage):
							echo wp_get_attachment_image($iimage, 'full', false, array('class' => 'w-full h-full object-cover'));
						endif;
						?>
					</div>
				</div>
				<?php
				$i++;
			endwhile;
		endif;
		?>
	</div>
</section>