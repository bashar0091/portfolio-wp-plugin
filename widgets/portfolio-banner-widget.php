<?php
class portfolio_banner_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'portfolio_banner_widget';
	}

	public function get_title() {
		return esc_html__( 'Portfolio Banner', 'bashar-portfolio' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'bashar-addon' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function register_controls() {

		// banner field 
		$this->start_controls_section(
			'banner_field',
			[
				'label' => esc_html__( 'Banner', 'bashar-portfolio' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'banner_image',
			[
				'label' => esc_html__( 'Image', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'banner_title',
			[
				'label' => esc_html__( 'Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hi I am Awal Bashar', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'banner_subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'I am a Web Developer', 'bashar-portfolio' ),
			]
		);
		$this->end_controls_section();


		// about field 
		$this->start_controls_section(
			'about_field',
			[
				'label' => esc_html__( 'About', 'bashar-portfolio' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'about_title',
			[
				'label' => esc_html__( 'Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'About ME', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'about_bigtitle',
			[
				'label' => esc_html__( 'Big Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'My Stats', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'about_infotitle',
			[
				'label' => esc_html__( 'Info Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Information About me', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'about_des',
			[
				'label' => esc_html__( 'Info Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'I am webdevelope', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'about_skilltitle',
			[
				'label' => esc_html__( 'Skill Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'My Skills', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'about_timelinetitle',
			[
				'label' => esc_html__( 'Timeline Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'My Timeline', 'bashar-portfolio' ),
			]
		);
		$this->end_controls_section();

		
		// portfolio field 
		$this->start_controls_section(
			'portfolio_field',
			[
				'label' => esc_html__( 'Portfolio', 'bashar-portfolio' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'portfolio_title',
			[
				'label' => esc_html__( 'Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'My Portfolio', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'portfolio_bigtitle',
			[
				'label' => esc_html__( 'Big Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'My Work', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'portfolio_subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Here is my portfolio', 'bashar-portfolio' ),
			]
		);
		$this->end_controls_section();


		// contact field 
		$this->start_controls_section(
			'contact_field',
			[
				'label' => esc_html__( 'Contact', 'bashar-portfolio' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'contact_title',
			[
				'label' => esc_html__( 'Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Contact ME', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'contact_bigtitle',
			[
				'label' => esc_html__( 'Big Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Contact', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'contact_subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Contact me here', 'bashar-portfolio' ),
			]
		);
		$this->add_control(
			'contact_des',
			[
				'label' => esc_html__( 'Sub Title', 'bashar-portfolio' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'You can easily Contact With me', 'bashar-portfolio' ),
			]
		);
		$this->end_controls_section();

	}

	protected function render() {
		global $redux_demo;
		
		$settings = $this->get_settings_for_display();

		$banner_image = esc_url($settings['banner_image']['url']);
		$banner_title = $settings['banner_title'];
		$banner_subtitle = $settings['banner_subtitle'];

		$about_title = $settings['about_title'];
		$about_bigtitle = $settings['about_bigtitle'];
		$about_infotitle = $settings['about_infotitle'];
		$about_des = $settings['about_des'];
		$about_skilltitle = $settings['about_skilltitle'];
		$about_timelinetitle = $settings['about_timelinetitle'];

		$portfolio_title = $settings['portfolio_title'];
		$portfolio_bigtitle = $settings['portfolio_bigtitle'];
		$portfolio_subtitle = $settings['portfolio_subtitle'];

		$contact_title = $settings['contact_title'];
		$contact_bigtitle = $settings['contact_bigtitle'];
		$contact_subtitle = $settings['contact_subtitle'];
		$contact_des = $settings['contact_des'];
		?>

		<div class="bashar-portfolio">
			<header class="container header active" id="home">
				<div class="header-content">
					<div class="left-header">
						<div class="h-shape"></div>
						<div class="image">
							<?php 
								echo $banner_image ? '<img src="' . $banner_image . '" alt="">' : '';
							?>
						</div>
					</div>
					<div class="right-header">
						<?php 
							echo $banner_title ? '<h1 class="name">' . $banner_title . '</h1>' : '';
							echo $banner_subtitle ? '<p>' . $banner_subtitle . '<p>' : '';
						?>
			
						<div class="btn-con">
							<a href="<?php echo $redux_demo['cv_file']['url'];?>" class="main-btn">
        						<span class="btn-text"><?php echo $redux_demo['cv_btn_title']?></span>
        						<span class="btn-icon"><i class="fas fa-download"></i></span>
        					</a>
						</div>
					</div>
				</div>
			</header>

			<main>
				<section class="container about" id="about">
					<div class="main-title">
						<h2>
							<?php 
								echo $about_title ?  $about_title : '';
								echo $about_bigtitle ? '<span class="bg-text">' . $about_bigtitle . '</span>' : '';
							?>
						</h2>
					</div>
					<div class="about-container">
						<div class="left-about">
							<?php 
								echo $about_infotitle ? '<h4>' . $about_infotitle . '</h4>' : '';
								echo $about_des ? '<p>' . $about_des . '</p>' : '';
							?>
							<div class="btn-con">
								<a href="<?php echo $redux_demo['cv_file']['url'];?>" class="main-btn">
            						<span class="btn-text"><?php echo $redux_demo['cv_btn_title']?></span>
            						<span class="btn-icon"><i class="fas fa-download"></i></span>
            					</a>
							</div>
						</div>
						<div class="right-about">
						<?php 
							$args = array(
								'post_type' => 'status',
								'posts_per_page' => -1
							);

							$the_query  = new WP_Query($args);

							if($the_query -> have_posts()) {
								while($the_query->have_posts()) {
									$the_query->the_post();
						?>
							<div class="about-item">
								<div class="abt-text">
									<p class="large-text"><?php echo show('count_num') . show('count_num_prefix');?></p>
									<p class="small-text"><?php echo wp_kses(get_the_title(),true);?></p>
								</div>
							</div>
						<?php 
							}} wp_reset_query();
						?>
						</div>
					</div>
					<div class="about-stats">
						<?php 
							echo $about_skilltitle ? '<h4 class="stat-title">' . $about_skilltitle . '</h4>' : '';
						?>
						<div class="progress-bars">
							<?php 
								$args = array(
									'post_type' => 'skill',
									'posts_per_page' => -1
								);

								$the_query  = new WP_Query($args);

								if($the_query -> have_posts()) {
									while($the_query->have_posts()) {
										$the_query->the_post();
							?>
							<div class="progress-bar">
								<p class="prog-title"><?php echo wp_kses(get_the_title(),true);?></p>
								<div class="progress-con">
									<p class="prog-text"><?php echo show('skill_percentage');?>%</p>
									<div class="progress">
										<span class="html" style="width: <?php echo show('skill_percentage');?>%;"></span>
									</div>
								</div>
							</div>
							<?php 
								}} wp_reset_query();
							?>
						</div>
					</div>
					<h4 class="stat-title">My Timeline</h4>
					<div class="timeline">
						<?php 
							$args = array(
								'post_type' => 'timeline',
								'posts_per_page' => -1
							);

							$the_query  = new WP_Query($args);

							if($the_query -> have_posts()) {
								while($the_query->have_posts()) {
									$the_query->the_post();
						?>
						<div class="timeline-item">
							<div class="tl-icon">
								<i class="fas fa-briefcase"></i>
							</div>
							<p class="tl-duration">
								<?php echo showDate(show('timeline_start_date'));?> 
								- 
								<?php 
									echo show('timeline_present') ? 'present' : showDate(show('timeline_end_date')); 
								?>
							</p>
							<h5>
								<?php echo wp_kses(get_the_title(),true);?>
								<span> - <?php echo show('timeline_tagline');?></span>
							</h5>
							<p>
								<?php echo wp_kses(get_the_excerpt(),true);?>
							</p>
						</div>
						<?php 
							}} wp_reset_query();
						?>
					</div>
				</section>

				<section class="container" id="portfolio">
					<div class="main-title">
						<h2>
							<?php 
								echo $portfolio_title ?  $portfolio_title : '';
								echo $portfolio_bigtitle ? '<span class="bg-text">' . $portfolio_bigtitle . '</span>' : '';
							?>
						</h2>
					</div>
					<?php 
						echo $portfolio_subtitle ? '<p class="port-text">' . $portfolio_subtitle . '</p>' : '';
					?>
					<div class="portfolios">
					<?php 
						$args = array(
							'post_type' => 'portfolio',
							'posts_per_page' => -1
						);

						$the_query  = new WP_Query($args);

						if($the_query -> have_posts()) {
							while($the_query->have_posts()) {
								$the_query->the_post();
					?>
						<div class="portfolio-item">
							<div class="image">
								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
							</div>
							<div class="hover-items">
								<h3><h3> <?php echo wp_kses(get_the_title(), true);?></h3>

								<div class="icons">
									<a href="<?php echo show('portfolio_website_url');?>" class="icon" target="_blank">
										<i class="fas fa-link"></i>
									</a>
								</div>
							</div>
						</div>
					<?php }} wp_reset_query();?>
					</div>
				</section>

				<!-- <section class="container" id="blogs">
					<div class="blogs-content">
						<div class="main-title">
							<h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
						</div>
						<div class="blogs">
							<div class="blog">
								<img src="img/port6.jpg" alt="">
								<div class="blog-text">
									<h4>
										How to Create Your Own Website
									</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
										Doloribus natus voluptas, eos obcaecati recusandae amet?
									</p>
								</div>
							</div>
							<div class="blog">
								<img src="img/blog1.jpg" alt="">
								<div class="blog-text">
									<h4>
										How to Become an Expert in Web Design
									</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
										Doloribus natus voluptas, eos obcaecati recusandae amet?
									</p>
								</div>
							</div>
							<div class="blog">
								<img src="img/blog2.jpg" alt="">
								<div class="blog-text">
									<h4>
										Become a Web Designer in 10 Days
									</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
										Doloribus natus voluptas, eos obcaecati recusandae amet?
									</p>
								</div>
							</div>
							<div class="blog">
								<img src="img/blog3.jpg" alt="">
								<div class="blog-text">
									<h4>
										Debbuging made easy with Web Inspector
									</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
										Doloribus natus voluptas, eos obcaecati recusandae amet?
									</p>
								</div>
							</div>
							<div class="blog">
								<img src="img/port1.jpg" alt="">
								<div class="blog-text">
									<h4>
										Get started with Web Design and UI Design
									</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
										Doloribus natus voluptas, eos obcaecati recusandae amet?
									</p>
								</div>
							</div>
							<div class="blog">
								<img src="img/port3.jpg" alt="">
								<div class="blog-text">
									<h4>
										This is what you need to know about Web Design
									</h4>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
										Doloribus natus voluptas, eos obcaecati recusandae amet?
									</p>
								</div>
							</div>
						</div>
					</div>
				</section> -->

				<section class="container contact" id="contact">
					<div class="contact-container">
						<div class="main-title">
							<h2>
								<?php 
									echo $contact_title ?  $contact_title : '';
									echo $contact_bigtitle ? '<span class="bg-text">' . $contact_bigtitle . '</span>' : '';
								?>
							</h2>
						</div>
						<div class="contact-content-con">
							<div class="left-contact">
								<?php 
									echo $contact_subtitle ? '<h4>' . $contact_subtitle . '</h4>' : '';
									echo $contact_des ? '<p>' . $contact_des . '</p>' : '';
								?>
								<div class="contact-info">
									<div class="contact-item">
										<div class="icon">
											<i class="fas fa-map-marker-alt"></i>
											<span>Location</span>
										</div>
										<p>
											: London, united Kingdom
										</p>
									</div>
									<div class="contact-item">
										<div class="icon">
											<i class="fas fa-envelope"></i>
											<span>Email</span>
										</div>
										<p>
											<span>: maclinzuniversal@gmail.com</span>
										</p>
									</div>
									<div class="contact-item">
										<div class="icon">
											<i class="fas fa-user-graduate"></i>
											<span>Education</span>
										</div>
										<p>
											<span>: Sussex University, East Sussex</span>
										</p>
									</div>
									<div class="contact-item">
										<div class="icon">
											<i class="fas fa-user-graduate"></i>
											<span>Mobile Number</span>
										</div>
										<p>
											<span>: 07522670617</span>
										</p>
									</div>
									<div class="contact-item">
										<div class="icon">
											<i class="fas fa-globe-africa"></i>
											<span>Languages</span>
										</div>
										<p>
											<span>: Afrikaans, English, Spanish</span>
										</p>
									</div>
								</div>
								<div class="contact-icons">
									<div class="contact-icon">
										<a href="https://www.facebook.com/nshakib24" target="_blank">
											<i class="fab fa-facebook-f"></i>
										</a>
										<a href="https://www.twitter.com/nshakib24" target="_blank">
											<i class="fab fa-twitter"></i>
										</a>
										<a href="https://www.youtube.com/@lskit1651" target="_blank">
											<i class="fab fa-youtube"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="right-contact">
								<?php echo do_shortcode('[contact-form-7 id="73" title="Contact Form"]');?>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div>

		<?php
	}
}
