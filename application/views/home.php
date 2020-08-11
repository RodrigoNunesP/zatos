		<header>			
			<div class="container">
				<div class="slider-container">
					<div class="intro-text">
						<div class="intro-lead-in">Desenvolvedor</div>
						<div class="intro-heading">Avaliação</div>
						<a href="<?php echo base_url(); ?>restrict" class="page-scroll btn btn-xl">Login</a>
					</div>
				</div>
			</div>
        </header>
		
		<section id="chat">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 class="fa fa-comments">Questão 13: Chat</h2>
							<br>
							<a id="btn_chat" class="btn btn-primary"><i class="fa fa-comments" aria-hidden="true">&nbsp;&nbsp;Abrir Chat</i></a> 
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="questao1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 class="fa fa-file-word-o"> Questão 1:</h2>
							<br>
							<h5><strong>Como os padrões MVP, MVC e MVVM se relacionam? Quando eles são apropriados?</strong></h5>
							<p>São modelos de padrões arquitetônicos parecidos onde se mantém distintas as camadas como a modelagem de dados na Model (M), a camada de interface com o usuário chamada View (V) e entre essas camadas a lógica e as regras de negócios, representado pela controller (C) no padrão MVC, pela camada de apresentação presenter no padrão MVP e por fim representado pela camada View Model (VM) no padrão MVVM.
								Tanto o modelo MVP quanto o MVVM são derivados do MVC. O MVC é mais apropriado para aplicações menores enquanto os outros dois são direcionados a plicações especialistas mais robustas. A principal diferença entre MVP e MVVM é que a MVP é mais indicada para aplicações que necessitam mais interação com usuário uma vez que sua camada de negócios tem uma acoplagem melhor com a view. Do contrário, a MVVM é mais indicada a aplicações com pouca ou nenhuma interação com a view de usuário justamente porque a camada de negócios View  Model ter esta característica de ser fracamente acoplada com a interface do usuário.
</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="questao2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 class="fa fa-file-word-o"> Questão 2:</h2>
							<br>
							<h5><strong>Quais os princípios da programação orientada a objeto</strong></h5>
							<p>Existem quatro princípios básicos na programação orientada a objetos: Polimorfismo, herança, abstração e encapsulamento.

Polimorfismo diz respeito a capacidade de uma ou mais classes derivadas de uma superclasse poder instanciar e realizar tarefas distintas com o mesmo método desta superclasse.

Herança diz respeito capacidade de uma subclasse tem de estender características, comportamento e atributos de uma classe acima.

Abstração é uma característica reunindo métodos e atributos na forma de um classe representativa.

