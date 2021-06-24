
@include('include/header')

@include('include/nav')
    <body class="antialiased">
        

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>user Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">add user</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" id="main_id" enctype="multipart/form-data" method="POST">
              	@csrf
                <div class="card-body">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

                   <div class="form-group">
                    <label for="first_name">first_name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"placeholder="Enter name">
                     <span style="color:red;" id="first_name_error"><?php echo $errors->users_error->first('first_name'); ?></span>
                  </div>

                   <div class="form-group">
                    <label for="last_name">last_name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"placeholder="Enter name">
                     <span style="color:red;" id="last_name_error"><?php echo $errors->users_error->first('last_name'); ?></span>
                  </div>


                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                   <span style="color:red;" id="email_error"><?php echo $errors->users_error->first('email'); ?></span>
                  </div>

                  <div class="form-group">
                    <label for="mobile">mobile</label>
                    <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="mobile">
                    <span style="color:red;" id="mobile_error"><?php echo $errors->users_error->first('mobile'); ?></span>
                  </div>

                    <div class="form-group">
                    <label for="adress">adress</label>
                    <input type="adress" class="form-control" name="adress" id="adress" placeholder="adress">
                    <span style="color:red;" id="adress_error"><?php echo $errors->users_error->first('adress'); ?></span>
                  </div>

                  <div class="form-group">
					 <button type="button" id="submitform" onclick="checkvalidation();" class="btn btn-primary">Submit</button>
				 </div>
              </form>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script>


$('#settings_tab').addClass('active mm-active');
$('#admin-user').addClass('active');
$('#settings_expanded').addClass('active');
$('#settings-mm-show').addClass('mm-show');  
function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }






	
	
function checkvalidation() {
     
	$('#submitform').prop('disabled', true);  
	var first_name = $('#first_name').val();
	var last_name = $('#last_name').val();
	var email = $('#email').val();
	var mobile=$('#mobile').val();
    var adress=$('#adress').val();
	
	var cnt = 0;
	var f = 0;
	
	

	$('#first_name_error').html("");
	$('#last_name_error').html("");
	$('#email_error').html("");
	$('#mobile_error').html("");
	$('#adress_error').html("");


	
	
	var number = /([0-9])/;
	var alphabets = /([a-zA-Z])/;
	var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;	 


	if (first_name.trim() == '') {
		$('#first_name_error').html("Please enter first_name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#first_name').focus();

		}
	}
	if (last_name.trim() == '') {
		$('#last_name_error').html("Please enter last_name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#last_name').focus();

		}
	}
	if (email.trim() == '') {
		$('#email_error').html("Please enter email");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#email').focus();
		

		}
	}

   if (mobile.trim() == '') {
		$('#mobile_error').html("Please enter mobile");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#mobile').focus();
			

		}
	}
	
	if (adress.trim() == '') {
		$('#adress_error').html("Please enter adress");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#adress').focus();
		

		}
	}


	if (cnt == 1) {
		$('#submitform').prop('disabled', false); 
		return false;
	} else {
		$('#main_id').submit();
	}
}
</script>


   @include('include/footer')