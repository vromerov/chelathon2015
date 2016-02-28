


<div class="stepwizard">
	<div class="stepwizard-row setup-panel">
		<div class="stepwizard-step">
			<a href="#step-1" id="step-1-btn" type="button" class="btn btn-primary btn-circle">1</a>
			<p>Selecciona</p>
		</div>
		<div class="stepwizard-step">
			<a href="#step-2" id="step-2-btn" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
			<p>Confirma</p>
		</div>
		<div class="stepwizard-step">
			<a href="#step-3" id="step-3-btn" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
			<p>Dirección</p>
		</div>
		<div class="stepwizard-step">
			<a href="#step-4" id="step-4-btn" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
			<p>A divertirse</p>
		</div>
	</div>
</div>
<form role="form">
	<div class="row setup-content" id="step-1">
		<div class="col-xs-12">
			<div class="col-md-12">
				<h3 class="color-blue text-center">Esta es la mejor cerveza que tenemos para ti:</h3>
				<br/><br/>
				<div class="clearfix"></div>
				<div  data-bind="foreach: beetCatalog()" class="clearfix">
					<div data-bind="foreach: $parent.catalogo">
						<div class="col-md-3 col-sm-4 col-xs-5 text-center beer-cont">
							<div class="beer-img">
								<img data-bind="attr:{src: $data.img}" style="height: 260px;">							
							</div>
							<div class="beer-name">
								<span data-bind="text: $data.nombre"></span>
							</div>
							<div class="beer-desc">
							<span data-bind="text: $data.descripcion"></span>
							</div>
							<div class="beer-price color-blue">
								<span data-bind="text: $data.precio"></span>
							</div>
							<div class="beer-price">
								<div class="btn-group" role="group" aria-label="Basic example">
  									<button type="button" class="btn btn-default">
  										<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
  									</button>
  									<button type="button" class="btn btn-success btn-beer-buy">
  										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			  	<!-- catalogo -->
				<div class="clearfix"></div> 
			  	<div style="margin-top: 20px">
					<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Continuar</button>
				</div>

				<br/><br/>
				<h4 class="text-center color-blue" style="margin-top: 20px;">Algo más para distrutar tu cerveza:</h4>
				<br/>
				<div class="col-md-5 text-center">
					<img src="<?=$utils['img']['michelada']?>" class="img-responsive">
				</div>
				<div class="col-md-7" style="border: solid 1px #DADADA">
					
					<span class="comparte-amigos">comparte con amigos</span>
					<span class="coparte-amigos-benef">Obtén bebidas gratis por difundir Modelo Now</span>
					<div class="col-md-12" style="padding:15px 0px">
						<div class="col-md-4 col-md-offset-2 text-center comparte-bote-gratis">
							<br/>
							Recibe un bote extra y tu amigo también en su primer compra
						</div>
						<div class="col-md-4">
							<img src="<?=$utils['img']['comparte']?>" class="img-responsive">
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	<div class="row setup-content" id="step-2">
		<div class="col-xs-12">
			<div class="col-md-12">
				
				<div class="col-md-12" style="margin-bottom: 50px;">
					<div class="col-md-2 col-md-offset-4" style="padding-top:78px;">
						<img src="<?=$utils['img']['fase_2']?>" class="img-responsive">
					</div>
					<div class="col-md-3">
						<h2>Stella Artois</h2>
						<span style="font-size: 1.3em">$94.00 <span class="color-blue">Envío gratuito</span></span>
						<hr/>
						<p>
						<span style="font-size: 2em">Tu pedido:</span><br/>
						<span style="font-size: 1.7em">12 Pack 2 Oz.</span><br/><br/>
						<button class="btn btn-success btn-lg nextBtn">Me la Llevo</button>
						<br/><br/>
						Cerveza Superior Stella Artois tiene una historia muy rica, remonta a 1366 en Lovaina, Bélgica tiene
						un aroma floral, bien equilibrado, sabor a malta fruta dulce, con un acabado suave y seco, ideal para 
						compartir con amigos en ocaciones especiales.
						</p>
						<hr/>
						<span style="font-size: 1.2em; display:block">Stella Artois hace maridaje con:</span>
						<div style="float: left; margin-right: 15px;">
							<img src="<?=$utils['img']['cacahuates']?>" class="img-responsive" style="height: 70px; margin-bottom: 3px; width: 55px;">
							<button class="btn btn-success btn-xs">Agregar</button>
						</div>
						<div style="float: left; margin-right: 15px;">
							<img src="<?=$utils['img']['chips']?>" class="img-responsive" style="height: 70px; margin-bottom: 3px; width: 55px;">
							<button class="btn btn-success btn-xs">Agregar</button>
						</div>

					</div>
				</div>
				<hr/>
				<!-- catalogo -->
				
				<div class="clearfix"></div>
				<div class="col-md-3 col-sm-4 col-xs-5 text-center beer-cont">
					<div class="beer-img">
						<img  src="http://localhost/proyectos/chelathon2015/pubweb//util/images/catalog/7.png" style="height: 260px;">							
					</div>
					<div class="beer-name">
						<span >Budweiser</span>
					</div>
					<div class="beer-desc">
					<span>12 PAck - 12 oz</span>
					</div>
					<div class="beer-price color-blue">
						<span>$67</span>
					</div>
					<div class="beer-price">
						<div aria-label="Basic example" role="group" class="btn-group">
								<button class="btn btn-default" type="button">
									<span aria-hidden="true" class="glyphicon glyphicon-download"></span>
								</button>
								<button class="btn btn-success btn-beer-buy" type="button">
									<span aria-hidden="true" class="glyphicon glyphicon-plus"></span>
								</button>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-5 text-center beer-cont">
					<div class="beer-img">
						<img  src="http://localhost/proyectos/chelathon2015/pubweb//util/images/catalog/1.png" style="height: 260px;">							
					</div>
					<div class="beer-name">
						<span >Budweiser</span>
					</div>
					<div class="beer-desc">
					<span>12 PAck - 12 oz</span>
					</div>
					<div class="beer-price color-blue">
						<span>$130</span>
					</div>
					<div class="beer-price">
						<div aria-label="Basic example" role="group" class="btn-group">
								<button class="btn btn-default" type="button">
									<span aria-hidden="true" class="glyphicon glyphicon-download"></span>
								</button>
								<button class="btn btn-success btn-beer-buy" type="button">
									<span aria-hidden="true" class="glyphicon glyphicon-plus"></span>
								</button>
						</div>
					</div>
				</div>


				<div class="col-md-3 col-sm-4 col-xs-5 text-center beer-cont">
					<div class="beer-img">
						<img  src="http://localhost/proyectos/chelathon2015/pubweb//util/images/catalog/3.png" style="height: 260px;">							
					</div>
					<div class="beer-name">
						<span >Budweiser</span>
					</div>
					<div class="beer-desc">
					<span>12 PAck - 12 oz</span>
					</div>
					<div class="beer-price color-blue">
						<span>$55</span>
					</div>
					<div class="beer-price">
						<div aria-label="Basic example" role="group" class="btn-group">
								<button class="btn btn-default" type="button">
									<span aria-hidden="true" class="glyphicon glyphicon-download"></span>
								</button>
								<button class="btn btn-success btn-beer-buy" type="button">
									<span aria-hidden="true" class="glyphicon glyphicon-plus"></span>
								</button>
						</div>
					</div>
				</div>


				<div class="col-md-3 col-sm-4 col-xs-5 text-center beer-cont">
					<div class="beer-img">
						<img  src="http://localhost/proyectos/chelathon2015/pubweb//util/images/catalog/4.png" style="height: 260px;">							
					</div>
					<div class="beer-name">
						<span >Budweiser</span>
					</div>
					<div class="beer-desc">
					<span>12 PAck - 12 oz</span>
					</div>
					<div class="beer-price color-blue">
						<span>$76</span>
					</div>
					<div class="beer-price">
						<div aria-label="Basic example" role="group" class="btn-group">
								<button class="btn btn-default" type="button">
									<span aria-hidden="true" class="glyphicon glyphicon-download"></span>
								</button>
								<button class="btn btn-success btn-beer-buy" type="button">
									<span aria-hidden="true" class="glyphicon glyphicon-plus"></span>
								</button>
						</div>
					</div>
				</div>

				


			</div>
		</div>
	</div>
	
	<div class="row setup-content" id="step-3">
		<div class="col-xs-12">
			<div class="col-md-12 text-center">
				<img src="<?=$utils['img']['pago']?>">
				<button class="btn btn-success btn-lg nextBtn">Quiero mi Chelita</button>
			</div>

		</div>
	</div>

	<div class="row setup-content" id="step-4">
		<div class="col-xs-12">
			<div class="col-md-12 text-center">
				<a href="#" data-toggle="modal" data-target="#myModalVip">
					<img src="<?=$utils['img']['vip']?>">
				</a>
				<a href="#" data-toggle="modal" data-target="#myModal">
					<img src="<?=$utils['img']['beneficios']?>">
				</a>
			</div>
		</div>
	</div>
</form>





