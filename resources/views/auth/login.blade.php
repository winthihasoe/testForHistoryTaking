@extends('layouts.pagelayout')
@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <!-- Default form login -->
                <form class="text-center border border-light p-5" action="#!">

                    <p class="h4 mb-4">Login</p>

                    <!-- Username -->
                    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Username">

                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                            </div>
                        </div>
                       
                    </div>

                    <!-- Login button -->
                    <button class="btn btn-info btn-block my-4" type="submit">Login</button>
                </form>
                
            </div>
        </div>
    </div>
</form>
@endsection