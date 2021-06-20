
@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
      <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update User</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

					<form method="POST" action="{{route('users.update', $editData->id)}}">
            @csrf
					  <div class="row">
						<div class="col-12">	

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
								<h5>User Role<span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="role" required class="form-control">
										<option value="" selected="" disabled="">Select Role</option>
										<option value="Admin" {{($editData->role == "Admin"? "selected":"")}} >Admin</option>
										<option value="Operator" {{($editData->role == "Operator"? "selected":"")}}>Operator</option>
									
									</select>
								</div>
							</div>
                </div>  
                {{-- end of 1st col-md-6 --}}

                <div class="col-md-6">

                  <div class="form-group">
								<h5>User Name<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" value="{{$editData->name}}" name="name" class="form-control" required="" > </div>								
							</div>
                </div>
                {{-- end of 2nd col-md-6 --}}
              </div>
              {{-- row end --}}

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
								<h5>User Email<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" value="{{$editData->email}}" name="email" class="form-control" required="" > </div>								
							</div>
                </div>  
                {{-- end of 1st col-md-6 --}}

                <div class="col-md-6">

                  {{-- <div class="form-group">
								<h5>User Password<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="password" class="form-control" required="" > </div>								
							</div> --}}
                </div>
                {{-- end of 2nd col-md-6 --}}
              </div>
              {{-- row end --}}

						</div>
						
					  </div>
						
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-warning mb-5" value="Update">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>

	
	  
	  </div>
  </div>










@endsection