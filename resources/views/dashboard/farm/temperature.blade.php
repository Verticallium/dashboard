@extends('dashboard.base')

@section('content')
	<div class="row">
        <div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="tem1-chart" height="200"></canvas>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="tem2-chart" height="200"></canvas>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="tem3-chart" height="200"></canvas>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="c-chart-wrapper" style="height:200px">
				<canvas class="chart" id="tem4-chart" height="200"></canvas>
			</div>
		</div>
	</div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/temperature.js') }}" defer></script>
@endsection
