@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')

<div class="container container-form ml-5" style="margin-left: 300px;">
      <form action="{{url('update/dossiers/'.Auth::user()->role_name)}}" method="POST">
      @csrf
      <input type="hidden" name="id" value="">
        <div class=" col-lg-12 mx-auto login-container">
            <div class="row form-header">
                <div class="col-md-2 logocol">
                    <img src="ajout_personne/images/logoo.ico" alt="">
                </div>
                <div class="col-md-10 headcol">
                <br><br>
                    <h4>ECOLE NATIONALE DES SCIENCES APPLIQUEES EL JADIDA</h4>
                  <!-- <p>A community with high expectation and high academic achievement</p> -->
                    <p class="cinfo">
                        <span><i class="fas fa-phone"></i>(+212) 5 23 34 48 22</span>
                        <span><i class="fas fa-envelope"></i> ENSAJ@gmail.com</span>
                        <span><i class="fas fa-map-marker-alt"></i> Route d'Azemmour, Nationale N°1, ELHAOUZIA
                        </span>
                    </p>
                </div>
            </div>
            <hr>
            <div class="form-body">
                <div class="form-title row">
                    <h4>Vos Dossiers</h4>
                </div>
                <hr>
                <div class="form-row row">
                    <div class="col-md-3">
                        <div class="form-row row">
                            <div class="col-md-12">
                                <label for="">Dossier Scientifique:</label>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <input type="file" value="" name="dossier_scientifique"  class="form-control form-control-sm" accept=".pdf,.zip" required>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-3">
                        <div class="form-row row">
                            <div class="col-md-12">
                                <label for="">Dossier Pedagogique:</label>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <input type="file" name="dossier_pedagogique"  class="form-control form-control-sm" accept=".pdf,.zip" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-row row">
                            <div class="col-md-12">
                                <label for="">Dossier Administratif:</label>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <input type="file" name="dossier_administratif"  class="form-control form-control-sm" accept=".pdf,.zip" value="DB::dossier()->dossier_administratif" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="col-lg-4 col-md-8">
                        <br><br>
                        <button class="btn btn-primary btn-lg">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
