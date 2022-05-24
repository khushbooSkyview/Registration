@extends('layouts.master')
@section('title', 'User')
@section('content')


<div class="content-wrapper">

    <div class="row">

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h3>Registration</h3>
                </div>
                <div class="card-body">
                    <h3>Basic Information</h3>
                    <form class="forms-sample" method="POST" action="{{ route('create-user') }}" enctype="multipart/form-data">
                    @csrf

                        <div class="row">
                            <div class="col-sm-4">

                                <div class="form-group">
                                    <label for="first_name">First Name<span class="text-red">*</span></label>
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="" placeholder="Enter frist name">
                                    <div class="help-block with-errors"></div>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email<span class="text-red">*</span></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" placeholder="Enter email address">
                                    <div class="help-block with-errors" ></div>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password<span class="text-red">*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password">
                                    <div class="help-block with-errors"></div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect">Gender<span class="text-red">*</span></label>

                                    <input type="radio" name="gender" value="M"/>Male<input type="radio" name="gender" value="F"/>Female
                                    
                                </div>
                                
                            </div>
                            <div class="col-sm-4">

                                <div class="form-group">
                                    <label for="last_name">Last Name<span class="text-red">*</span></label>
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="" placeholder="Enter last name">
                                    <div class="help-block with-errors"></div>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile<span class="text-red">*</span></label>
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="" placeholder="Enter your mobile number">
                                    <div class="help-block with-errors" ></div>

                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password<span class="text-red">*</span></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect">Manglik<span class="text-red">*</span></label>
                                    <select class="form-control" id="exampleSelect" name="manglick">
                                    
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                                
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Date of Birth<span class="text-red">*</span></label>
                                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="DOB" value="">
                                    <div class="help-block with-errors" ></div>

                                    @error('DOB')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>     
               
                                <div class="form-group">
                                    <label for="annualIncome">Annual Income<span class="text-red">*</span></label>
                                    <input id="annualIncome" type="income" class="form-control @error('annualIncome') is-invalid @enderror" name="annualIncome" value="" placeholder="Enter your income">
                                    <div class="help-block with-errors" ></div>

                                    @error('annualIncome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelect">Occupation<span class="text-red">*</span></label>
                                    <select class="form-control" id="exampleSelect" name="occupation">
                                    
                                    <option value="priJob">Private Job</option>
                                    <option value="govJob">Government Job</option>
                                    <option value="business">Business</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect">Family Type<span class="text-red">*</span></label>
                                    <select class="form-control" id="exampleSelect" name="familyType">
                                    
                                    <option value="joint">Joint Family</option>
                                    <option value="nuclear">Nuclear Family</option>
                                    </select>
                                </div>

                            </div>
                            <h3 class="ml-10">Patner Preferance</h3></div>
                            <div class="row">
                                <div class="col-md-4">
                                
                                
                                    <div class="form-group">
                                    <label for="customRange2" class="form-label">Income</label>
                                        <input type="range" class="form-range" min="1" max="100" id="customRange2" name="partIncome">
                                        <div class="help-block with-errors" ></div>

                                        @error('partIncome')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect">Manglik<span class="text-red">*</span></label>
                                        <select class="form-control" id="exampleSelect" name="partManglick">
                                        
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        <option value="both">Both</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="occupation">Occupation<span class="text-red">*</span></label>
                                        <!-- <select class="selectpicker" multiple data-live-search="true">
                                            <option value="priJob">Private Job</option>
                                            <option value="govJob">Government Job</option>
                                            <option value="business">Business</option>
                                        </select> -->

                                        <select id="e1" class="form-control selectpicker" name="partOccupation[]" multiple data-live-search="true">
                                            <option value="priJob">Private Job</option>
                                            <option value="govJob">Government Job</option>
                                            <option value="business">Business</option>
                                        </select>
                                        <div class="help-block with-errors"></div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleSelect">Family Type<span class="text-red">*</span></label>

                                        <select id="e1" class="form-control selectpicker" name="partFamily[]" multiple data-live-search="true">
                                            <option value="joint">Joint Family</option>
                                            <option value="nuclear">Nuclear Family</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('multi-selcet')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

        <script type="text/javascript">
      
        $("#e1").on("change",function(){
           var selected=[]; 
         selected = $(this).val();
        console.log(selected);
        alert(selected);
        });
@endpush

@endsection
