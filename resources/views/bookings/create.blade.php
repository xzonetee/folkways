@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('bookings.store')}}" method="POST">
    {{ csrf_field() }}
    

    <h1>Information</h1>

    <div class="form-group">
            <select class="form-control" name="province_id">
                <option>Select Homestay</option>
                @foreach($homestays as $homestay)
            <option value="{{ $homestay->id }}">{{ $homestay->name }}</option>
                @endforeach
            </select>
        </div>

    <div class="row">
        <div class="col-lg-12">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Name :</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Surname :</label>
                <input type="text" class="form-control" name="surname">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Phone number :</label>
                <input type="text" class="form-control" name="tel">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="guest1">Guest : </label>
                
                <select class="form-control" id="guest1" name="guest">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="price1">Price :</label>
                
                <select class="form-control" id="price1" name="price">
                    <option value="500">500 Bath/1person</option>
                    <option value="1000">1000 Bath/2person</option>
                    <option value="1500">1500 Bath/3person</option>
                    <option value="2000">2000 Bath/4person</option>
                    <option value="2500">2500 Bath/5person</option>
                </select>
            </div>
        </div>


        <div class="input-daterange date-group col-md-6">
                <label>Date : </label>
            <input type="date" value="" class="form-control form-control-lg not-dark tleft mnth" name="date" placeholder="dd-mm-yyyy">
        </div>

    </div>

    
</div>
    <br>
    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Continue</button>
    <a href="{{ url('homestays') }}" class="btn btn-warning">Back</a>

    </form>
</div>
@endsection