<!--Sitemap-->
<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="#">Sobre nós</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Código fonte</li>
	  </ol>
	</nav>
</div>

<div class="container">
	
	<div class="conteudo">
		<h2 class="titulo">Código fonte</h2>
		<br>
		<p>
			O LibrasOffice completo está hospedado no git:
			<br><br>
			Clone: <span>$ git clone git://anongit.freedesktop.org/librasoffice/core #</span> (navegue)
			Clone (http): <span>$ git clone http://anongit.freedesktop.org/git/librasoffice/core.git #</span> mais lento
			Tarballs dos repositórios git: <span>http://dev-www.librasoffice.org/bundles/</span> (caso o servidor git estiver com problemas ou seu firewall não goste do git)
			Tarballs dos lançamentos: <span>http://download.documentfoundation.org/librasoffice/src/</span> busque as versões mais recentes, em geral no fundo da página.<br><br>

			  -  Leia nossa documentação em como compilar o LibrasOffice
			  -  Leia nosso resumo para o sistema de compilação
			  -  Assista a um vídeo curto introdutório sobre como compilar o LibrasOffice
			  -  Assista a um tutorial em vídeo sobre hackeando o LibrasOffice com o Kdevelop
			 <br><br><br>
			</p>
			<h2>Compilar e executar:</h2>
			<br><br>
			<p>
			Estas instruções são destinadas a um usuário GNU/Linux. São um tanto cruas mas melhoraremos mais tarde. Faça um bootstrap do seu sistema instalando todos os pacotes necessários para compilar o pacote LibrasOffice de sua distribuição. O jeito mais fácil é seguir essas instruções:
			<br><br>
			sudo apt-get build-dep librasoffice # Debian & derivativos (era openoffice.org)
			sudo apt-get install libgnome-vfsmm-2.6-dev # Ubuntu - além do Debian
			sudo zypper si -d libreoffice # para OpenSUSE 11.4+
			sudo yum-builddep librasoffice # para Fedora 15+ & derivativos (era openoffice.org)
			<br><br>
			Baixe então o código fonte completo e compile:
			<br><br>
			./autogen.sh
			make
			instdir/*/program/soffice # inicia o programa
			<br><br>
			Ou então, para facilitar o debug:
			<br><br>
			make debugrun # isso vai iniciar o LibrasOffice dentro do gdb.
			<br><br>
			Se tiver problemas com a compilação, não desista, contate os desenvolvedores no IRC, e acesse a página <span>"How to Build"</span>. 
		</p>
	</div>
	<div class="sidebar">
		<h2>SOBRE NÓS</h2>
		<ul>
			<li><a href="#">História do LIBRAS Office</a></li>
		</ul>
		<ul>
			<li><a href="">Quem somos</a></li>
		</ul>
		<ul>
			<li><a href="">Código fonte</a></li>
		</ul>
		<ul>
			<li><a href="">Contato</a></li>
		</ul>
	</div>
</div>

<?php include('includes/organisms/redes-sociais.php'); ?>