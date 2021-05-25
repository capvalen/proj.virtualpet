@extends('panel.estructura')
@section('css')
<style>
	label{
		font-size: 0.9em;
		margin-bottom: 0;
	}
	p{
		margin-bottom: 1em;
		font-size:1.2em;
		font-weight: 500;
	}
	
.todo-list-wrapper .todo-indicator {
    position: absolute;
    width: 4px;
    height: 60%;
    border-radius: .4rem;
    left: .625rem;
    top: 20%;
    opacity: .6;
    transition: opacity .2s;
}

.widget-content .widget-content-wrapper {
    display: flex;
    flex: 1;
    position: relative;
    align-items: center;
		padding: 0 1rem ;
}
.bg-warning {
    background-color: #f5b32d!important;
}
#divUltimasDosis p{
	margin-bottom: 0;
	line-height: 1px;
}
</style>
@endsection

@section('title') Mascotas @endsection

@section('contenido')
<div class="container-fluid" id="app">
	
	<div class="col-lg-10 mx-auto">
	
		<h2 class="my-3"><i class="icofont-paw"></i> Perfil del Paciente</h2>
		<div class="card">
			<div class="card-body">
				<div class="row ">
					
					<div class="col">
						<h4 class="text-center">LUCKY</h4>
						<img src="{{asset('images/mascotas_perfil/1.jpg')}}" class="img-fluid" alt="">
					</div>
					<div class="col">
						<h4 style="font-weight: 400"><i style="font-size: 2rem" class="icofont-heartbeat"></i> Información General</h4>
						<div class="row">
							<div class="col">
								<label for="">Código</label>
								<p><a class="text-decoration-none" href="{{route('mascotas.historial', 'PET-52')}}}">PET-35</a></p>
							</div>
							<div class="col">
								<label for="">N° Microchip:</label>
								<p>MIF-004220</p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<label for="">Cumpleaños <small>en 12 días</small></label>
								<p>22/6/2020</p>
							</div>
							<div class="col">
								<label for="">Edad</label>
								<p>1 año y 10 días</p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<label for="">Especie</label>
								<p>Canino</p>
							</div>
							<div class="col">
								<label for="">Raza</label>
								<p>Cocker</p>
							</div>
							<div class="col">
								<label for="">Color</label>
								<p>Negro </p> 
							</div>
						</div>
						<div class="row">
							<div class="col">
								<label for="">Peso</label>
								<p>15.8 Kg</p>
							</div>
							<div class="col">
								<label for="">Sexo</label>
								<p>Macho <span class="icon-male"></span></p> 
							</div>
							<div class="col">
								<label for="">Castrado</label>
								<p><i class="icofont-close"></i> No</p>
							</div>
							
						</div>
						<div class="row">
							<div class="col">
								<label for="">Reproductor</label>
								<p><i class="icofont-check"></i> Si</p>
							</div>
							<div class="col">
								<label for="">Adoptado</label>
								<p><i class="icofont-close"></i> No</p>
							</div>
							<div class="col">
								<label for="">Desparasitado</label>
								<p><i class="icofont-check"></i> Si</p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<label for="">Señas particulares</label>
									<p><i class="icofont-check"></i> Si</p>
							</div>
						</div>
						
					</div>
					<div class="col">
						<h4 style="font-weight: 400"><i class="icofont-user-alt-1"></i> Propietario</h4>
						<div class="row">
							<div class="col-md-3">
								<label for="">D.N.I.</label>
								<p><a class="text-decoration-none" href="#!">44475064</a></p>
							</div>
							<div class="col">
								<label for="">Nombres.</label>
								<p><a class="text-decoration-none" href="#!">Pariona Valencia, Carlos Alex</a></p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<label for="">Cumpleaños <small>en 3 meses</small></label>
								<p>22/8/2020</p>
							</div>
							<div class="col">
								<label for="">Edad</label>
								<p>41 años</p>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<label for="">Celular</label>
								<p>977692108</p>
							</div>
							
							
						</div>
						<div class="row">
							<div class="col">
								<label for="">Dirección</label>
								<p>Av. Huancavelica 435 - El Tambo - Huancayo</p>
							</div>
							
						</div>
					</div>
	
				</div>
			</div>
		</div>
		
		<h5 class="mt-3"><i class="icofont-computer"></i> Sistema</h5>
		<div class="row">
			<div class="col col-md-5">
				<div class="card">
					<div class="card-body">
						<p>Última:</p>
						<div class="row row-cols-3 px-3" id="divUltimasDosis">
							<div><p>Desparasitación</p> <br><span>Nunca</span></div>
							<div><p>Vacuna</p> <br><span>hace 1 mes <br> <small>21/04/2021</small></span></div>
							<div><p>Antipulgas</p> <br><span>Nunca</span></div>
						</div>
					</div>
				</div>

				<div class="card mt-3">
					<div class="card-body">
						<div class="row row-cols-1 row-cols-md-3">
							<div class="col">
								<label for="">Registrado el</label>
								<p>11/03/2020 5:41 pm</p>
							</div>
							<div class="col">
								<label for="">Registrador</label>
								<p><a href="#!">Antonio B.</a></p>
							</div>
							<div class="col">
								<button class="btn btn-outline-primary btn-lg"><i class="icofont-plus"></i> Nota nueva</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						
						<h5><i style="font-size:1.5rem;" class="icofont-newspaper"></i>  Notas:</h5>
						<ul class="todo-list-wrapper list-group list-group-flush">
							<li class="list-group-item">
								<div class="todo-indicator bg-warning"></div>
								<div class="widget-content ">
									<div class="widget-content-wrapper">	
										<div class="col">
											<div>Requiere intervención quirúrgica <div class="badge badge-success ml-2"> Urgente </div> </div>
											<div class="widget-subheading"><i>Escrito por: Manuel Santiago López</i></div>
											<div class="text-muted"><i class="icofont-clock-time"></i> <small>12/15/2021 2:31 am</small></div>
										</div>
										<div class="col-auto">
											<div>
												<a href="#!" class="text-muted text-decoration-none mx-1" style="font-size: 1.2rem"><i class="icofont-brush"></i></a>
												<a href="#!" class="text-muted text-decoration-none mx-1" style="font-size: 1.2rem"><i class="icofont-trash"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							
							</li>
							
						</ul>	
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5><i style="font-size:1.5rem;" class="icofont-newspaper"></i>  Historia clínica</h5>
						
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
@endsection