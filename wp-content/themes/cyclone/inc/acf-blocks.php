<?php
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/


	function cyclone_acf_init( ) {

		if (function_exists('acf_register_block')) {

			acf_register_block(array(
				'name'            => 'hero',
				'title'           => __('Первый экран'),
				'description'     => __('Первый экран'),
				'render_template' => 'template-parts/blocks/block-hero.php',
				// 'enqueue_style'   => get_template_directory_uri() . '/front/static/dev/assets/css/main.css',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end block hero

			acf_register_block(array(
				'name'            => 'capabilities',
				'title'           => __('Возможности'),
				'description'     => __('Возможности'),
				'render_template' => 'template-parts/blocks/block-capabilities.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end block capabilities

			acf_register_block(array(
				'name'            => 'functions',
				'title'           => __('Функции'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-functions.php',
				'category'        => 'common',
				'mode'            => 'edit',
				'icon'            => 'admin-users'
			));

			// end block functions


			acf_register_block(array(
				'name'            => 'partners',
				'title'           => __('Cотрудничают'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-partners.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block partners

			acf_register_block(array(
				'name'            => 'import',
				'title'           => __('Импортозамещение'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-import.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block import

			acf_register_block(array(
				'name'            => 'benefits',
				'title'           => __('Преимущества'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-benefits.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block benefits


			acf_register_block(array(
				'name'            => 'advantages',
				'title'           => __('Встраивание в инфраструктуру'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-advantages.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block advantages

			acf_register_block(array(
				'name'            => 'mobile',
				'title'           => __('Мобильная версия'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-mobile.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block mobile

			acf_register_block(array(
				'name'            => 'about',
				'title'           => __('Блок 3 колонки текста'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-about.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block about

			acf_register_block(array(
				'name'            => 'feature',
				'title'           => __('Функция'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-feature.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block feature

			acf_register_block(array(
				'name'            => 'implemented',
				'title'           => __('Внедрена'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-implemented.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block implemented

			acf_register_block(array(
				'name'            => 'support',
				'title'           => __('Поддержка'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-support.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block support

			acf_register_block(array(
				'name'            => 'contacts',
				'title'           => __('Контакты'),
				'description'     => __(''),
				'render_template' => 'template-parts/blocks/block-contacts.php',
				'category'        => 'common',
				'icon'            => 'admin-users'
			));

			// end block contacts

		}

	}

	if( function_exists('acf_register_block') ) {
		add_action('acf/init', 'cyclone_acf_init');
	}


