@extends('layout')

@section('content')
        <div class="container">
                <div class="pt-5">
                        <form>
                                <div class="row justify-content-md-center">
                                        <div class="col-4">
                                                <input class="form-control form-control" type="file" name="file" id="file" accept=".csv"><br>
                                        </div>
                                        <div class="col-2">
                                                <input class="btn btn-primary" type="button" id="btn" value="Send" />
                                        </div>
                                </div>
                        </form>

                        <br>

                        <div id="cards" class="row"></div>
                </div>

        </div>
@endsection



