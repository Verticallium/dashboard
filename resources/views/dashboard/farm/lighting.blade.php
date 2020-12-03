@extends('dashboard.base')

@section('content')
	<div class="row">
        <div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="light1-chart" height="200"></canvas>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="light2-chart" height="200"></canvas>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="light3-chart" height="200"></canvas>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="light4-chart" height="200"></canvas>
			</div>
		</div>
	</div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/lighting.js') }}" defer></script>
@endsection
