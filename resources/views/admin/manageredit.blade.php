@extends('layout')
@section('content')





<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Form For Edit Manager Profile</h2>

				                 <p class="alert-success"><?php
				                  $exception=Session::get('exception');
				                  
				                  if($exception)
				                  {
				                  	echo $exception;
				                  	Session::put('exception', null);
				                  }
				                 	
				                 ?></p>


                          <form class="forms-sample" method="post" action="{{ URL::to('/update_manager',$manager_description_profile->manager_id) }}" >
                          	{{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Manager's Name</label>
                                  <input type="text" class="form-control p-input" name="manager_name" value="{{($manager_description_profile->manager_name)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="manager_father_name" value="{{($manager_description_profile->manager_father_name)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="manager_mother_name" value="{{($manager_description_profile->manager_mother_name)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input" name="manager_email" value="{{($manager_description_profile->manager_email)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Password</label>
                                  <input type="password" class="form-control p-input" name="manager_password" value="{{($manager_description_profile->manager_password)}}">
                              </div> 

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Phone</label>
                                  <input type="text" class="form-control p-input" name="manager_phone" value="{{($manager_description_profile->manager_phone)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Address</label>
                                  <input type="text" class="form-control p-input" name="manager_address" value="{{($manager_description_profile->manager_address)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent Name</label>
                                  <input type="text" class="form-control p-input" name="manager_restaurent_name" value="{{($manager_description_profile->manager_restaurent_name)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Address</label>
                                  <input type="text" class="form-control p-input" name="manager_restaurent_address" value="{{($manager_description_profile->manager_restaurent_address)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Phone</label>
                                  <input type="text" class="form-control p-input" name="manager_restaurent_phone" value="{{($manager_description_profile->manager_restaurent_phone)}}">
                              </div>
                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>





@endsection