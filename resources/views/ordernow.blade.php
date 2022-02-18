@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">

            <tbody>
                <tr>
                    <td>Höhe</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Steuer</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Zustellung </td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Gesamtsumme</td>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="Adresse" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Zahlungsmethode</label> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>Onlinebezahlung</span> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>Ratenzahlung</span> <br><br>
                    <input type="radio" value="cash" name="payment"> <span>Zahlung bei Lieferung</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">Jetzt Bestellen</button>
            </form>
        </div>
    </div>
</div>
@endsection