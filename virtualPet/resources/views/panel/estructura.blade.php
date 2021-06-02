<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>{{ config('app.name', 'Virtual Pet') }} - @yield('title')</title>
	@include('panel.cabecera')
</head>
<body>
	@yield('css')
<style>
	.navbar-dark{background: linear-gradient(45deg, #e8a01d, #ffc23a);}
	#txtBusquedaGlobal{
		background-color: transparent;
		border: none;
		color: #772a05;
	}
	#txtBusquedaGlobal::placeholder{
		text-align: right;
		color: #fff;
	}
	#txtBusquedaGlobal:focus, #txtBusquedaGlobal:hover { box-shadow: 0 0 0 0.1rem rgba(255, 255, 255, 0.25);}
	
	#divCabecera{
		background-color: #ffc623;
		padding: 5rem;
	}
	#imgCircular{
		margin-top: -7rem!important;
	}
	#primeraColumna{
		min-height: 100vh;
		background: #fff;
	}
	h1,h2,h3,h4,h5{
		color: #696969;
	}
	.table .thead-dark th {
		background-color: #2b359a;
		border-color: #242b77;
	}
	.tablaPortada{
		font-size: 0.9rem;
	}
	#cartas i{ font-size:2.7rem;	}
	.btn-outline-infocat:hover{
		color: #fff;
    background-color: #2b359a;
    border-color: #2b359a;
	}
	.btn-outline-infocat {
    color: #2b359a;
    border-color: #2b359a;
	}
	.btn.focus, .btn:focus{
		box-shadow: 0 0 0 0.2rem rgb(249 185 50)!important;
	}
	.card{
		border: 1px solid rgb(80 78 78 / 13%);
	}
	.cbp_tmtimeline {
	margin: 0;
	padding: 0;
	list-style: none;
	position: relative
}

.cbp_tmtimeline:before {
	content: '';
	position: absolute;
	top: 0;
	bottom: 0;
	width: 3px;
	background: #eee;
	left: 20%;
	margin-left: -6px
}

.cbp_tmtimeline>li {
	position: relative
}

.cbp_tmtimeline>li:first-child .cbp_tmtime span.large {
	color: #444;
	font-size: 17px !important;
	font-weight: 700
}

.cbp_tmtimeline>li:first-child .cbp_tmicon {
	background: #fff;
	color: #666
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmtime span:last-child {
	color: #444;
	font-size: 13px
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel {
	background: #f0f1f3
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
	border-right-color: #f0f1f3
}

.cbp_tmtimeline>li .empty span {
	color: #777
}

.cbp_tmtimeline>li .cbp_tmtime {
	display: block;
	width: 23%;
	padding-right: 70px;
	position: absolute
}

.cbp_tmtimeline>li .cbp_tmtime span {
	display: block;
	text-align: right
}

.cbp_tmtimeline>li .cbp_tmtime span:first-child {
	font-size: 15px;
	color: #3d4c5a;
	font-weight: 700
}

.cbp_tmtimeline>li .cbp_tmtime span:last-child {
	font-size: 14px;
	color: #444
}

.cbp_tmtimeline>li .cbp_tmlabel {
	margin: 0 0 15px 25%;
	background: #f0f1f3;
	padding: 1.2em;
	position: relative;
	border-radius: 5px
}

.cbp_tmtimeline>li .cbp_tmlabel:after {
	right: 100%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-right-color: #f0f1f3;
	border-width: 10px;
	top: 10px
}

.cbp_tmtimeline>li .cbp_tmlabel blockquote {
	font-size: 16px
}

.cbp_tmtimeline>li .cbp_tmlabel .map-checkin {
	border: 5px solid rgba(235, 235, 235, 0.2);
	-moz-box-shadow: 0px 0px 0px 1px #ebebeb;
	-webkit-box-shadow: 0px 0px 0px 1px #ebebeb;
	box-shadow: 0px 0px 0px 1px #ebebeb;
	background: #fff !important
}

.cbp_tmtimeline>li .cbp_tmlabel h2 {
	margin: 0px;
	padding: 0 0 10px 0;
	line-height: 26px;
	font-size: 16px;
	font-weight: normal
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a {
	font-size: 15px
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a:hover {
	text-decoration: none
}

.cbp_tmtimeline>li .cbp_tmlabel h2 span {
	font-size: 15px
}

.cbp_tmtimeline>li .cbp_tmlabel p {
	color: #444
}

.cbp_tmtimeline>li .cbp_tmicon {
	width: 40px;
	height: 40px;
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	font-size: 1em;
	line-height: 40px;
	-webkit-font-smoothing: antialiased;
	position: absolute;
	color: #fff;
	background: #46a4da;
	border-radius: 50%;
	box-shadow: 0 0 0 5px #f5f5f6;
	text-align: center;
	left: 20%;
	top: 0;
	margin: 0 0 0 -25px
}
.cbp_tmicon i{
	color: #fff!important;
}

@media screen and (max-width: 992px) and (min-width: 768px) {
	.cbp_tmtimeline>li .cbp_tmtime {
		padding-right: 60px
	}
}

@media screen and (max-width: 65.375em) {
	.cbp_tmtimeline>li .cbp_tmtime span:last-child {
		font-size: 12px
	}
}

@media screen and (max-width: 47.2em) {
		.cbp_tmtimeline:before {
			display: none
		}
		.cbp_tmtimeline>li .cbp_tmtime {
			width: 100%;
			position: relative;
			padding: 0 0 20px 0
		}
		.cbp_tmtimeline>li .cbp_tmtime span {
			text-align: left
		}
		.cbp_tmtimeline>li .cbp_tmlabel {
			margin: 0 0 30px 0;
			padding: 1em;
			font-weight: 400;
			font-size: 95%
		}
		.cbp_tmtimeline>li .cbp_tmlabel:after {
			right: auto;
			left: 20px;
			border-right-color: transparent;
			border-bottom-color: #f5f5f6;
			top: -20px
		}
		.cbp_tmtimeline>li .cbp_tmicon {
			position: relative;
			float: right;
			left: auto;
			margin: -64px 5px 0 0px
		}
		.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
			border-right-color: transparent;
			border-bottom-color: #f5f5f6
		}
}

.bg-green {
	background-color: #50d38a !important;
	color: #fff;
}

.bg-blush {
	background-color: #ff758e !important;
	color: #fff;
}

.bg-orange {
	background-color: #f8b832  !important;
	color: #fff;
}

.bg-info {
	background-color: #2CA8FF !important;
}
.bg-default {
	background-color: #848484 !important;
}

</style>
	@include('panel.menu')

	<div id="app">
		@yield('titulo')
		@yield('contenido')
	</div>

@include('panel.pie')

@yield('script')
<script>
  //$('.selectpicker').selectpicker();
  $('[data-toggle="tooltip"]').tooltip();

</script>

</body>
</html>