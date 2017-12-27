@extends('template.default')

@section('title', 'Shipping Page')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-2">

          {{-- Errors --}}
          @if(count($errors) > 0)
            @foreach($errors->all() as $error)
              <div class="alert alert-danger">
                <strong>{{ $error }}</strong>
              </div>
            @endforeach
          @endif

          <form class="form-horizontal" role="form" action="{{ route('address.store') }}" method="POST">
            {{ csrf_field() }}
            <fieldset>
              <legend class="text-center">Shipping Details</legend>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Address</label>
                <div class="col-sm-10">
                  <input type="text" name="address" placeholder="Address" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">City</label>
                <div class="col-sm-10">
                  <input type="text" name="city" placeholder="City" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">State</label>
                <div class="col-sm-4">
                  <input type="text" name="state" placeholder="State" class="form-control">
                </div>

                <label class="col-sm-2 control-label" for="textinput">Zip Code</label>
                <div class="col-sm-4">
                  <input type="text" name="zipcode" placeholder="Post Code" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Country</label>
                <div class="col-sm-10">
                    <select name="country" id="country">
                        <option value=""></option>
                        <option value="bd">Bangladesh</option>
                        <option value="in">India</option>
                    </select>
                </div>
              </div>


              <div class="form-group">
                  <label class="col-sm-2 control-label" for="phone">Phone</label>
                  <div class="col-sm-10">
                    <input type="phone" name="phone" class="form-control" placeholder="phone">
                  </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div>
                    <button type="submit" class="btn btn-primary pull-right">Proceed To Payment</button>

                    <a href="{{ route('home') }}" class="btn btn-group btn-danger pull-left">Cancel</a>
                  </div>
                </div>
              </div>

            </fieldset>
          </form>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->

@endsection