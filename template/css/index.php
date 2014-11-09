<?php get_header(); ?> 


    <div class="row">
          <div class="span12">
               <!-- cuerpo
    ================================================== -->
                  <section class="margen">
                      <div class="row-fluid">
                      <!--slide-->
                      <div class="span9">
    <div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
     <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
     <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
<?php   

	$args = array(
	'type' => 'noticias',
	'orderby' => 'name',
	'order' => 'ASC',
	'taxonomy' => 'category');
	$categories = get_categories( $args );
	$i = 0;
	foreach( $categories as $category ) {

	$myposts = get_posts(array(
					'showposts' => 1,
					'post_type' => 'noticias',
					'orderby' => 'date',
					'order' => 'DESC',
					'tax_query' => array(
						array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => $category->slug)
					))
				);
				
     foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<div class="<?php if($i == 0 ){ echo 'active'; }?> item"><?php echo get_the_post_thumbnail( $page->ID, 'slider_thumbs' ); ?>
        <div class="carousel-caption">
                      <h4 class="title-<?php echo sanitize_title($category->name);?>"><a href="#"><?php  the_title();  ?></a></h4>
                      <p class="margen2"><?php echo wp_trim_words($post->post_content, 29 ); ?><h6><?php the_author(); ?></h6></p>
                    </div>
    </div>
<?php endforeach; 
$i++;
wp_reset_postdata();
}
?>
   
    </div>
    </div>                          </div>
                       <!--cdr-->
                      <div class="span3" id="categoria2">
                       <!-- deporte -->
            <a href="#">
            <div class="categoria">
            <img src="<?php bloginfo('template_url')?>/img/categorias/6.jpg" />
            <h6 class="deporte">Deporte</h6>
            </div>
                <div class="parrafo">Entrevista - Fernán Altuve-Febres </div>
                <p class="autor">Constitucionalista y Analista Internacional</p>
<p class="">Sobre la abdicación del rey de España, Juan Carlos I de Borbón.</p>
                             <div class="clearfix"></div>
       </a>     
                      </div>
                      </div>
          <!-- categorias -->
                       <div class="row-fluid" id="categoria">
                       <!-- uno -->

                           <div class="span25"><a href="#">
            <div class="categoria">
            <img src="<?php bloginfo('template_url')?>/img/categorias/1.jpg" />
            <h6 class="politica">política</h6>
            </div>
                <div class="parrafo">Entrevista con Rosa María Palacios</div>
                <p class="">“Expulsada por ser excesivamente independiente”, canta el perfil de Rosa María Palacios en Twitter...</p>
                <p class="autor">Gonzalo Ramirez</p>
                <div class="clearfix"></div>
            </a></div>

                       <!-- dos -->
            <div class="span25"><a href="#">
            <div class="categoria">
            <img src="<?php bloginfo('template_url')?>/img/categorias/2.jpg" />
            <h6 class="cultura">Cultura</h6>
            </div>
                <div class="parrafo">A cinco años del Baguazo</div>
                <p class="">No existen razones suficientes para sospechar que los conflictos sociales se reducirán o se extinguirán.</p>
                <p class="autor">JOSÉ MARIO AZALDE</p>
                             <div class="clearfix"></div>
       </a>     </div>

                       <!-- tres -->
       
                <div class="span25">     <a href="#">
            <div class="categoria">
            <img src="<?php bloginfo('template_url')?>/img/categorias/3.jpg" />
            <h6 class="nacional">Nacional</h6>
            </div>
                <div class="parrafo">Simplifiquen</div>
                <p class="">Cuando uno viaja y lo hace por trabajo (universitario, en mi caso), uno se da cuenta de que hay países cómodos y otros, incómodos.</p>
                <p class="autor">ENRIQUE BANÚS</p>
                                    <div class="clearfix"></div>
            </a></div>

                       <!-- cuatro -->

    <div class="span25"><a href="#">
            <div class="categoria">
            <img src="<?php bloginfo('template_url')?>/img/categorias/4.jpg" />
            <h6 class="mundo">Mundo</h6>
            </div>
                <div class="parrafo">Proveedores</div>
                <p class="">Dime cómo los tratas y te diré cómo eres...</p>
                <p class="autor">ALEJANDRO FONTANA</p>
                        <div class="clearfix"></div>
            </a></div>

                       <!-- cinco -->
<div class="span25"><a href="#">
            <div class="categoria">
            <img src="<?php bloginfo('template_url')?>/img/categorias/5.jpg" />
            <h6 class="economia">Economia</h6>
            </div>
                <div class="parrafo">Proveedores</div>
                <p class="">Dime cómo los tratas y te diré cómo eres...</p>
                <p class="autor">ALEJANDRO FONTANA</p>
                    <div class="clearfix"></div>
           </a> </div>


                     </div>
                  </section>


