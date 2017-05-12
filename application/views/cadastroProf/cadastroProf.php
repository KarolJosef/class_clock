	<div id="content" class="col-md-10">
		
		<!-- Form de vizualiza��o do cadastro do professor -->
		<?= form_open('Professor/cadastro') ?>
			<div class="row">
				<div class="col-md-12">
					<h1>Visualizar cadastro</h1>
				</div>
			</div>
			
			<fieldset disabled>
				<div class="row">
					<div class="form-group col-md-6">
						<label>Nome</label>
						<?= form_input('','',array('class'=>'form-control')) ?>
					</div>
				</div>
											
				<div class="row">
					<div class="form-group col-md-2">
						<label>Matr�cula</label>
						<?= form_input('','',array('class'=>'form-control')) ?>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-4">
						<label>Email</label>
						<?= form_input('','',array('class'=>'form-control')) ?>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-6">
						<table id="lecionarTable" class="table table-striped">
							<thead>
								<tr>
									<th>Disciplinas que pode lecionar</th>
								</tr>
							</thead>
							<tbody>
								<!-- Inserir o c�digo php bonito que faz esse trem funcionar -->
								<tr>
									<td>L�gica de Programa��o</td>
								</tr>
								<tr>
									<td>Estrutura de dados</td>
								</tr>
								<tr>
									<td>Redes de computadores</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-2">
						<label>Data de Nascimento</label>
						<?= form_input('','',array('class'=>'form-control')) ?>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-2">
						<label>Nivel Acad�mico</label>
						<?= form_input('','',array('class'=>'form-control')) ?>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-2">
						<label>Regime de contrato</label>
						<?= form_input('','',array('class'=>'form-control')) ?>
					</div>
				</div>
					
				<div class="row">
					<div class="form-group col-md-2">
						<input id="coordenador" type="checkbox" name="coordenador" class="form-group" value="true"/>
						<label for="coordenador">Coordenador</label>
					</div>
				</div>
			</fieldset>
		<?= form_close() ?>
	</div><!--Fecha content-->
</div><!--Fecha container-fluid-->