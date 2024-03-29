<?php $sv = '?v=1'; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Janaq</title>
	<meta name="description" content="Somos Janaq, una empresa conformada por profesionales de amplia experiencia en desarrollo y dirección de proyectos de software, consultoría y capacitación en deversas tecnologías">
	<meta name="author" content="Janaq">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
	body {
	  padding-top: 60px;
	  padding-bottom: 40px;
	}
	</style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css<?=$sv?>">
  <link rel="stylesheet" href="css/animate.css<?=$sv?>">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css<?=$sv?>">
  <!--[if lt IE9 ]  <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.css<?=$sv?>"><![endif]-->
  <link rel="stylesheet" href="fancybox/jquery.fancybox.css<?=$sv?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/style.css<?=$sv?>">
  
	<!--[if lt IE 9]>
	<script src="js/html5-3.4-respond-1.1.0.min.js<?=$sv?>"></script>
	<![endif]-->
  
</head>
<body data-spy="scroll" data-target="#primary-nav">
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">Menu</a>
        <a class="brand" href="#">Venture Theme</a>
        <div id="primary-nav" class="nav-collapse">
          <ul class="nav">
            <li class="active"><a class="anchorLink" href="#home">Home</a></li>
            <li><a class="anchorLink" id="quienes-somos" href="#features">¿Quienes somos?</a></li>
            <li><a class="anchorLink" id="servicios" href="#services">Servicios</a></li>
            <li><a class="anchorLink" id="postula" href="#portfolio">Postula</a></li>
            <li><a class="anchorLink" id="contacto" href="#contact">Contact</a></li>
            <li><a class="anchorLink" href="#about">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/container-->
    </div><!--/navbar-inner-->
  </div><!--/navbar-->
    
  <header id="home">
    <div class="container">
      <div class="row">
        <div class="span12 headline">
          <h1>Janaq</h1>
          <i class="description">Software y Consultoría</i>
        </div><!--/span12-->
      </div><!--/row-->
      <div class="row animated fadeInUp">
        <div class="span12">
          <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
              <!--slide-->
              <div class="active item">
                <div class="row">
                  <div class="span6">
                    <img src="assets/slide-half-1.png<?=$sv?>" alt=""/>
                  </div>
                  <div class="span4">
                    <h2>Nosotros</h2>
                    <p>Somos Janaq, una empresa conformada por profesionales de amplia experiencia en desarrollo y dirección de proyectos de software, consultoría y capacitación en deversas tecnologías.</p>
                    <a class="btn btn-red" href="#" onclick="$(function(){ $('#quienes-somos').click(); });return false;">¡Leer más!</a>
                  </div>
                </div>
              </div>
              <!--slide-->
              <div class="item">
                <div class="row">
                  <div class="span6 animated rotateInDownLeft">
                    <img src="assets/slide-half-2.png<?=$sv?>" alt=""/>
                  </div>
                  <div class="span4 animated rotateInUpRight">
                    <h2>Nuestros Servicios</h2>
                    <p>Desarrollo de Aplicaciones web | Desarrollo de Aplicaciones Móviles</p>
                    <p>Consultoría Técnica en soluciones Open Source</p>
                    <p>Capacitación</p>
                    <a class="btn btn-red" href="#" onclick="$(function(){ $('#servicios').click(); });return false;">Conocer más</a>
                  </div>
                </div>
              </div>
              <!--slide-->
              <div class="item">
                <div class="row">
                  <div class="span6 animated fadeInUpBig">
                    <img src="assets/slide-half-3.png<?=$sv?>" alt=""/>
                  </div>
                  <div class="span4 animated fadeInDownBig">
                    <h2>Únete a Nuestro Equipo</h2>
                    <p>Estamos buscando los mejores talentos.</p>
                    <p>¿Deseas unirte a nuestra familia?</p>
                    <a class="btn btn-primary" href="#" onclick="$(function(){ $('#postula').click(); });return false;">¡Postula!</a>
                  </div>
                </div>
              </div>
            </div><!--/carousel-inner-->
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div><!--/myCarousel-->
        </div><!--/span12-->
      </div><!--/row-->
    </div><!--/container-->
  </header>
  
  <div class="container"><!--main content-->
    <div class="strip">
      <div class="row">
        <div class="span12">
          <a class="btn btn-red btn-large" href="#" onclick="$(function(){ $('#contact').click(); });return false;"><i class="icon-heart icon-white"></i> Contáctanos!</a>
          <a class="btn btn-inverse btn-large anchorLink" href="#portfolio" onclick="$(function(){ $('#servicios').click(); });return false;">Mira nuestros servicios <i class="icon-share-alt icon-white"></i></a>
          <span class="call-to-action">No dudes en contactarnos para realizar alguna cotización</span>
          <p>Los integrantes de Janaq tenemos varios años en el mercado que respaldan nuestro profesionalismo</p>
        </div>
      </div>
    </div>
    
    <section id="features">
      <div class="row">
        <div class="span12">
          <h2><em><i class="icon-bookmark"></i> Main Features</em> <a class="up anchorLink" href="#home"><i class="icon-chevron-up"></i></a></h2>
        </div>
      </div>
      <div class="row">   
        <div class="span4 feature">
          <h3>HTML5</h3>
          <img src="assets/feature-html5.png<?=$sv?>" width="50" height="50" class="thumb" alt="thumb">
          <p><strong>HTML5</strong> Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you.</p>
        </div>
        <div class="span4 feature">
          <h3>Simple Layout</h3>
          <img src="assets/feature-layout.png<?=$sv?>" width="50" height="50" class="thumb" alt="thumb">
          <p>Bootstrap is designed to help people of all skill level—designer or developer, huge nerd or early beginner. Use it as a complete kit or use to start something more complex.</p>
        </div>      
        <div class="span4 feature">
          <h3>Web Fonts</h3>
          <img src="assets/feature-webfonts.png<?=$sv?>" class="thumb" alt="thumb">
          <p>Originally built with only modern browsers in mind, Bootstrap has evolved to include support for all major browsers (even IE7!) and, with Bootstrap 2, tablets and smartphones, too.</p>
        </div>
      </div><!--/row-->
      <div class="row">
        <div class="span4 feature">
          <h3>Modern Design</h3>
          <img src="assets/feature-design.png<?=$sv?>" class="thumb" alt="thumb">
          <p>The best part about forms in Bootstrap is that all your inputs and controls look great no matter how you build them in your markup.</p>
        </div>
        <div class="span4 feature">
          <h3>Easy to Customize</h3>
          <img src="assets/feature-customize.png<?=$sv?>" class="thumb" alt="thumb">
          <p>Different types of form layouts require some changes to markup, but the controls themselves remain and behave the same.</p>
        </div>
        <div class="span4 feature">
          <h3>Great Support</h3>
          <img src="assets/feature-support.png<?=$sv?>" class="thumb" alt="thumb">
          <p>States like error, warning, and success are included for each type of form control. Also included are styles for disabled controls. States like error, warning, and success are included.</p>
        </div>
      </div><!--/row-->
    </section>
    
    <section id="services">
      <div class="row">
        <div class="span12">
        <h2><em><i class="icon-bookmark"></i> Products & Services</em> <a class="up anchorLink" href="#home"><i class="icon-chevron-up"></i></a></h2>
        </div>
      </div>
      <div class="row">
        <div class="span4">
          <img class="framed" src="assets/product-1.png<?=$sv?>" alt=""/>
          <br/>
        </div>
        <div class="span5">
          <h4>Product Overview</h4>
          <p>HD movies and TV shows from iTunes. The entire Netflix streaming catalog. The latest hit shows from Hulu Plus. Live baseball, basketball, and hockey games. Apple TV makes you the master of <a href="#" rel="tooltip" title="fancy tooltip">your own media empire</a>.</p>
          <p>Get to know the latest features available now. Don't forget to checke out our website on a regular basis:</p>
          <ul>
            <li><a href="#" rel="tooltip" title="fancy tooltip">Mobile ready</a></li>
            <li><a href="#" rel="tooltip" title="fancy tooltip">Customizable</a></li>
            <li><a href="#" rel="tooltip" title="fancy tooltip">Great customer support</a></li>
            <li><a href="#" rel="tooltip" title="fancy tooltip">dropcapproof design</a></li>
          </ul>
        </div>
        <div class="span3">
          <div class="well">
            <strong>Item Details</strong>
            <hr>
            <p><i class="icon-tag"></i> That’s perfect for spontaneous movie nights (or afternoons or mornings). Search by top movies, title, or genre. Can’t decide? Read reviews, watch trailers, and check out Rotten Tomatoes ratings.</p>
          </div>
        </div>
      </div>
      <br/>
      <div class="row">
        <div class="span4">
          <img class="framed" src="assets/product-2.png<?=$sv?>" alt=""/>
          <br/>
        </div>
        <div class="span5">
          <h4>Second Product Overview</h4>
          <p>Make any time prime time. Buy your favorite TV shows and watch them — without commercials — whenever you like. <a href="#"  rel="tooltip" title="fancy tooltip">Watch a show the day after it airs</a>, or camp out on your couch and catch up on past seasons with a marathon of back-to-back-to-back episodes. Apple TV keeps track of your favorite shows, so the next time you turn on your TV, you can quickly see which season you’re watching and which episodes are new. Just choose shows with a few clicks of the Apple Remote.</p>
          <p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you.</p>
        </div>
        <div class="span3">
          <div class="well">
            <strong>Item Details</strong>
            <hr>
            <p><i class="icon-tag"></i> That’s perfect for spontaneous movie nights (or afternoons or mornings). <a href="#" rel="tooltip" title="fancy tooltip">Search by top movie</a> title, or genre. Can’t decide? Read reviews, watch trailers, and check out Rotten Tomatoes ratings.</p>
          </div>
        </div>
      </div>
      <br/>
      <div class="row">
        <div class="span4">
          <img class="framed" src="assets/product-3.png<?=$sv?>" alt=""/>
          <br/>
        </div>
        <div class="span5">
          <h4>Third Product Overview</h4>
          <p>Make any time prime time. Buy your favorite TV shows and watch them — without commercials — whenever you like. Watch a show the day after it airs, or camp out on your couch and catch.</p>
          <hr>
          <blockquote>
            <p>Best service I've ever experienced. Thank you very much for your time.</p>
            <small>Lucida Console</small>
          </blockquote>
          <hr>
        </div>
        <div class="span3">
          <div class="well">
            <strong>Item Details</strong>
            <hr>
            <p><i class="icon-tag"></i> That’s perfect for spontaneous movie nights (or afternoons or mornings). Search by top movies, title, or genre. Can’t decide? Read reviews, watch trailers, and check out Rotten Tomatoes ratings.</p>
          </div>
        </div>
      </div>
      <br/>
      <div class="row">
        <div class="span4">
          <img class="framed" src="assets/product-4.png<?=$sv?>" alt=""/>
          <br/>
        </div>
        <div class="span5">
          <h4>Fourth Product Overview</h4>
          <p>Make any time prime time. Buy your favorite TV shows and watch them — without commercials — whenever you like. Watch a show the day after it airs, or camp out on your couch and catch.</p>
          <p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. <a href="#" rel="tooltip" title="fancy tooltip">Bootstrap</a> is built for you.</p>
        </div>
        <div class="span3">
          <div class="well">
            <strong>Item Details</strong>
            <hr>
            <p><i class="icon-tag"></i> That’s perfect for spontaneous movie nights (or afternoons or mornings). Search by top movies, title, or genre. Can’t decide? Read reviews, watch trailers, and check out Rotten Tomatoes ratings.</p>
          </div>
        </div>
      </div>
    </section>
  
    <section id="portfolio">
      <div class="row">
        <div class="span12">
          <h2><em><i class="icon-bookmark"></i> Portfolio with LightBox</em> <a class="up anchorLink" href="#home"><i class="icon-chevron-up"></i></a></h2>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <ul class="thumbnails">
            <li class="span3">
              <div class="thumbnail">
                <a class="fancybox" rel="group" href="assets/portfolio-large-1.png" title="Portfolio Item #1"><img src="assets/portfolio-thumbnail-1.png<?=$sv?>" alt=""></a>
                <div class="caption">
                  <h4>Image Title</h4>
                  <hr>
                  <p>Short description for this Portfolio item.</p>
                </div>
              </div>
            </li> 
            <li class="span3">
              <div class="thumbnail">
                <a class="fancybox" rel="group" href="assets/portfolio-large-1.png<?=$sv?>" title="Portfolio Item #2"><img src="assets/portfolio-thumbnail-1.png<?=$sv?>" alt=""></a>
                <div class="caption">
                  <h4>Image Title</h4>
                  <hr>
                  <p>Short description for this Portfolio item.</p>
                </div>
              </div>
            </li>            
            <li class="span3">
              <div class="thumbnail">
                <a class="fancybox" rel="group" href="assets/portfolio-large-1.png<?=$sv?>" title="Portfolio Item #3"><img src="assets/portfolio-thumbnail-1.png<?=$sv?>" alt=""></a>
                <div class="caption">
                  <h4>Image Title</h4>
                  <hr>
                  <p>Short description for this Portfolio item.</p>
                </div>
              </div>
            </li>             
            <li class="span3">
              <div class="thumbnail">
                <a class="fancybox" rel="group" href="assets/portfolio-large-1.png<?=$sv?>" title="Portfolio Item #4"><img src="assets/portfolio-thumbnail-1.png<?=$sv?>" alt=""></a>
                <div class="caption">
                  <h4>Image Title</h4>
                  <hr>
                  <p>Short description for this Portfolio item.</p>
                </div>
              </div>
            </li>  
            <li class="span3">
              <div class="thumbnail">
                <a class="fancybox" rel="group" href="assets/portfolio-large-1.png<?=$sv?>" title="Portfolio Item #5"><img src="assets/portfolio-thumbnail-1.png<?=$sv?>" alt=""></a>
                <div class="caption">
                  <h4>Image Title</h4>
                  <hr>
                  <p>Short description for this Portfolio item.</p>
                </div>
              </div>
            </li>             
            <li class="span3">
              <div class="thumbnail">
                <a class="fancybox" rel="group" href="assets/portfolio-large-1.png<?=$sv?>" title="Portfolio Item #6"><img src="assets/portfolio-thumbnail-1.png<?=$sv?>" alt=""></a>
                <div class="caption">
                  <h4>Image Title</h4>
                  <hr>
                  <p>Short description for this Portfolio item.</p>
                </div>
              </div>
            </li> 
            <li class="span3">
              <div class="thumbnail">
                <a class="fancybox" rel="group" href="assets/portfolio-large-1.png<?=$sv?>" title="Portfolio Item #7"><img src="assets/portfolio-thumbnail-1.png<?=$sv?>" alt=""></a>
                <div class="caption">
                  <h4>Image Title</h4>
                  <hr>
                  <p>Short description for this Portfolio item.</p>
                </div>
              </div>
            </li>            
            <li class="span3">
              <div class="thumbnail">
                <a class="fancybox" rel="group" href="assets/portfolio-large-1.png<?=$sv?>" title="Portfolio Item #8"><img src="assets/portfolio-thumbnail-1.png<?=$sv?>" alt=""></a>
                <div class="caption">
                  <h4>Image Title</h4>
                  <hr>
                  <p>Short description for this Portfolio item.</p>
                </div>
              </div>
            </li>
          </ul>
        </div><!--span12-->
      </div><!--/row-->
    </section>
  
    <section id="about">
      <div class="row">
        <div class="span12">
          <h2><em><i class="icon-bookmark"></i> About & Legal</em> <a class="up anchorLink" href="#home"><i class="icon-chevron-up"></i></a></h2>
        </div>
      </div>
      <div class="row">
        <div class="span4">
          <div class="well">
            <h3>Terms and Conditions</h3>
            <hr>
            <p><span class="dropcap">1</span> Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you.</p>
            <p>Bootstrap is designed to help people of all skill level—designer or developer, huge nerd or early beginner. Use it as a complete kit or use to start something more complex.</p>
            <a class="btn btn-red" data-toggle="modal" href="#myModal" >Launch Modal</a>
            <div class="modal hide fade" id="myModal">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Frequently Asked Questions</h3>
              </div>
              <div class="modal-body">
                <span class="dropcap">1</span> <h4>Can I use your freebies in my latest client project?</h4>
                <p>Yes. No attribution required. When sharing any work that uses my resources on sites like Dribbble or Forrst it would be nice to be credited. You want to make me feel all warm and fuzzy inside don’t you?</p>
                <hr>
                <h4><span class="dropcap">2</span> Can I use your resources in a theme/template?</h4>
                <p>Yes. No attribution required but appreciated. I love people coding up the odd freebie, but an entire blog dedicated to just that is probably a step too far Jack. C’mon Mookie, do the right thing.</p>
                <hr>
                <h4><span class="dropcap">3</span> Can I offer your freebies for download on my blog/site?</h4>
                <p>Not directly no. If you want to share the wealth then linking to each resource on Premium Pixels is encouraged and sincerely appreciated. Linking directly to the zip file, or worse, repackaging your own zip file, gets my goat :(</p>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-red" data-dismiss="modal">Ok, I got it.</a>
              </div>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="well">
            <h3>Light Weight Defaults</h3>
            <hr>
            <span class="dropcap">2</span> <p>Bootstrap is designed to help people of all skill level—designer or developer, huge nerd or early beginner. Use it as a complete kit or use to start something more complex.</p>
            <p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you.</p>
            <a class="btn btn-red" data-toggle="modal" href="#myModal" >Launch Modal</a>
          </div>
        </div>
        <div class="span4">
          <div class="well">
            <h3>Simple & Flexible Markup</h3>
            <hr>
            <p><span class="dropcap">3</span> Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you.</p>
            <p>Bootstrap is designed to help people of all skill level—designer or developer, huge nerd or early beginner. Use it as a complete kit or use to start something more complex.</p>
            <a class="btn btn-red" data-toggle="modal" href="#myModal" >Launch Modal</a>
          </div>
        </div>
      </div><!--/row-->
    </section>
  
    <section id="contact">
      <div class="row">
        <div class="span12">
          <h2><em><i class="icon-bookmark"></i> Contact Us</em> <a class="up anchorLink" href="#home"><i class="icon-chevron-up"></i></a></h2>
        </div>
      </div>
      <div class="row">
        <div class="span4">
          <h3>Company Address</h3>
          <br>
          <div class="well">
            <strong>Company:</strong>
            <hr>
            <p>Greg L. Denney<br/>
              4209 Scenicview Drive<br/>
              Redmond, WA 98052<br/>
              Tel.: +1.123.456.789
            </p>
            <p>Don't hesitate to contact us about anything you want. We are open to questios, comments and suggestions.</p>
          </div>
        </div>
        <div class="span4">
        <h3>Time to keep in touch.</h3>
        <br/>
          <form>
            <fieldset>
              <div class="control-group">
                <label class="control-label" for="name">Full Name:</label>
                <input class="input-xlarge" type="text" id="name">
              </div>
              <div class="control-group">
                <label class="control-label" for="email">Valid Email:</label>
                <input type="text" class="input-xlarge" id="email">
              </div>
              <div class="control-group">
                <label class="control-label" for="message">Message:</label>
                <textarea class="input-xlarge" id="message" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-red">Submit Now!</button>
            </fieldset>
          </form>
        </div><!--/span-->
        <div class="span4">
          <h3>How about a map?</h3>
          <br/>
          <img class="framed" src="assets/map.png<?=$sv?>" alt=""/>
        </div>
      </div><!--/row-->
    </section>
  </div><!--/main content-->
      
  <footer>
    <div class="container">
      <div class="row">
        <div class="span2">
					<h3>Business Network</h3>
					<ul>
						<li><a href="#" title=""><i class="icon-external-link"></i> Company Websites</a></li>
						<li><a href="#" title=""><i class="icon-external-link"></i> Subsidiary Websites</a></li>
						<li><a href="#" title=""><i class="icon-external-link"></i> Affiliate Websites</a></li>
            <li><a href="#" title=""><i class="icon-external-link"></i> Sibling Websites</a></li>
					</ul>
				</div>
				<div class="span2">
  				<h3>Social Networks</h3>
   			  <ul>
						<li><a href="#" title=""><i class="icon-twitter"></i> Twitter</a></li>
						<li><a href="#" title=""><i class="icon-facebook"></i> Facebook</a></li>
						<li><a href="#" title=""><i class="icon-google-plus"></i> Google+</a></li>
            <li><a href="#" title=""><i class="icon-pinterest"></i> Pinterest</a></li>
					</ul>
				</div>
				<div class="span4">
					<h3>Terms and Conditions</h3>
          <p>Commercial Use. If you would like to use these graphics in a commercial projects, please go to the commercial use section. Non-profit use.</p>
          <p>If you would like to use graphics from psdgraphics.com in a non-profit projects.</p>
				</div>
				<div class="span4">
					<h3>Newsletter</h3>
					<p>Subscribe to our monthly newsletter and be the first to know about our news and special deals!</p>
					<form>
            <div class="controls">
              <div class="input-append">
						    <input type="text" placeholder="Enter your E-mail" />
						    <input type="submit" class="btn btn-inverse" value="Ok" />
              </div>  
            </div>
					</form>
				</div><!--/span4-->
      </div><!--/row-->
    </div> <!-- /container -->
    <div class="base">
      <div class="container">
        <p>Designed by @heyallanmoreno. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
    
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js<?=$sv?>"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js<?=$sv?>"><\/script>')</script>
  <script src="js/bootstrap.min.js<?=$sv?>"></script>
  <script src="js/jquery.anchor.js<?=$sv?>" type="text/javascript"></script>
  <script type="text/javascript" src="fancybox/jquery.fancybox.pack.js<?=$sv?>"></script>
  <script src="js/script.js<?=$sv?>"></script>

</body>
</html>
