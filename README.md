# Ikarus Theme
===
## Table of Contents
1. [General Info](#general-info)
2. [Technologies](#technologies)
3. [Description](#description)
4. [Example of code](#example-of-code)
5. [Score in Pagespeed](#score-in-pagespeed)
6. [Installation](#installation)

## General Info
***
This Wordpress theme was created from scratch and made with the performance of a website in mind, thus the sites that implement it will be really faster.
## Technologies
***
#### A list of technologies used within this theme:
* [Underscore](https://underscores.me/)  Starter theme
* [NPM](https://www.npmjs.com/) Package manager
*  [Sass](https://sass-lang.com/) CSS preprocessor
*  [Css Grid](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout) Css Layout  
*  [Gulp](https://cdnjs.com/libraries/jquery.caroufredsel) Task automation 

## Description 
***
This theme is a Underscores based theme by automattic, creators of wordpress.com, Ikarus theme it was created with Sass for the styles, with Gulp I converted automatically this files .scss to one file css named style.css. Also Gulp was useful to get optimized images automatically too. It is used CSS grid to manage the layout in a modern and native way, without installing CSS libraries like bootstrap that could affect negatively the performance of the site.

## Example of code
***
#### CSS layout
```
.site {
	display: grid;
	grid-template-columns: auto 800px ($size__site-sidebar) auto;
	grid-template-areas: 
	"header header header header" 
		". main sidebar ." 
	"footer footer footer footer";

		.whidth-site {
			display: contents;
		}
}
```

#### PHP and Html code used for displaying page content in page.php
```
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php ikarus_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ikarus-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
```


## Score in Pagespeed 
***
###### *Theme installed in website bricolajesoluciones.com without any optimization plugin or cache 
#### mobile and desktop version respectively 
![Image text](https://ikarus-media.com/images/score-pagespeed-mobile.png)
![Image text](https://ikarus-media.com/images/score-pagespeed.png)

## Installation
***
Only just download the zip file and and install it in your wordpress website in appearance --> themes.
