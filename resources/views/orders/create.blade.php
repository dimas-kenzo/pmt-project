@extends('layouts.main')
@section('content')
    <form method="POST" action="{{ route('your.route.name') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputContract">Contract</label>
                <input type="text" class="form-control" id="inputContract" name="contract" placeholder="Enter Contract">
            </div>
            <div class="form-group">
                <label for="inputTrader">Trader</label>
                <input type="text" class="form-control" id="inputTrader" name="trader" placeholder="Enter Trader">
            </div>
            <div class="form-group">
                <label for="inputBuyer">Buyer</label>
                <input type="text" class="form-control" id="inputBuyer" name="buyer" placeholder="Enter Buyer">
            </div>
            <div class="form-group">
                <label for="inputJenisKain">Jenis Kain</label>
                <input type="text" class="form-control" id="inputJenisKain" name="jenis_kain"
                    placeholder="Enter Fabric Type">
            </div>
            <div class="form-group">
                <label for="inputColor">Color</label>
                <input type="text" class="form-control" id="inputColor" name="color" placeholder="Enter Color">
            </div>
            <div class="form-group">
                <label for="inputQuantity">Quantity</label>
                <input type="text" class="form-control" id="inputQuantity" name="quantity" placeholder="Enter Quantity">
            </div>
            <div class="form-group">
                <label for="inputDelivery">Delivery</label>
                <input type="text" class="form-control" id="inputDelivery" name="delivery" placeholder="Enter Delivery">
            </div>
            <div class="form-group">
                <label for="inputLebarKain">Lebar Kain</label>
                <input type="text" class="form-control" id="inputLebarKain" name="lebar_kain"
                    placeholder="Enter Fabric Width">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
