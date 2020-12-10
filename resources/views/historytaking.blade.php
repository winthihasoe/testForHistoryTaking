@extends('layouts.pagelayout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <!-- History taking form-->
            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <form class="border border-light p-5 mt-4">

                <p class="h4 mb-4 text-center">Patient History</p>

                {{-- Patient Name --}}
                <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Patient Name">
                
                {{-- Age --}}
                <input type="number" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Age">
                
                {{-- c/o --}}
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Disease">
                
                {{-- Weight --}}
                <input type="number" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Weight">
                
                {{-- Address --}}
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Address">
                
                {{-- Home or Hospital --}}
                <div class="form-check mb-2">
                    <input type="radio" class="form-check-input" id="radiobtn" name="homeOrHospital">
                    <label class="form-check-label" for="radiobtn">Home</label>
                </div>
                <div class="form-check mb-3">
                    <input type="radio" class="form-check-input" id="radiobtn" name="homeOrHospital">
                    <label class="form-check-label" for="radiobtn">Hospital</label>
                </div>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Medication">
                
                {{-- Canula --}}
                <div class="row">
                    <div class="col-6">
                        <label class="form-check-label" for="checkbox">Canula or Injection</label>
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" id="radiobtn" name="canula">
                            <label class="form-check-label" for="radiobtn">Yes</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="radiobtn" name="canula">
                            <label class="form-check-label" for="radiobtn">No</label>
                        </div>
                    </div>
                

                {{-- Ryle's tube --}}
                    <div class="col-6">
                        <label class="form-check-label" for="checkbox">Ryle's tube</label>
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" id="radiobtn" name="ryleTube">
                            <label class="form-check-label" for="radiobtn">Yes</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="radiobtn" name="ryleTube">
                            <label class="form-check-label" for="radiobtn">No</label>
                        </div>
                    </div>
                </div>
                
                {{-- Catheter --}}
                <div class="row">
                    <div class="col-6">
                        <label class="form-check-label" for="checkbox">Catheter</label>
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" id="radiobtn" name="catheter">
                            <label class="form-check-label" for="radiobtn">Yes</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="radiobtn" name="catheter">
                            <label class="form-check-label" for="radiobtn">No</label>
                        </div>
                    </div>

                {{-- Suction --}}
                    <div class="col-6">
                        <label class="form-check-label" for="checkbox">Suction</label>
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" id="radiobtn" name="suction">
                            <label class="form-check-label" for="radiobtn">Yes</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="radiobtn" name="suction">
                            <label class="form-check-label" for="radiobtn">No</label>
                        </div>
                    </div>
                </div>

                {{-- Drip --}}
                <div class="row">
                    <div class="col-6">
                        <label class="form-check-label" for="checkbox">Drip</label>
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" id="radiobtn" name="drip">
                            <label class="form-check-label" for="radiobtn">Yes</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="radiobtn" name="drip">
                            <label class="form-check-label" for="radiobtn">No</label>
                        </div>
                    </div>

                {{-- Insulin --}}
                    <div class="col-6">
                        <label class="form-check-label" for="checkbox">Insulin</label>
                        <div class="form-check mb-2">
                            <input type="radio" class="form-check-input" id="radiobtn" name="insulin">
                            <label class="form-check-label" for="radiobtn">Yes</label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="radiobtn" name="insulin">
                            <label class="form-check-label" for="radiobtn">No</label>
                        </div>
                    </div>
                </div>
                
                {{-- RBS --}}
                <div>
                    <label for="textarea">Blood Sugar Test</label>
                    <select class="mdb-select md-form mb-4 initialized" id="select">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                
                
                {{-- Allergy --}}
                <div>
                    <label for="textarea">Allergy to Drugs</label>
                    <select class="mdb-select md-form mb-4 initialized" id="select">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="If so ...">
                </div>

                {{-- Do and Dont's --}}
                <label for="textarea">Do and Don'ts</label>
                <textarea class="form-control md-textarea mb-3" id="textarea" placeholder=""></textarea>
                
                {{-- Note to CG --}}
                <label for="textarea">Notes to CG</label>
                <textarea class="form-control md-textarea" id="textarea" placeholder=""></textarea>

                <div class="file-field">
                    <div class="btn btn-primary btn-sm float-left ">
                        <span>Choose file</span>
                        <input type="file" id="fileInput">
                    </div>
                </div>
        
                    <div class="switch my-3 py-3">
                        <label>
                            Off
                            <input type="checkbox" checked="checked" id="switch">
                            <span class="lever"></span>
                            On
                        </label>
                    </div>
            
                <button class="btn btn-info btn-block my-4" type="submit">Save</button>
            
                
            </form>
        </div>

        </div>
    </div>
@endsection