</div>
              </div>

    <div class="row">
          <div class="span12">
               <!-- Auspiciadores -->
                       <aside class="margen sombra">
                           <div class="row-fluid">
                <div class="span3"><img src="<?php bloginfo('template_url')?>/img/auspiciador/_tribuna_universitaria.jpg" /></div>
                <div class="span3"><img src="<?php bloginfo('template_url')?>/img/auspiciador/_recorrido_gourmet.jpg" /></div>
                <div class="span3"><img src="<?php bloginfo('template_url')?>/img/auspiciador/_tech.jpg" /></div>
                <div class="span3"><img src="<?php bloginfo('template_url')?>/img/auspiciador/_life.jpg" /></div>
</div>
                        </aside>
</div></div>

    <div class="row">
          <div class="span12">
               <!-- publicidad horizontal -->
                       <section class="margen">
                           <div class="row-fluid">
                <a href="#" class="span12 phorizontal">1043 x 40</a>
</div>
                        </section>
</div></div>

    <div class="row">
        <div class="span12">
        <!-- COLUMNAS -->
        <section class="margen">
        <div class="row-fluid">
            <!-- COLUMNISTAS -->
        <div class="span3">
            <div class="sombrac" id="columnistas">
                <h2><small>Columnistas</small></h2>
                <?php 
                    // Iniciar variables
                    $usuarios       = get_users(array('orderby'=>'display_name','role'=>'author'));
                    $i              = 1;
                ?>
                <?php foreach($usuarios as $usuario): ?>
                    <div class="margen2">
                        <?php 
                            // Si el columnista es PAR = imgder si es IMPAR = imgizq
                            $img_posicion = ( $i % 2 == 0 ) ? 'imgder' : 'imgizq';

                            $i++;
                        ?>
                        <span class="span12">
                            <img class="<?= $img_posicion ?>" src="<?= bloginfo('template_url').'/img/columnistas/'.$usuario->user_nicename.'.jpg'  ?>" />
                            <h6><?= $usuario->display_name ?></h6>
                            <?= $usuario->get('bio') ?>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                <?php endforeach ?>
            </div>
            <?= json_encode($usuarios) ?>
            <!-- banner -->
            <div class="row-fluid">
                <a href="#" class="span12 banner101">262 x 101</a>
            </div>
            <!-- banner -->
            <!-- SABIAS QUE -->
        <div class="row-fluid">
        <div class="span12 centrar margen banner">
        <h4>¿Sabias que?</h4>
            <p class="margen2">¿Sabía usted que en 1969 un partido de las eliminatorias mundialistas desató una guerra entre Honduras y El Salvador? Murieron más de 2000 personas.
                <div class="clearfix"></div><img src="<?php bloginfo('template_url')?>/img/slide2.jpg" /></p>
            <div class="clearfix"></div>
        </div>
        </div>

            <!-- banner 2 -->
        <div class="row-fluid">
        <a href="#" class="span12 banner101">
        262 x 101
        </a>
        </div>
            <!-- la frase -->
        <div class="row-fluid">
        <div class="span12 centrar margen banner">
        <h4>LA FRASE</h4>
            <p class="margen2">“Lo que sabemos es una gota de agua, lo que ignoramos es el océano.” <div class="clearfix"></div><img src="<?php bloginfo('template_url')?>/img/slide2.jpg" /></p>
            <h6>ISAAC NEWTON</h6>
        
            <div class="clearfix"></div>
        </div>
        </div>

