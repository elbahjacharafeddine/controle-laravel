@extends('layouts.master')
@section('menu')
@extends('sidebar.viewrecord')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>View Record</h3>
                    <p class="text-subtitle text-muted">staff information list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
       
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dispay Information</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('form/save') }}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>ID</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('userID') is-invalid @enderror" value="{{ old('userID') }}"
                                                    placeholder="Enter user id" id="first-name-icon" name="userID">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label>Full Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('fullName') is-invalid @enderror" value="{{ old('fullName') }}"
                                                    placeholder="Enter full name" id="first-name-icon" name="fullName">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Sex</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('sex') is-invalid @enderror" value="{{ old('sex') }}"
                                                    placeholder="Enter sex" id="first-name-icon" name="sex">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-4">
                                        <label>Email Address</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="email" class="form-control @error('emailAddress') is-invalid @enderror" value="{{ old('emailAddress') }}"
                                                    placeholder="Enter email" id="first-name-icon" name="emailAddress">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Mobile Number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}"
                                                    placeholder="Enter phone number" name="phone_number">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-4">
                                        <label>Position</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}"
                                                    placeholder="Enter position" name="position">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-bag-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Departement</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('department') is-invalid @enderror" value="{{ old('department') }}"
                                                    placeholder="Enter departement" name="department">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-folder-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-4">
                                        <label>Salary</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('salary') is-invalid @enderror" value="{{ old('salary') }}"
                                                    placeholder="Enter salary" name="salary">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                        <a href="{{ route('form/view/detail') }}" class="btn btn-light-secondary me-1 mb-1">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted ">
            <div class="float-start">
                <p>2021 &copy; Soeng Souy</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="http://soengsouy.com">Soeng Souy</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection