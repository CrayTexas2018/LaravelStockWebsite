@extends('Templates.Master')

@section('title')
    Home | Stock Tracker
@endsection

@section('content')
    <div class="col-md-6">
        <h4>Manage Your Portfolio In One Spot</h4>

        <p>Take advantage of Stock Tracker's powerful resources to stay one step ahead of the market.</p>

        <div class="table">
            <table class="table-hover table table-striped table-bordered table-responsive">
                <tr><td>Build a portfolio</td></tr>
                <tr><td>Read news related to your securities</td></tr>
                <tr><td>Perform in-depth research about different stocks</td></tr>
                <tr><td>Take your portfolio to the cloud</td></tr>
            </table>
        </div>

        <h5><i>Stock Tracker makes it easy to beat the market, providing insights and tips about what what to buy and when to sell.</i></h5>

        <img class="img-responsive img-rounded" src="http://s3-origin-images.politico.com/2013/08/11/130811_wall_street_ap_605.jpg"/>
    </div>

    <div class="col-md-6">

        <h4>Market Tools That Make You Money</h4>

        <p>Beat the average with Stock Tracker's comprehensive market analysis tools.
        We make it easy to figure out when to buy, short, sell or hold onto stocks with our tools:</p>

        <ul class="list-group">
            <li class="list-group-item-info list-group-item">Real time stock charts</li>
            <li class="list-group-item-info list-group-item">Constantly updated market opinions</li>
            <li class="list-group-item-info list-group-item">Live news about all worldwide markets</li>
            <li class="list-group-item-info list-group-item">Real time stock charts</li>
        </ul>

        <h4>Customer Reviews:</h4>

        <figure>
            <blockquote>
                "Using Stock Tracker, I was always one step ahead of the market"
            </blockquote>
            <footer>
                — <cite class="author">Warren Buffet</cite>, <cite class="company">Berkshire Hathaway</cite>
            </footer>
        </figure>
        <br/>
        <figure>
            <blockquote>
                "Stock Trader told me when to sell my shares of <i>SHOO</i>, and saved me a lot of money"
            </blockquote>
            <footer>
                — <cite class="author">Jordan Belfort</cite>, <cite class="company">Stratton Oakmont</cite>
            </footer>
        </figure>

    </div>

@endsection