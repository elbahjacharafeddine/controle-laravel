@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')

<div class="container container-form ml-5" style="margin-left: 300px;">
      <form action="{{url('update/profile/'.Auth::user()->role_name)}}" method="POST">
      @csrf
      <input type="hidden" name="id" value="">
        <div class=" col-lg-12 mx-auto login-container">
            <div class="row form-header">
                <div class="col-md-2 logocol">
                    <img src="ajout_personne/images/logoo.ico" alt="">
                </div>
                <div class="col-md-10 headcol">
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
            <div class="form-body">
                <div>
                    <img src="{{ URL::to('/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}" width="200px",heigth="40px">
                </div>
                <hr>
                <div class="form-title row">
                    <h4>Information personnelle</h4>
                </div>
                <div class="form-row row">
                    <div class="col-md-6">
                        <div class="form-row row">
                            <div class=" col-md-4">
                                <label for="">Nom</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class=" col-md-6">
                                <input type="text" name="last_name" value="{{Auth::user()->name}} " class="form-control form-control-sm" required>
                            </div>
                            <div class=" col-md-2">
                            &nbsp;
                            </div>
                        </div>

                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">Date Naissance</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <input type="date" name="birthdate" placeholder="Enterez votre date de naissance" class="form-control form-control-sm" required>
                            </div>
                            <div class=" col-md-2">
                                &nbsp;
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">Matricule</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="Registration_number" value="" class="form-control form-control-sm" required>
                            </div>
                        </div>
                        @if (Auth::user()->role_name=='professeur')
                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">Departement</label>
                                <sup class="req"></sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="Department" id="" placeholder="votre Departement" required>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-row row">
                            <div class=" col-md-4">
                                <label for="">prenom</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                            <input type="text" name="first_name" placeholder="Enterez votre prenom" class="form-control form-control-sm" required>
                            </div>
                            <div class=" col-md-2">
                            &nbsp;
                            </div>
                        </div>
                        
                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">Genre</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" name="genre" value="male" checked> mâle &nbsp;&nbsp;
                                <input type="radio" name="genre" value="femalle"> femelle &nbsp;&nbsp;
                            </div>
                            <div class=" col-md-2">
                                &nbsp;
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">Role</label>
                                <sup class="req"></sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="role" id="" value="{{Auth::user()->role_name}} " disabled>
                            </div>
                            <div class=" col-md-2">
                            &nbsp;
                            </div>
                        </div>
                        @if (Auth::user()->role_name=='professeur')
                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">filiere</label>
                                <sup class="req"></sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="sector" id="" placeholder="votre filiere" required>
                            </div>
                        </div>
                        
                        @endif
                    </div>
                </div>

                <hr>

                <div class="form-title row">
                    <h4>Coordonnées</h4>
                </div>

                <div class="form-row row">
                    <div class="col-md-6">
                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">N° de portable</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="number_phone" value="{{Auth::user()->phone_number}}" class="form-control form-control-sm" required>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">Ville</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="city" placeholder="votre ville" class="form-control form-control-sm" required>
                            </div>
                        </div>

                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">Code Postale</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="zip_code" placeholder="votre code Postale" class="form-control form-control-sm" required>
                            </div>
                        </div>
                        


                    </div>
                    <div class="col-md-6">
                        <div class="form-row row">
                            <div class=" col-md-4">
                                <label for="">Addresse Email</label>
                                <sup class="req"></sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                            <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control form-control-sm " disabled>
                            </div>
                            <div class=" col-md-2">
                            &nbsp;
                            </div>
                        </div>
                        
                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">State</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                                <select name="state" id="">
                                    <option value="marie">marié(e)</option>
                                    <option value="celibataire" selected>célibataire</option>
                                    <option value="divorce">divorcé(e)</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-md-2">
                            &nbsp;
                            </div>
                        <div class="form-row row">
                            <div class="col-md-4">
                                <label for="">Adresse complète</label>
                                <sup class="req">*</sup>
                                <span class="indc">:</span>
                            </div>
                            <div class="col-md-6">
                            <textarea type="text" name="full_address" rows="5" placeholder="Entrez Adresse complète" class="form-control form-control-sm" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
<br><br>
                   


                <div class="form-row row">
                    <div class="col-md-4">
                
                    </div>
                    <div class="col-lg-4 col-md-8">
                    <button class="btn btn-primary btn-lg">Mise à jour</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div> 
@endsection