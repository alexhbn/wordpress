<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
	  
      
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();

?>
    
<section class="section1">
   	<div class="titre1">
	<h3><?php the_field("banner_baseline"); ?></h3>
	<h1 class="titre11"><?php the_field("titre_marron"); ?></h1>
	<h1 class="sous-titre1"><?php the_field("titre_vert"); ?></h1>
		
		
		
	</div>
    <input class="favorite styled"
       type="button"
       value="s'inscrire aux rencontres">
    
</section>
	
	<section class="section2">
	
	<h1 class="laconference"><?php the_field("titre_section1"); ?></h1>
		<hr align="center" width="10%" color=#615858 size="1">
		<p><br><?php the_field("description"); ?></p>
	<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/bandeau.jpg" alt="">
	</section>
	
   <section class="section3">
	
	<h1 class="au-programme"><?php the_field("titre_programme"); ?></h1>
		<hr align="center" width="10%" color=#615858 size="1">
	   <div class="leprogramme">
		
		   <div>
			   <h1>Les végétaux dans la chaine <br>alimentaire</h1>
		   		
			   <p><strong>8.30</strong> Introduction par Christophe Fondation<p>
		   		<p><strong>9.00</strong> Wim de Vries Wageningen University<p>
			   <p><strong>9.45</strong> Benjamin Alles Paris XIII University<p>
			   <p><strong>10.15</strong> Armando Perez Cueto Copenhagen University<p>
			   <p><strong>10.45</strong> Cofee Break<p>
		   
		   </div>
		
		   <div>
			   <h1>Les activités de la fondation</h1>
	   				
		   <p><strong>11.15</strong> Introduction par Christophe Fondation<p>
			   <p><strong>11.35</strong> Le projet EPICALIM de la fondation<p>
			   <p><strong>12.00</strong> Cérémonie du prixde recherche<p>
			   <p><strong>12.30</strong> Lunch<p>
	   </div>
	   
	   		</div>
	   
	   
	</section>
	
	
	<section class="section4">
	<h1 class="lesorateurs">LES ORATEURS</h1>
	<hr align="center" width="10%" color=#615858 size="1">
	<div class="imagepersonnes">
		<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Wim_Vries.jpg" alt="">
		<h3>Wim de Vries</h3>
			<a href="">voir la video</a>
		</div>
		
		
		<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/images.jpg" alt="">
		<h3>Laurence Depezay</h3>
			<a href="">en savoir plus</a>
		</div>
		
		<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/MARTIN-Fabienne-13.jpg" alt="">
		<h3>Josephine Depezay</h3>
			<a href="">lire la video</a>
		</div>
		
		<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg" alt="">
		<h3>Catherine Dubois</h3>
			<a href="">lire la video</a>
			</div>
		
				</div>
		
		
		
		<div class="imagepersonnes2">
		<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait-bel-homme-serieux-regardant-camera-fond-blanc_23-2148213410" alt="">
		<h3>Francois Jean</h3>
			<a href="">voir la video</a>
		</div>
		
		
		<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/SR20160129-623" alt="">
		<h3>Jerome Louis</h3>
			<a href="">en savoir plus</a>
		</div>
		
		
		
		
		
		</div>
		
	
		
	</section>
	
    <section class="section5">
	
		<h1 class="infospratiques">INFORMATIONS PRATIQUES</h1>
		<hr align="center" width="10%" color=#615858 size="1">
		<section class="section52">
			
		<div class="emplacement">
			<div><img  id="emplacement" src="<?php echo get_template_directory_uri(); ?>/assets/img/pngguru.com (1).png" alt="">
			<h3> Square brussels <br> Mont des arts <br> 1000 Bruwelles <br> Belgique</h3>
			
			</div>
			<hr align="center" width="80%" color=#FFFFFF size="1">
		<div><img  id="emplacement" src="<?php echo get_template_directory_uri(); ?>/assets/img/clock_icon-icons.com_64800.png" alt="">
			<h3> Le 03.12.2019 <br> de 8h30 à 12h30 </h3>
			</div>
			<hr align="center" width="80%" color=#FFFFFF size="1">
			<div><img  id="emplacement" src="<?php echo get_template_directory_uri(); ?>/assets/img/knife-fork_39057.png" alt="">
			<h3>Heathly <br> Walking dinner</h3>
			</div>
			
			</div>
		
		</section>
		
			 
		
	</section>
	
	<section class="section6">
	
		<h1 class="videos">VIDEOS</h1>
		<hr align="center" width="10%" color=#615858 size="1">
		
		
		<div class="ligne1">
		<iframe  src="https://www.youtube.com/embed/RoHPDSCALzo" frameborder="0" allowfullscreen></iframe>
			<iframe  src="https://www.youtube.com/embed/zXnapAX1RiU" frameborder="0" allowfullscreen></iframe>
		</div>
		
		
		
	</section>
	
	<section class="section66">
	<iframe  src="https://www.youtube.com/embed/RoHPDSCALzo" frameborder="0" allowfullscreen></iframe>
		<h3><strong>Construction<br>de la valeur<br>des légumineuse</strong><br>Marie-Benoit Magrini</h3>
		<iframe  src="https://www.youtube.com/embed/zXnapAX1RiU" frameborder="0" allowfullscreen></iframe>
		<h3><strong>Vers une éducation<br>agri-alimentaire</strong><br>Julie Le Gall</h3>
		
		<iframe  src="https://www.youtube.com/embed/RoHPDSCALzo" frameborder="0" allowfullscreen></iframe>
		<h3><strong>L'agriculture urbaine,<br> vitrinede la modernité</strong><br>Florent Quellier</h3>
		<iframe  src="https://www.youtube.com/embed/zXnapAX1RiU" frameborder="0" allowfullscreen></iframe>
		<h3><strongRéinventer le lien entre<br>citadins et agriculteurs</strong><br>Nicolas Bricas</h3>
		
	
	</section>
	
	<section class="section7">
	
		<h1 class="actus">ACTUS</h1>
		<hr align="center" width="10%" color=#615858 size="1">
		
		
		<div class="grid">
			<div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/image1.png" alt="">
				<h3>ville & agriculture: <br> rapprochement ou <br> distanciation</h3>
				<p>cette année,les 11e <br>Rencontres de la fondation<br>Louis Bonduelle se derouleront<br>le12 juin...</p>
				<button name="button">Lire la suite</button>
				<p>4 october 2019</p>	
			</div>
			<div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/image2.png" alt="">
				<h3>In role dans la transition vers<br>  des comportements durables</h3>
				<p>Les activites de la fondation <br>louis bonduelle visent à<br>sensibiliser ses différents publics ...</p>
				
				<button name="button">Lire la suite</button>
				<p>4 october 2019</p>	
			</div>
			<div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/image3.png" alt="">
				<h3>Quand la lutte contre le<br> gaspillage alimentaire sert la <br> lutte contre la faim</h3>
				<p> En outaouais (quebes, <br>Canada), des organismes anti-<br>gaspiallages</p>
				<button name="button">Lire la suite</button>
				<p>4 october 2019</p>	
			</div>
			<div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/image4.png" alt="">
				<h3>Légumineuse et légume: <br> quelles différences </h3>
				<p>Qu'est ce qu'une légumineuse ? <br>Quels sont leurs atouts...</p>
				<button name="button">Lire la suite</button>
				<p>4 october 2019</p>	
			</div>
		</div>
		
		
	</section>
	<section class="section9">
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image5.png">
    </div>
</section>
	
<?php
  }
}
?>

</div>

<?php get_footer(); ?>