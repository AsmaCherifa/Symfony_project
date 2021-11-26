@extends('layout')
@section ("content")
<div class="custom-product ">
<div class="col-sm-10">

   
    <table class="table table-striped">
        <tr>
            <td>Amount</td>
            <td>$ {{$total}}</td>
        </tr>
        <tr>
            <td>Taxe</td>
            <td>$ 10</td>
        </tr>
        <tr>
            <td>Total Amount </td>
            <td>$ {{$total + 10}} </td>
        </tr>
      </table>
      <form action="/orderPlace" method="post">
        @csrf
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" name="adresse" placeholder="1234 Main St">
        </div>
    
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" id="inputCity">
          </div>
         
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" name="zip" class="form-control" id="inputZip">
          </div>
        </div>
    
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pay" id="exampleRadios1" value="online Payment" checked>
            <label class="form-check-label" for="exampleRadios1">
              Online payment
            </label>
          </div>
     
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pay" id="exampleRadios2" value="EMI payment">
            <label class="form-check-label" for="exampleRadios2">
             EMI payment
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="pay" id="exampleRadios3" value="Payment on delivery" >
            <label class="form-check-label" for="exampleRadios3">
             Payment on delivery
            </label>
          </div>
          <br>
          <button type="submit" class="btn btn-primary mb-2">Confirm </button>
</div>
</div>
</form>

@endsection