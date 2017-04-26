@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Offers</div>

                <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                            <p class="lead"> you may add a new offer now </p>
                    </div>
                    <div class="col-md-8">
                            <a href="/add_offer" class="btn btn-success">Add Offer</a>
                    </div>
                    </div>
                <div class="row">                    
                    <div class="col-md-4">
                            <p class="lead"> Show Offers </p>
                    </div>
                    <div class="col-md-8">
                            <a href="/show_offers" class="btn btn-info">Show offers</a>
                    </div>
               </div>
              <div class="row">     
                    <div class="col-md-4">
                            <p class="lead"> Add Notifications </p>
                    </div>
                    <div class="col-md-8">
                            <a href="/add_notification" class="btn btn-primary">Add Notifications</a>
                    </div>
               </div>     

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