Encapsulamento diz respeito a proteção de objetos impossibilitando a um usuário externo acessar as regras de negócio ficando sujeito somente ao resutado do processamento delas.
</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="questao3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 class="fa fa-file-word-o"> Questão 3:</h2>
							<br>
							<h5><strong>O que é SCRUM?</strong></h5>
							<p>É um framework para gerenciamento de projetos que pontua processos de desenvolvimento denominado ”desenvolvimento ágil” que de uma forma geral encadeia técnicas, métodos e processos propondo um levantamento rápido do que precisa ser desenvolvido em sprints de desenvolvimento, envolvendo a produção do código e testes de validação do mesmo - em um curto espaço de tempo, para garantir e pontuar o andamento do desenvolvimento do projeto. Esse método de trabalho é focado fortemente no gerenciamento do projeto em si.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="questao4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 class="fa fa-file-word-o"> Questão 4:</h2>
							<br>
							<h5><strong>Na sua opinião, o que torna seguro uma sessão autenticada entre usuário e o software?</strong></h5>
							<p>Geralmente um módulo de sessão em PHP não garante que a informação armazenada em uma sessão seja visualizada apenas pelo usuário que a criou. Para proteger a confidencialidade da sessão, medidas adicionais tem que observadas, tais como: habilitação de cookies, implementação de SSL/TLS no servidor da aplicação WEB. São um começo de boas práticas de segurança. É importante observar também as especificidades de gerenciamento de sessões inerentes a cada linguagem e as opções de configuração disponíveis. Por vezes a implementação de barreira tornarão a vida do usuário menos natural no sentido de utilização, mas consequentemente mais segura.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="questao5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 class="fa fa-file-word-o"> Questão 5:</h2>
							<br>
							<h5><strong>É possível utilizar mysql_query na versão 7.2 do PHP? Se sim, escreva um exemplo de realizar uma consulta no banco de dados MySQL, se não, informe como utilizar e faça um exemplo.</strong></h5>
							<p>
							A resposta é Não. </br>
							A versão 7 do PHP removeu a extensão MySQL.</br>
							Contudo há uma forma de utilizar no caso de uma migração de código para as novas versões do PHP. O correto seria migrar o código para PDO ou mysqli.
							
							<p>
							Como era:</br>
							$ connection = mysql_connect ('host', 'nome de usuário', 'senha', new_link, flags); </br>
							$ database = mysql_select_db ('banco de dados', $ link);</br>
							</p>
							<p>
							Nova Forma:</br>
							$ connection = mysqli_connect ('host', 'nome de usuário', 'senha', 'banco de dados', 'porta', 'socket');</br>
							$ database = mysqli_select_db ($ link, 'banco de dados');
							<p>

							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="questao6">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 class="fa fa-file-word-o"> Questão 6:</h2>
							<br>
							<h5><strong>Descreva os serviços necessários para uma arquitetura web que dê suporte a um sistema desenvolvido em PHP:</strong></h5>
							<p>A arquitetura para rodar uma aplicação PHP é comumente chamada de Cliente-Servidor. Do lado do cliente são feitas as requisições por meio de um browser utilizando linguagens de marcação como HTML, Javascript e afins. Do lado do servidor a linguagem PHP roda sobre um servidor-web apache moldando acessos um banco de dados (diversos), realizando transações caracterizadas por regras e modelos de negócios.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="questao10">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 class="fa fa-file-word-o"> Questão 10:</h2>
							<br>
							<h5><strong>Comente a função passada informando o que faz e retorna:</strong></h5>
							<p>A função valida se o nome de classe passado existe na aplicação. Testa se o arquivo da classe já existe com ”is_file” e a instrução require_once fará o include da instância caso esta já não tenha sido requerida antes.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="skills">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2 class="fa fa-file-word-o"> Skills</h2>
							<br>
							<p>Conhecimento e habilidades em ferramentas e linguagens
								Desenvolvimento orientada objetos, PHP 5.6, PHP 7.0, Padrão MVC, Framework, JavaScript, HTML, CSS,
								AJAX, JSON, jQuery, Repositórios versionamento GIT, SVN, Servidor Apache, Banco de dados relacionais,
								Diagramas e práticas da UML, Structured Query Language (SQL), Moodle, Wordpress, Metodologias ágeis
								Scrum/Kanban.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Contato</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h3>Rodrigo Nunes Pinheiro da Silva</h3>
						<p><i class="fa fa-envelope"></i> rodrigo.tche.rn@gmail.com</p>
						<p><i class="fa fa-phone"></i> 11 997051533</p>
					</div>
				</div>
			</div>
		</section>
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>

<!-- modal chat -->

<div id="modal_chat" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">CHAT</h4>
      </div>
      <div class="modal-body">
		<div class="col-sm-4 col-sm-offset-4 frame">
			<ul></ul>
				<div>
					<div class="msj-rta macro">                        
						<div class="text text-r" style="background:whitesmoke !important">
							<input class="mytext" placeholder="Type a message"/>
						</div> 
					</div>
					<div style="padding:10px;">
						<span class="glyphicon glyphicon-share-alt"></span>
					</div>                
				</div>
			</div> 
		</div>
    </div>
  </div>
</div>

