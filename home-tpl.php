<?php /* Template Name: Tainacan.org Home */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/single_page.css'; ?>" type="text/css" media="all" />
</head>

<body <?php body_class(); ?>>
	<header class="single-page-header">
		<div class="container">
			<nav class="navigation-menu">
				<ul>
					<li><a href="#">Início</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">English</a></li>
					<li><a href="#">Funcionalidades</a></li>
					<li><a href="#">Download</a></li>
					<li><a href="#">Road Map</a></li>
					<li><a href="#">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="box-logo">
		<div class="box-logo__texto">
			<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/lgo/tainacan.png'; ?>" alt="Tainacan">
			<span>Uma plataforma<br>de repositório<br><strong>flexível e potente</strong><br>para Wordpress</span>
		</div>
	</div>

	<div class="box-video">
		<iframe src="https://www.youtube.com/embed/6q42dlcwW5g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>

	<div class="box-texto">
		<div class="box-texto__imagem">
			<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/bkg/box_janelas.png' ?>" alt="Janelas">
		</div>
		<div class="box-texto__texto">
			<p>Tainacan é uma ferramenta flexível e poderosa para WordPress que permite agestão e a publicação de coleções digitais com a mesma facilidade de se publicar posts em blogs, mas mantendo todos os requisitos de uma plataforma profissional para repositórios.</p>
		</div>
	</div>

	<div class="box-texto-simples">
		<div class="box-titulo">
			<h2>Software livre <strong>brasileiro</strong></h2>
			<p>Desenvolvido pelo Laboratório de Políticas Públicas Participativas (L3P), em parceria com o Laboratório de Pesquisa, Desenvolvimento e Inovação em Mídias Interativas (MediaLab/ UFG).</p>
		</div>

		<p>Por meio da gestão e compartilhamento de acervos, o Tainacan contribui para a preservação, difusão e popularização da produção cultural. Além de catalogar, organizar, armazenar e compartilhar documentos, é uma ferramenta flexível que se adapta de acordo com as necessidades do usuário, permitindo configurações e personalização de coleções, itens, metadados, filtros, entre outros.</p>
	</div>

	<div class="box-texto-2">
		<div class="box-texto-2__wrapper">
			<div class="box-texto-2__texto">
				<h2>Gestão e publicação</h2>
				<p>O Tainacan é composto pelo plugin, em que o usuário administrativo realiza a gestão de seu acervo, e o tema padrão, que é o modo de visualização do conteúdo criado por meio do plugin, sendo acessível para todos os tipos de usuário.</p>
			</div>
			<div class="box-texto-2__imagem">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/bkg/box_janelas2.png' ?>" alt="Janelas">
			</div>
		</div>
	</div>

	<div class="box-texto-3">
		<div class="box-texto-3__wrapper">
			<div class="box-texto-3__imagem">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/bkg/box_janelas3.png' ?>" alt="Janelas">
			</div>
			<div class="box-texto-3__texto">
				<h2>Fácil organização</h2>
				<p>O repositório é composto por Coleções. Elas são conjuntos de itens, que podem ser adicionados em massa ou individualmente, diretamente do seu computador ou por vias externas, através de importadores. É possível configurar taxonomias, metadados e filtros de acordo com a necessidade de cada coleção. Todas as atividades realizadas no plugin são registradas e listadas, sendo passíveis de autorização por moderadores.</p>
			</div>
		</div>
	</div>

	<div class="box-texto-4">
		<div class="box-texto-4__wrapper">
			<div class="box-texto-4__imagem1">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/bkg/box_janelas4.png' ?>" alt="Janelas">
			</div>
			<div class="box-texto-4__texto">
				<h2>Navegação intuitiva</h2>
				<p>A organização do Plugin Tainacan foi toda pensada para facilitar o aprendizado e uso da ferramenta, com cores como diferenciação de áreas e ícones personalisados, além dos já disponibilisados pela Google no sistema Material.</p>
			</div>
			<div class="box-texto-4__imagem2">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/bkg/box_janelas5.png' ?>" alt="Janelas">
			</div>
		</div>
	</div>

	<div class="box-texto-5">
		<div class="box-texto-5__wrapper">
			<div class="box-texto-5__imagem">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/bkg/box_janelas6.png' ?>" alt="Janelas">
			</div>

			<div class="box-texto-5__texto1">
				<h2>Metadados e Filtros</h2>
				<p>Use um padrão pré-definido de metadados ou escolha qualquer conjunto de campos que você desejar para descrever os itens de sua coleção. Além disso, escolha quais desses metadados serão utilizados como filtros (facetas) para explorar seu repositório.</p>
			</div>
			<div class="box-texto-5__texto2">
				<h2>Busca facetada</h2>
				<p>Explore sua coleção (e deixe visitantes explorarem) usando uma interface de busca facetada com filtros a sua escolha.</p>
			</div>
		</div>
	</div>

	<div class="box-texto-6">
		<div class="box-texto-6__wrapper">
			<div class="box-texto-6__texto">
				<h2>Gerencie Taxonomias</h2>
				<p>Gerencie vocabulários (controlados ou não) que podem ser compartilhados por todas as suas coleções.</p>
			</div>
			<div class="box-texto-6__imagem">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/bkg/box_janelas7.png' ?>" alt="Janelas">
			</div>
		</div>
	</div>

	<div class="box-texto-7">
		<div class="box-texto-7__wrapper">
			<h2>Temas</h2>

			<div class="box-texto-7__imagem">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/bkg/box_janelas8.png' ?>" alt="Janelas">
			</div>
		</div>

		<div class="box-texto-7__textos">
			<div class="box-texto-7__wrapper">
				<div class="box-texto-7__texto">
					<p>O Tainacan possui o seu próprio tema padrão, que o ajuda a publicar e apresentar suas coleções de um jeito bonito e eficiente, responsivo, que finciona em qualquer tamanho de tela.</p>
				</div>
				<div class="box-texto-7__texto">
					<p>Mas o uso do tema padrão não é exclusivo, o plugin Tainacan também funciona com qualquer tema WordPress. Para desenvolvedores, é fácil adicionar suporte a funcionalidades do Tainacan a um tema existente.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="box-carrossel">
		<div class="box-carrossel__wrapper">
			<h2>Cases</h2>
			<p>Conheça as interfaces desenvolvidas que utilizam o Tainacan</p>

			<ul class="carrossel-cases">
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_01.png' ?>" alt="Imagem">
						<span>Novo site da Funarte</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_02.png' ?>" alt="Imagem">
						<span>Museu Histórico Nacional</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_03.png' ?>" alt="Imagem">
						<span>Museu de Arqueologia de Itaipu</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_04.png' ?>" alt="Imagem">
						<span>Museu do Índio</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_01.png' ?>" alt="Imagem">
						<span>Novo site da Funarte</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_02.png' ?>" alt="Imagem">
						<span>Museu Histórico Nacional</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_03.png' ?>" alt="Imagem">
						<span>Museu de Arqueologia de Itaipu</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_04.png' ?>" alt="Imagem">
						<span>Museu do Índio</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_01.png' ?>" alt="Imagem">
						<span>Novo site da Funarte</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_02.png' ?>" alt="Imagem">
						<span>Museu Histórico Nacional</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/fke/carrossel_03.png' ?>" alt="Imagem">
						<span>Museu de Arqueologia de Itaipu</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="box-texto-8">
		<div class="box-texto-8__wrapper">
			<div class="box-texto-8__imagem">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/bkg/box_janelas9.png' ?>" alt="Janelas">
			</div>
			<div class="box-texto-8__texto">
				<h2>API e interoperabilidade</h2>
				<p>O Tainacan implementa uma API RESTful (de leitura e escrita) que permite que outras aplicações interajam com seu repositório.</p>
				<p>Exponha suas coleções em diferentes formatos, como Json, JsonLD, OAI-PMH. Se sua coleção utiliza um padrão personalizado de metadados, você pode mapeá-la para padrões conhecidos, como DublinCore.</p>
			</div>
		</div>
	</div>

	<div class="box-texto-9">
		<div class="box-texto-9__wrapper">
			<div class="box-texto-9__texto">
				<h2>Comunidade Open Source</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>
			</div>
			<ul class="box-texto-9__imagem-lista">
				<li>
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/ico/tags.png' ?>" alt="GitHub">
				</li>
				<li>
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/ico/documento.png' ?>" alt="Wiki">
				</li>
				<li>
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/ico/email.png' ?>" alt="Riseup">
				</li>
			</ul>
		</div>
	</div>

	<div class="box-texto-10">
		<div class="box-texto-10__wrapper">
			<ul class="box-texto-10__imagem-lista">
				<li class="estilo-1">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/ico/baixar.png' ?>" alt="Plugin Tainacan">
						<span>Plugin<br>Tainacan</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/single_page/ico/baixar2.png' ?>" alt="Tema Tainacan">
						<span>Tema<br>Tainacan</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<footer class="tainacan-footer single-page-footer">
		<div class="container-fluid">
			<div class="row tainacan-footer-info">
				<div class="col text-white font-weight-normal">
					<p class="tainacan-footer-info--blog">Media Lab - Laboratório de Pesquisa, Desenvolvimento e Inovação em Mídias Interativas<br>Rua Samambaia, Campus Samambaia - UFG, CEP 74690-900 , Goiânia - Goiás - Brasil.</p>
					<p>E-mail: tainacansuporte@gmail.com - Telefone: +55 (62) 3521-1659</p>
				</div>
				<div class="col-auto pr-0 pr-md-3 d-none d-md-block align-self-md-top">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-footer.svg' ?>" class="tainacan-footer-info--logo">
				</div>
				<div class="col-12 tainacan-powered">
					<span></span>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

	<script>
		jQuery('.carrossel-cases').slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});
	</script>
</body>
</html>
