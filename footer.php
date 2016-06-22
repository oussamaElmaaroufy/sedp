	<footer>

		<div class="cross_content" style="background: url('images/cross_content_image.jpg') no-repeat 50% 0% / cover;">
			
			<div class="row">
				<div class="columns medium-offset-6 medium-5 small-12">
					<div class="cross_content_box">
						<div class="description">SEDP s’engage dans une démarche agenda 21.</div>
						<div class="tout"><a href="">Nos engagements <span class="ico_arrow_right"></span></a></div>
					</div>
				</div> 
			</div>

		</div>
		

		<?php if ($_SERVER["SCRIPT_NAME"] == "/oe/SEDP/index.php"): ?>
		<?php require( 'publication_newsletter.php' ); ?>
		<?php endif ?>


		<div class="bottom">
			<div class="row">
				<div class="columns medium-3 small-6">
					<ul>
						<li><a href="">Contact <span class="underline"></span></a></li>
						<li><a href="">Recrutement<span class="underline"></span></a></li>
					</ul>
				</div> 
				<div class="columns medium-3 small-6">
					<ul>
						<li><a href="">Plan du site<span class="underline"></span></a></li>
						<li><a href="">Mentions légales <span class="underline"></span></a></li>
					</ul>
				</div> 
				<div class="columns medium-3 medium-offset-3 small-12">
					<div class="right filiale">
						<img src="images/logos/logo_ratp.png">
						<div>Filiale du groupe depuis 1990</div>
						<div>© SEDP 2015</div>
					</div>
				</div> 
			</div>
		</div>
	</footer>
	
	
	<div id="menu_container" >
		<div id="shadow"></div>
		<aside id="side-menu" >
			<div class="close"><span></span></div>
			<ul class="">
				<li><a href="">L’entreprise</a></li>
				<li>
					<a href="">Compétences</a>
					<ul class="">
						<li><a href="">Stratégie de valorisation immobilière</a></li>
						<li><a href="">Audits et conseil</a></li>
						<li><a href="">Maîtrise d’ouvrage</a></li>
						<li><a href="">Exploitation</a></li>
						<li><a href="">Gestion d’espaces événementiels</a></li>
						<li><a href="">Innovation et ville durable</a></li>
					</ul>
				</li>
				<li><a href="SasProjets.php">Réalisations</a></li>
				<li><a href="SasArticles.php">Actualités</a></li>
				<li><a href="SasPublications.php">Publications</a></li>
				<li><a href="Metier.php">Tous les métiers</a></li>
			</ul>
			<ul class="bottom">
				<li><a href="">Nous rejoindre</a></li>
				<li><a href="Contact.php">Contact</a></li>
			</ul>
			<img src="images/logos/logo_sidebar.png" class="logo_sidebar">
		</aside>
	</div>
</div>

	<script type="text/javascript">

		var owl;

		$(document).ready(function () {
			
			//================== SLIDER_COMPETENCE
				function customPager() {

				    $.each(this.owl.userItems, function (i) {

				        var titleData = jQuery(this).find('img').attr('title');
				        var num = i+1;
				        var Data = "<b>" +  num + "</b>" + titleData;
				        var paginationLinks = jQuery('.owl-controls .owl-pagination .owl-page span');

				    	$(paginationLinks[i]).append(Data);

				    });

				}

			    $('#slider_competence').owlCarousel({
			        navigation: true, // Show next and prev buttons
    				navigationText: ["",""],
			        slideSpeed: 300,
			        paginationSpeed: 400,
					items:1,
					loop:true,
					itemsCustom:[[0,1],[736,1],[992,1]]	,
			        afterInit: customPager,
			        afterUpdate: customPager
			    });


			$("#chevron").click(function(){
				$("#chevron").toggleClass("up");
				$(".blocfiltre .filtre").slideToggle('1000');
			});

			//================== MENU_BURGER
				$("#menu_burger").click(function(){
					$("#shadow").addClass("background");
					$("#side-menu").addClass("opn");
				});

				$("#side-menu .close").click(function(){
					$("#shadow").removeClass("background");
					$("#side-menu").removeClass("opn");
				});

				$("#shadow").click(function(){
					$("#shadow").removeClass("background");
					$("#side-menu").removeClass("opn");
				});
			
			$(".newsletter form [type='text']").focus(function(){
				$(".newsletter form [type='submit']").css("width","45px")
			});
			$(".newsletter form [type='text']").blur(function(){
				$(".newsletter form [type='submit']").css("width","60px")
			});
			

			if (window.matchMedia("(max-device-width: 600px)").matches) {
				
				$("#slider_actualites").owlCarousel({

					pagination : true,
    				navigationText: ["",""],
					navigation : false, // Show next and prev buttons
					items:1,
					itemsCustom:[[0,1],[736,1],[992,1]]	,
				});

				$("#page_slider_projets").owlCarousel({

					pagination:false,
    				navigationText: ["",""],
					navigation : true, // Show next and prev buttons
					rewindNav: true,
					items:3,
					loop:true,
					itemsCustom:[[0,1],[736,2],[992,3]]	,
				});

				$("#sascompetence_slider_projets").owlCarousel({

					pagination:false,
	    			navigationText: ["",""],
					navigation : true,
					items:1,
					itemsCustom:[[0,1],[736,2],[992,2]]	,
				});

				$("#slider_metier").owlCarousel({

					pagination : false,
    				navigationText: ["",""],
					navigation : true, // Show next and prev buttons
					items:1,
					itemsCustom:[[0,1],[736,1],[992,1]]	,
				});

				$("#slider_metier_pub").owlCarousel({

					pagination : true,
    				navigationText: ["",""],
					navigation : false, // Show next and prev buttons
					items:1,
					itemsCustom:[[0,1],[736,1],[992,1]]	,
				});
				
			} else {}
				
			$("#slider_projets").owlCarousel({

				pagination:false,
				navigation : true, // Show next and prev buttons
    			navigationText: ["",""],
				rewindNav: true,
				items:3.55,
				loop:true,
				itemsCustom:[[0,1.35],[736,2],[992,3.55]]	,
			});

			$("#slider_page").owlCarousel({

				pagination:false,
    			navigationText: ["",""],
				navigation : true,
				items:1,
				itemsCustom:[[0,1],[736,1],[992,1]]	,
			});
			
			$("#slider_projet").owlCarousel({

				pagination:false,
    			navigationText: ["",""],
				navigation : true,
				items:1,
				itemsCustom:[[0,1],[736,1],[992,1]]	,
			});

			$("#slider_points_cles").owlCarousel({

				pagination:false,
    			navigationText: ["",""],
				navigation : true,
				items:3,
				itemsCustom:[[0,1.35],[736,2],[992,3]]	,
			});

			// PAGE PROJET
			$("#slider_citation").owlCarousel({
				pagination : true,
    			navigationText: ["",""],
				navText : "",
				navigation : false,
				items:1,
				itemsCustom:[[0,1],[736,1],[992,1]]	,
			});


		});
	</script>
</body>
</html>