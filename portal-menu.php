<?php
  include_once("principal.php");?>
<link rel="stylesheet" href="css/style2.css">
<br><br>

 <div class="col-sm-3 col-md-3">
<br><br>
<div class="container" >
	<section id="content">
		<form action="">
			
			
			<div class="panel-heading" >
              <h1 class="panel-title" style="color: #000;">MENU</h1>
            </div>
      
			<div class="panel-body">
            <?php 
                
                if ($_SESSION['usuarioNivelAcesso']=="1"){ ?>
                    
                <div class="panel-heading">
                <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-education"></span> Portal do Administrador</a>
                        
                </h4>
                </div>
                    
                <div id="collapseOne" class="panel-collapse collapse">
                <ul>
                
                
                <li><a href="selecinaTurmaEstudante.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"> Estudante</a></li>
                <li><a href="Instrutor-listar.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"> Professor</a></li>
				<li><a href="funcionario-listar.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"> Funcionário</a></li>
                <li><a href="listarUsuarios.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"> Usuario</a></li>
                <li><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Gerenciar</a></li>
                <div id="collapseTwo" class="panel-collapse collapse">
                <ul>
                <li><a href="Detalhes_Disciplina.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"> Disciplina</a></li>
               
            </div>

                </ul>
                </div>
				
				
				
				
                    
           <?php     }
                
                ?>
				
				<?php 
                
                if ($_SESSION['usuarioNivelAcesso']=="2" ||$_SESSION['usuarioNivelAcesso']=="5"){ ?>
                    
                                 <div class="panel-heading">
                        <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-education"></span> Área administrativa</a>
                        
                </h4>
                    </div>
                    
                <div id="collapseOne" class="panel-collapse collapse">
                <ul>
                
                
                <li><a href="selecinaTurmaEstudante.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"> Estudante</a></li>
                <!--<li><a href="listarcategaria.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso'] ?>"> Categoria</a></li>-->
                <li><a href="Instrutor-listar.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"> Professor</a></li>
                <!--<li><a href="listarUsuarios.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso']  ?>"> Usuario</a></li>-->
                <li><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Gerenciar</a></li>
                <div id="collapseTwo" class="panel-collapse collapse">
                <ul>
                
                
                </ul>
                </div>
				
				
				
				
                    
           <?php     }
                
                ?>

			<?php if ($_SESSION['usuarioNivelAcesso']=="3"){?>
                 
			 <div class="panel-heading">
                        <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user"></span>  Portal do Professor</a>
                        
						</h4>
                    </div>
                    
                <div id="collapseTwo" class="panel-collapse collapse">
                <ul><li><a href="selecinaTurmaClasse.php?usuarioId=<?php echo $_SESSION['usuarioId'] ?>">Notas</a></li>
                <li><a href="#?usuarioId=<?php echo $_SESSION['usuarioId'] ?>">Exames</a></li>
                <li><a href="prepara-se.php#?usuarioId=<?php echo $_SESSION['usuarioId'] ?>">Testes Online</a></li>
        
                </ul>
                </div>
                    
                 <?php } ?>  
            <?php 
                
                if ($_SESSION['usuarioNivelAcesso']=="4"){ ?>                    
               <div class="panel-heading">
                        <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user"></span>  Portal do Estudante</a>
                        
                </h4>
                    </div>
                    
                <div id="collapseTwo" class="panel-collapse collapse">
                <ul><li><a href="verNotas.php?usuarioNivelAcesso=<?php echo $_SESSION['usuarioNivelAcesso'] ?>">Notas de Frequencia</a></li>
                <li><a href="#?usuarioId=<?php echo $_SESSION['usuarioId'] ?>">Exame</a></li>
                <li><a href="#?usuarioId=<?php echo $_SESSION['usuarioId'] ?>">Situação Financeira</a></li>
                <li><a href="prepara-se.php#?usuarioId=<?php echo $_SESSION['usuarioId'] ?>">Testes Online</a></li>
        
                </ul>
                </div>             
                    
                   <?php     }
                
                ?>
                
                <div class="panel-heading">
                <h2 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"><span class="glyphicon glyphicon-file"></span>  Personalizações</a>
                        
                </h2>
                    </div>
                <div id="collapseSeven" class="panel-collapse collapse">
                        
                 <ul><li><a href="perfil.php?login=<?php echo $_SESSION['usuarioLogin'] ?>">Dados pessoais</a></li>
                     <li><a href="senha-administrador.php?usuarioId=<?php echo $_SESSION['usuarioId'] ?>">Alterar Senha</a></li>
                                    </ul>
                                
                            </table>
                        </div>
                    </div>
                    </div>
			
		</form>
		
		
		
		
		
		
		
		
		<!-- form -->	
	</section><!-- content -->
	</div>
