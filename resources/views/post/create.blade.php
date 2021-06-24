
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
                <h3 class="card-title">add post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" id="main_id" enctype="multipart/form-data" method="POST">
              	@csrf
                <div class="card-body">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

                   <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" class="form-control" id="title" name="title"placeholder="Enter name">
                     <span style="color:red;" id="title_error"><?php echo $errors->users_error->first('title'); ?></span>
                  </div>

                   <div class="form-group">
                    <label for="defination">defination</label>
                    <input type="text" class="form-control" id="defination" name="defination"placeholder="Enter name">
                     <span style="color:red;" id="defination_error"><?php echo $errors->users_error->first('defination'); ?></span>
                  </div>

                           <div class="form-group">
                           	 <label for="exampleInputEmail1">image<span style="color:red;margin-left: 2px;" class="required-error"> *</span></label>
                             <input id="image" type="file" class="form-control " name="image" value="{{ old('image') }}"  onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"  required autocomplete="image" autofocus>
                                <img id="output" src="" alt="" width="100" height="100"><br>
                                  <span style="color:red;" id="image_error"><?php echo $errors->users_error->first('image'); ?></span>
                             </div>

  
                           <div class="form-group">
                                <label for="exampleInputEmail1">user<span style="color:red;margin-left: 2px;" class="required-error"> *</span></label>
                                                 <select class="form-control" name="user_fk" id="user_fk">
							                    <option value="">--- Select user ---</option>
							                    <?php $no = 1;

							                    foreach ($user as $key => $value) { ?>
							                      <option value="{{ $value }}">{{ $key }}</option>
							                    <?php $no++;
							                    } ?>
							                  </select>



								<span style="color:red;" id="user_fk_error"></span>
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
	var title = $('#title').val();
	var defination = $('#defination').val();
	var image = $('#image').val();
	
	var cnt = 0;
	var f = 0;
	
	

	$('#title_error').html("");
	$('#defination_error').html("");
	$('#image_error').html("");
	

	
	
	var number = /([0-9])/;
	var alphabets = /([a-zA-Z])/;
	var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;	 


	if (title.trim() == '') {
		$('#title_error').html("Please enter title");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#title').focus();

		}
	}
	if (defination.trim() == '') {
		$('#defination_error').html("Please enter defination");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#defination').focus();

		}
	}
	if (image.trim() == '') {
		$('#image_error').html("Please enter image");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#image').focus();
		

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