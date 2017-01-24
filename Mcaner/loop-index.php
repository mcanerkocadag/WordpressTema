<div class="sticky-bar-wrap">
			<div class="sticky-section">
				<div id="topbar-hold" class="nav-hold container">
					<nav class="navbar" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
							<!--=== Site Name ===-->
							<a class="site-name navbar-brand" href="#"><span>M</span>Caner</a>
							
						</div>
						   
						<!-- Main Navigation menu Starts -->
						<div class="collapse navbar-collapse navbar-responsive-collapse">
							
							
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav  navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
						</div>
						<!-- Main Navigation menu ends-->
					</nav>
				</div>
			</div>
			</div>

         
    </div>
   
</nav>
		

<div class="clearfix">
<div  class="header-section">

<!--=== Home Section Starts ===-->
		<div id="header" class="home-section-wrap center">
			<div class="section-overlay"></div>
			<div class="container home">
				<div class="row">
					<h1 class="well-come">HOŞGELDİNİZ</h1>
					
					<div class="col-md-8 col-md-offset-2">
						<p class="intro-message">İLETİŞİM</p>
						<p class="intro-message"><a href="https://www.facebook.com/staler14" class="fancy-button button-line button-white zoom">facebook</a></p>
						<p class="intro-message"><a href="https://github.com/mcanerkocadag" class="fancy-button button-line button-white zoom">Github</a></p>
						<!-- 
						<div class="home-buttons">
							<a href="#" class="fancy-button button-line button-white vertical">
								Learn more
								<span class="icon">
									<i class="fa fa-gear"></i>
								</span>
							</a>
							<a href="#" class="fancy-button button-line button-white zoom">
								Download now
								<span class="icon">
									<i class="fa fa-leaf"></i>
								</span>
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<!--=== Home Section Ends ===-->
	</div>
	
	
	<!--=== Features section Starts ===-->
	<section id="section-feature" class="feature-wrap">
		<div class="container features center">
			<div class="row">
				<div class="col-lg-12">
						<!--Features container Starts -->
						<ul id="card-ul" class="features-hold baraja-container">
						
							<!-- Single Feature Starts -->
    <?php query_posts('cat=5&showposts=8');?>            
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
     
    <li class="single-feature" title="Card style">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('projeresim', array('class' => 'feature-image'));} else { echo'<img src="http://placehold.it/249x186" class="feature-image">';} ?> 
                                <!-- Feature Icon -->
                                <h4 class="feature-title color-scheme"><?php the_title(); ?></h4>
                                <p class="feature-text">
                                    <?php the_excerpt();?>
                                </p>
                                
                                    <a href="<?php the_permalink();?>" class="fancy-button button-line btn-col small vertical">
                                      	Devamı ...
                                        <span class="icon">
                                            <i class="fa fa-leaf"> </i>
                                        </span>
                                    </a>
                                
                            </li>
		
	
    <?php endwhile; ?>
    <?php else : ?>
    Bu kategoride makale bulunmuyor.
    <?php endif; ?>
    <?php wp_reset_query(); ?>
                            
							
							<!-- Single Feature Ends -->
							
						</ul>
						<!--Features container Ends -->
						
						<!-- Features Controls Starts -->
						<div class="features-control relative">
							<button class="control-icon fancy-button button-line no-text btn-col bell" id="feature-prev" title="Previous" >
								<span class="icon">
									<i class="fa fa-arrow-left"></i>
								</span>
							</button>
							<button class="control-icon fancy-button button-line no-text btn-col zoom" id="feature-expand" title="Expand" >
								<span class="icon">
									<i class="fa fa-expand"></i>
								</span>
							</button>
							<button class="control-icon fancy-button button-line no-text btn-col zoom" id="feature-close" title="Collapse" >
								<span class="icon">
									<i class="fa fa-compress"></i>
								</span>
							</button>
							<button class="control-icon fancy-button button-line no-text btn-col bell" id="feature-next" title="Next" >
								<span class="icon">
									<i class="fa fa-arrow-right"></i>
								</span>
							</button>
						</div>
						<!-- Features Controls Ends -->
				</div>
			</div>
		</div>
	</section>
	<!--=== Features section Ends ===-->
	
	<!--=== Services section Starts ===-->
	<section id="section-services" class="services-wrap">
		<div class="container services">
			<div class="row">
			
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>Sitenin Özellikleri</h3>
				</div>
			
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-book-pencil fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Temiz Dizayn</h4>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-paperplane fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Full responsive</h4>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
					</div>
				</div>
				<!-- Single Service ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInRight" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-accelerator fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Ajax contact form</h4>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
					<span class="service-icon center"><i class="icon icon-basic-lightbulb fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Wordpress uyumlu</h4>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
						<p class="service-description justify">
							Başlıkla ilgili açıklamayı buraya yazabilirsiniz...
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
			</div>
		</div>
	</section>
	<!--=== Services section Ends ===-->
	<?php $kat=of_get_option("site_kategori");
		foreach($kat as $key => $value){
			if($value=="1"){
				$gosterilecekkategori=$key.',';
				}
			
			}
	 ?>
    
	<!--=== Step-1 section Starts ===-->
    <section id="step-1" class="section-step step-wrap">
    <?php query_posts('cat='.$gosterilecekkategori.'');?>
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
     
    
		<div class="container step animated" data-animation="bounceInLeft" data-animation-delay="700">
			<div class="row">
				<!-- Step Description Starts -->
				<div class="col-md-8">
							<h3 class="step-title color-scheme" style="margin-top:0px;"><?php the_title();?></h3>
                            <?php comments_number( 'yorum yok', '1 yorum', '% yorum' ); ?>
							<p class="step-description"><?php the_excerpt();?></p>
                            <p><a href="<?php the_permalink();?>" class="btn btn-primary">Devamı ... </a></p>
				</div>
                <div class="col-md-4">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail('bizimresim', array('class' => 'img-responsive'));} else {echo'<img src="http://placehold.it/396x200" class="img-responsive">';} ?> 
				</div>
                </div>
				<!-- Step Description Ends -->
				
			</div>
		
	
    <hr>
	<!--=== Step-1 section Ends ===-->
    <?php endwhile; ?>
    <?php else : ?>
    Bu kategoride makale bulunmuyor.
    <?php endif; ?>
    <?php wp_reset_query(); ?> 
    </section>
    
	
	
	
	<!--=== Video section Starts 
	<section id="section-video" class="section-video-wrap">
		<div class="section-overlay"></div>
		<div class="container big-video center animated" data-animation="fadeInLeft" data-animation-delay="700">
			<div class="row">
				<div class="col-md-12 section-title">
					<h3>Describe with a video</h3>
				</div>
				<div class="col-md-10 col-md-offset-1 video-content">
					<iframe src="http://player.vimeo.com/video/75317749?title=0&amp;byline=0&amp;portrait=0" width="400" height="240"></iframe>
				</div>
			</div>
		</div>
	</section>
	===-->
	<!--=== Video section Ends ===-->
	
	<!--=== ScreenShots section Starts ===-->
	
	<!--=== ScreenShots section Ends ===-->
	
	<!--=== Testimonials section Starts ===-->
	<section id="section-testimonials" class="testimonials-wrap">
		<div class="section-overlay"></div>
		<div class="container testimonials center animated" data-animation="rollIn" data-animation-delay="500">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="testimonial-slider">
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu 
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum, 
								quam urna fringilla magna
							</p>
							
							<h5 class="happy-client">Jhon Doe</h5>
							<span class="client-info">Executive at CDF Corp.</span>
						</div>
						<!-- Single Testimonial Ends -->
						
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Dolor sit amet, consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu 
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum, 
								quam urna fringilla magna
							</p>
							
							<h5 class="happy-client">JB Jeniffer</h5>
							<span class="client-info">Developer at TTF Corp.</span>
						</div>
						<!-- Single Testimonial Ends -->
						
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu 
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum, 
								quam urna fringilla magna
							</p>
							
							<h5 class="happy-client">Chan Jhin</h5>
							<span class="client-info">CEO of MutiNaTakio.</span>
						</div>
						<!-- Single Testimonial Ends -->
					</div>
					<div id="bx-pager" class="client-photos">
						<a data-slide-index="0" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="<?php bloginfo("stylesheet_directory");?>/images/client_1.jpg" alt="" /><!-- Client photo 1 -->
							</span>
						</a>
						<a data-slide-index="1" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="<?php bloginfo("stylesheet_directory");?>/images/client_2.jpg" alt="" /> <!-- Client photo 2 -->
							</span>
						</a>
						<a data-slide-index="2" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="<?php bloginfo("stylesheet_directory");?>/images/client_3.jpg" alt="" /> <!-- Client photo 3 -->
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=== Testimonials section Ends ===-->
	
	
	<!--=== Pricing section Starts ===-->
	
	<!-- === başlangıç 1 === 
	<section id="section-pricing" class="pricing-wrap">
		<div class="container pricing">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>Plans & pricing</h3>
				</div>
				
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="500">
					<div class="single-pricing">
					
						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Basic</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									40
									<span class="month">/month</span>
								</h3>
							</div>
						</div>
						
						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Unlimited Downloads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Uploads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Email Accounts</li>
							<li><span class="color-scheme fa fa-check"></span>Email Forwards</li>
							<li><span class="color-scheme fa fa-close"></span>Cloud Storage</li>
							<li><span class="color-scheme fa fa-close"></span>Voice call</li>
							<li><span class="color-scheme fa fa-close"></span>Screen Share</li>
						</ul>
						<div class="sign-up">
							<a href="#" class="fancy-button button-line btn-col zoom">
								Sign up
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>   -->
				<!-- Single Price Ends -->
				
				
				<!-- Single Price Starts -->
				<!-- === başlangıç 1 === 
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="700">
					<div class="single-pricing best-pricing"> 
					
						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Advance</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									60
									<span class="month">/month</span>
								</h3>
							</div>
						</div>
						
						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Unlimited Downloads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Uploads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Email Accounts</li>
							<li><span class="color-scheme fa fa-check"></span>Email Forwards</li>
							<li><span class="color-scheme fa fa-check"></span>Cloud Storage</li>
							<li><span class="color-scheme fa fa-close"></span>Voice call</li>
							<li><span class="color-scheme fa fa-close"></span>Screen Share</li>
						</ul>
						<div class="sign-up">
							<a href="#" class="fancy-button button-line btn-col vertical">
								Sign up
								<span class="icon">
									<i class="fa fa-hand-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>  -->
				<!-- Single Price Ends -->
				
				<!-- Single Price Starts -->
				<!-- Single Price Starts 3
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="900">
					<div class="single-pricing">
					
						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Premium</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									80
									<span class="month">/month</span>
								</h3>
							</div>
						</div>
						
						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Unlimited Downloads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Uploads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Email Accounts</li>
							<li><span class="color-scheme fa fa-check"></span>Email Forwards</li>
							<li><span class="color-scheme fa fa-check"></span>Cloud Storage</li>
							<li><span class="color-scheme fa fa-check"></span>Voice call</li>
							<li><span class="color-scheme fa fa-close"></span>Screen Share</li>
						</ul>
						<div class="sign-up">
							<a href="#" class="fancy-button button-line btn-col rotate">
								Sign up
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>  -->
				<!-- Single Price Ends -->
				
				<!-- Single Price Starts 
				
				<div class="col-md-3 col-sm-6 single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="1100">
					<div class="single-pricing">
					
						<div class="pricing-head">
							<h4 class="pricing-heading color-scheme">Ultra</h4>
							<div class="price">
								<h3>
									<span class="dollar">$</span>
									100
									<span class="month">/month</span>
								</h3>
							</div>
						</div>
						
						<ul class="package-features">
							<li><span class="color-scheme fa fa-check"></span>Unlimited Downloads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Uploads</li>
							<li><span class="color-scheme fa fa-check"></span>Unlimited Email Accounts</li>
							<li><span class="color-scheme fa fa-check"></span>Email Forwards</li>
							<li><span class="color-scheme fa fa-check"></span>Cloud Storage</li>
							<li><span class="color-scheme fa fa-check"></span>Voice call</li>
							<li><span class="color-scheme fa fa-check"></span>Screen Share</li>
						</ul>
						<div class="sign-up">
							<a href="#" class="fancy-button button-line btn-col zoom">
								Sign up
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</a>
						</div>
					</div>
				</div>   -->
				<!-- Single Price Ends -->
				
			</div>
		</div>
	</section>
	<!--=== Pricing section Ends ===-->
	
	<!--=== Subscribe section Starts 
	<section id="section-subscribe" class="subscribe-wrap">
		<div class="section-overlay"></div>
		<div class="container subscribe center">
			<div class="row">
				<div class="col-lg-12">
					<p class="subscription-success"></p>
					<p class="subscription-failed"></p>
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Abone ol</h3>
					</div>
					<form id="subscription-form">
						<input type="email" name="EMAIL" required placeholder="Your Email" class="input-email" />
						<button type="submit" id="subscription-btn" class="fancy-button button-line button-white large zoom">
							Abone ol
							<span class="icon">
								<i class="fa fa-sign-in"></i>
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>   ===-->
	<!--=== Subscribe section Ends ===-->
	
	
	<!--=== Download section Starts ===-->
	<section id="section-download" class="download-wrap">
		<div class="container download center">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Uygulamalarım</h3>
					</div>
					<div class="download-buttons clearfix"> <!-- Download Buttons -->
						<a class="fancy-button button-line no-text btn-col large zoom" href="#" title="Download from App store">
							<span class="icon">
							<i class="fa fa-apple"></i>
							</span>
						</a>
						<a class="fancy-button button-line btn-col no-text large zoom" href="#" title="Download from App store">
							<span class="icon">
							<i class="fa fa-android"></i>
							</span>
						</a>
						<a class="fancy-button button-line btn-col no-text large zoom" href="#" title="Download from App store">
							<span class="icon">
							<i class="fa fa-windows"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--=== Download section Ends ===-->
	
	
	<!--=== Contact section Starts ===-->
	<section id="section-contact" class="contact-wrap">
	<div class="section-overlay"></div>
		<div class="container contact center animated" data-animation="flipInY" data-animation-delay="1000">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Mesaj Bırakın</h3>
					</div>
					
					<div class="confirmation">
						<p><span class="fa fa-check"></span></p>
					</div>
					
					<form class="contact-form support-form">
						
						<div class="col-lg-12">
							<input id="name" class="input-field form-item field-name" type="text" required name="contact-name" placeholder="İsim" />

							<input id="email" class="input-field form-item field-email" type="email" required name="contact-email" placeholder="Email" />

							<input id="subject" class="input-field form-item field-subject" type="text" required name="contact-subject" placeholder="Konu" />
							<textarea id="message" class="textarea-field form-item field-message" rows="10" name="contact-message" placeholder="Mesajınız..."></textarea>
						</div>
						<button type="submit" class="fancy-button button-line button-white large zoom subform">
							Mesaj Gönder
							<span class="icon">
								<i class="fa fa-paper-plane-o"></i>
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--=== Contact section Ends ===-->