</div>
            
        <!-- LO ULTIMO -->
        <div class="span5" id="ultimo">
            <h3>Lo Último</h3>
            <div class="ultimo">
            <div class="margen2"><a href="#">
                <span class="span12 cuadro"><img src="<?php bloginfo('template_url')?>/img/news/new1.jpg" />
                <h6 class="cat economia">ECONOMIA</h6>
                    <span>20.3.14</span>
                    <h6>A cinco años del Baguazo</h6>
                    <p>Cuando uno viaja y lo hace por trabajo (universitario, en mi caso), uno se da cuenta de que hay países cómodos y otros, incómodos...</p>
                    <p class="autor">Enrique banús</p>
                   </span> <div class="clearfix"></div>
            </a></div>
            <hr />
            <div class="margen2"><a href="#">
                    <span class="span12 cuadro"><img src="<?php bloginfo('template_url')?>/img/news/cultura.jpg" />
                    <h6 class="cat cultura">CULTURA</h6>
                        <span>20.3.14</span>
                        <h6>A cinco años del Baguazo</h6>
                        <p>Cuando uno viaja y lo hace por trabajo (universitario, en mi caso), uno se da cuenta de que hay países cómodos y otros, incómodos...</p>
                        <p class="autor">Enrique banús</p>
                       </span> <div class="clearfix"></div>
                </a></div>
            <hr />
            <div class="margen2"><a href="#">
                <span class="span12 cuadro"><img src="<?php bloginfo('template_url')?>/img/news/deporte.jpg" />
                <h6 class="cat deporte">DEPORTE</h6>
                    <span>20.3.14</span>
                    <h6>A cinco años del Baguazo</h6>
                    <p>Cuando uno viaja y lo hace por trabajo (universitario, en mi caso), uno se da cuenta de que hay países cómodos y otros, incómodos...</p>
                    <p class="autor">Enrique banús</p>
                   </span> <div class="clearfix"></div>
            </a></div>
            <hr />
             <div class="margen2"><a href="#">
                <span class="span12 cuadro"><img src="<?php bloginfo('template_url')?>/img/news/new1.jpg" />
                <h6 class="cat economia">ECONOMIA</h6>
                    <span>20.3.14</span>
                    <h6>A cinco años del Baguazo</h6>
                    <p>Cuando uno viaja y lo hace por trabajo (universitario, en mi caso), uno se da cuenta de que hay países cómodos y otros, incómodos...</p>
                    <p class="autor">Enrique banús</p>
                   </span> <div class="clearfix"></div>
            </a></div>
            <hr />
            <div class="margen2"><a href="#">
                <span class="span12 cuadro"><img src="<?php bloginfo('template_url')?>/img/news/cultura.jpg" />
                <h6 class="cat cultura">CULTURA</h6>
                    <span>20.3.14</span>
                    <h6>A cinco años del Baguazo</h6>
                    <p>Cuando uno viaja y lo hace por trabajo (universitario, en mi caso), uno se da cuenta de que hay países cómodos y otros, incómodos...</p>
                    <p class="autor">Enrique banús</p>
                   </span> <div class="clearfix"></div>
            </a></div>
            <hr />
            <div class="margen2"><a href="#">
                <span class="span12 cuadro"><img src="<?php bloginfo('template_url')?>/img/news/deporte.jpg" />
                <h6 class="cat deporte">DEPORTE</h6>
                    <span>20.3.14</span>
                    <h6>A cinco años del Baguazo</h6>
                    <p>Cuando uno viaja y lo hace por trabajo (universitario, en mi caso), uno se da cuenta de que hay países cómodos y otros, incómodos...</p>
                    <p class="autor">Enrique banús</p>
                   </span> <div class="clearfix"></div>
            </a></div>
            <hr />
            <div class="margen2"><a href="#">
                <span class="span12 cuadro"><img src="<?php bloginfo('template_url')?>/img/news/deporte.jpg" />
                <h6 class="cat deporte">DEPORTE</h6>
                    <span>20.3.14</span>
                    <h6>A cinco años del Baguazo</h6>
                    <p>Cuando uno viaja y lo hace por trabajo (universitario, en mi caso), uno se da cuenta de que hay países cómodos y otros, incómodos...</p>
                    <p class="autor">Enrique banús</p>
                   </span> <div class="clearfix"></div>
            </a></div>
            <hr />
        </div>
            </div>

        <!-- editorial -->
        <div class="span4"  id="editorial">
            <h2><img src="<?php bloginfo('template_url')?>/img/lucidez.jpg" />
                <br />Editorial</h2>
            <div class="sombrac">
                <div class="margen2">
            <h5>No a la Violencia</h5>
                <p class="edi">“Ayer, que celebramos en varias latitudes el día del padre, se publicó en el diario “El Comercio” una encuesta elaborada por IPSOS...”</p>
                <span>20.3.14</span>
            <div class="clearfix"></div>
            </div>
            </div>

                    <div class="row-fluid">
        <a href="#" class="span12 banner300">
        300 x 188
        </a>
        </div>
            <!-- SABIAS     QUE -->
        <div class="row-fluid">
        <div class="span12 centrar margen banner">
        <h4>Encuesta</h4>
            <p class="margen2">¿Estás de acuerdo con la propuesta de la unión civil?</p>
            <button class="span5 offset1">Si</button>
            <button class="span5">No</button>
            <button class="span5 offset1">Indeciso</button>
            <button class="span5">No opino</button>
            <div class="clearfix"></div>
        </div>
        </div>

                                <div class="row-fluid">
        <a href="#" class="span12 banner300">
        300 x 188
        </a>
        </div>

                                <div class="row-fluid">
       
<a href="#"><img src="<?php bloginfo('template_url')?>/img/publicidad/mundial.jpg"  class="span12"/> </a>
        </div>

        </div>
             </div>
</section>
        </div>
        
        </div></div>

    <div class="clearfix"></div>

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?> 