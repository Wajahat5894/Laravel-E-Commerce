@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Benutzername</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Benutzername">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-Mail Adresse</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Passwort</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Passwort">
                </div>
                <button type="submit" class="btn btn-default">Registrieren</button>
            </form>
        </div>
    </div>
</div>
@endsection