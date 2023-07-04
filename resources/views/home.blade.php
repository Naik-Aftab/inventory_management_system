@extends('layouts.master')

@section('top')
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ \App\User::count() }}</h3>

                <p>System Users</p>
            </div>
            <div class="icon">
                <i class="fa fa-user-secret"></i>
            </div>
            <!-- <a href="/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ \App\Category::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Category</p>
            </div>
            <div class="icon">
                <i class="fa fa-list"></i>
            </div>
            <!-- <a href="{{ route('categories.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ \App\Product::count() }}</h3>
                <p>Product</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <!-- <a href="{{ route('products.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ \App\Customer::count() }}</h3>

                <p>Customer</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <!-- <a href="{{ route('customers.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

        </div>
    </div>
    <!-- ./col -->
</div>
<!-- Log on to codeastro.com for more projects! -->


<div class="row">
    
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{ \App\Supplier::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Supplier</p>
            </div>
            <div class="icon">
                <i class="fa fa-signal"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

            <!-- <a href="{{ route('suppliers.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon">
            <div class="inner">
                <h3>{{ \App\Product_Masuk::count() }}</h3>

                <p>Total Purchase</p>
            </div>
            <div class="icon">
                <i class="fa fa-cart-plus"></i>
            </div>
            <!-- <a href="{{ route('productsIn.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ \App\Product_Keluar::count()  }}</h3>

                <p>Total Outgoing</p>
            </div>
            <div class="icon">
                <i class="fa fa-minus"></i>
            </div>
            <!-- <a href="{{ route('productsOut.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

        </div>
    </div>
    <!-- ./col -->
    <div id="container" class=" col-xs-6"></div>
</div>

<div class="container">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                
                ['Task', 'Count'],
                ['System Users', <?php echo \App\User::count(); ?>],
                ['Category', <?php echo \App\Category::count(); ?>],
                ['Product', <?php echo \App\Product::count(); ?>],
                ['Customer', <?php echo \App\Customer::count(); ?>],
                ['Supplier', <?php echo \App\Supplier::count(); ?>],
                ['Total Purchase', <?php echo \App\Product_Masuk::count(); ?>],
                ['Total Outgoing', <?php echo \App\Product_Keluar::count(); ?>]
            ]);

            var options = {
                title: 'Visual Statistics',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</div>
@endsection

@section('top')
@endsection
