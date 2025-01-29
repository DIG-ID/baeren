<div class="separator">
	<span class="separator__diamond separator__diamond--red"></span>
</div>
<section class="section-information-content relative xl:pt-0 xl:pb-0">
	<div class="absolute top-[-7.5rem] left-[1.5rem] lg:top-[-16rem] lg:left-[6rem]">
		<svg  class="w-[41px] h-[88px] lg:w-[86px] lg:h-[184px]" viewBox="0 0 41 88" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				d="M31.3387 0.0240349C32.5193 -0.0653066 33.7055 0.0950654 34.8182 0.494435C35.9309 0.893804 36.9445 1.52297 37.7911 2.3399C38.6378 3.15683 39.298 4.1427 39.7278 5.23164C40.1575 6.32058 40.3468 7.48751 40.2831 8.65445V8.63245C40.1437 11.6043 38.8498 14.409 36.6703 16.464C34.4908 18.519 31.5931 19.6664 28.5789 19.6679L28.3375 19.6643H28.3486C27.1523 19.7922 25.9421 19.6518 24.8085 19.2535C23.6749 18.8552 22.647 18.2093 21.8017 17.364C20.9564 16.5187 20.3154 15.4958 19.9266 14.3718C19.5379 13.2478 19.4114 12.0516 19.5565 10.8725L19.5528 10.9092C19.6652 7.9239 20.9688 5.10352 23.1794 3.06305C25.39 1.02259 28.3283 -0.0724532 31.3536 0.0167023H31.335L31.3387 0.0240349ZM12.9634 87.9927C8.25349 87.9927 4.79534 85.122 8.09377 72.499L13.502 50.1054C14.4455 46.5198 14.5978 45.0862 13.502 45.0862C9.47843 46.085 5.66307 47.7713 2.22866 50.0687L2.35124 49.9917L0 46.1165C11.4628 36.5035 24.6565 30.8684 30.3024 30.8684C35.0123 30.8684 35.7998 36.4632 33.4411 45.0716L27.2529 68.6127C26.1534 72.774 26.6288 74.2075 27.7209 74.2075C31.6594 73.3264 35.314 71.4919 38.3553 68.8694L38.3256 68.895L41 72.4843C29.8418 83.6738 17.6696 88 12.9597 88L12.9634 87.9927Z"
				fill="#E7DBD9" />
		</svg>
	</div>
	<div class="theme-container">
		<div class="flex flex-col flex-wrap gap-6 h-auto mt-16 lg:mt-36 xl:h-[1160px] invisible fade-in--noscroll">
			<?php
			$reception = get_field('reception');
			if ($reception):
				?>
				<div class="informations-card border-b border-[#636363] py-7 pr-14 order-1 lg:mx-36">
					<h2 class="text-title-h3 mb-4 lg:mb-7 uppercase !font-medium"><?php the_field('reception_title'); ?></h2>
					<div class="text-body"><?php the_field('reception_description'); ?></div>
				</div>
				<?php
			endif;
			$checkIn = get_field('check_in');
			if ($checkIn):
				?>
				<div class="informations-card border-b border-[#636363] py-7 pr-14 order-1 lg:mx-36">
					<h2 class="text-title-h3 mb-4 lg:mb-7 uppercase !font-medium"><?php the_field('check_in_title'); ?></h2>
					<div class="text-body"><?php the_field('check_in_description'); ?></div>
				</div>
				<?php
			endif;
			$checkOut = get_field('check_out');
			if ($checkOut):
				?>
				<div class="informations-card border-b border-[#636363] py-7 pr-14 order-1 lg:mx-36">
					<h2 class="text-title-h3 mb-4 lg:mb-7 uppercase !font-medium"><?php the_field('check_out_title'); ?></h2>
					<div class="text-body"><?php the_field('check_out_description'); ?></div>
				</div>
				<?php
			endif;
			$breakfast = get_field('breakfast');
			if ($breakfast):
				?>
				<div class="informations-card border-b border-[#636363] py-7 pr-14 order-1 lg:mx-36">
					<h2 class="text-title-h3 mb-4 lg:mb-7 uppercase !font-medium"><?php the_field('breakfast_title'); ?></h2>
					<div class="text-body"><?php the_field('breakfast_description'); ?></div>
				</div>
				<?php
			endif;
			$animals = get_field('animals');
			if ($animals):
				?>
				<div class="informations-card  border-b border-[#636363] py-7 pr-14 order-1 lg:mx-36">
					<h2 class="text-title-h3 mb-4 lg:mb-7 uppercase !font-medium"><?php the_field('animals_title'); ?></h2>
					<div class="text-body"><?php the_field('animals_description'); ?></div>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>