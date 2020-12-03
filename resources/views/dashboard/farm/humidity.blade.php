@extends('dashboard.base')

@section('content')
	<div class="row">
        <div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="hum1-chart" height="200"></canvas>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="hum2-chart" height="200"></canvas>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="hum3-chart" height="200"></canvas>
			</div>
		</div>
	</div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/humidity.js') }}" defer></script>
@endsection
