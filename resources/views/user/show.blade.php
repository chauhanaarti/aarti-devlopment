@include('include/header')

@include('include/nav')


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     
  <div class="row">    
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">  
         <div class="row">
          <div class="col-md-6 text-left">  
          </div>                
          <div class="col-md-6 text-right">
            <div class="text-right">
              <ul class="list-inline">
                <li class="list-inline-item">
                
                 <a class="btn btn-custom btn-gradient-primary sr-fs-12px" href="<?php echo URL::to('/')?>/user/create">Add record</a>

                    </li>
                  </ul>
                </div>
              </div>
            </div>   
                          
                <div class="table-responsive">
                <table class="table table-bordered mb-0 table-centered">
                <thead>
                      <tr>
                      <th>first_name</th>
                      <th>last_name</th>
                      <th>email</th>  
                      <th>mobile</th>  
                      <th>adress</th>                                      
              </tr>
              </thead>
              <tbody>
              <?php
              if(count($data) !=0)
              {
              
              foreach($data as $row)
              {   
              
              ?>
              <tr>
                
                <td>{{$row->first_name}}</td>
                <td>{{$row->last_name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->mobile}}</td>
                <td>{{$row->adress}}</td>
              
               </tr>
              <?php } 
              }
              else{ ?>
                <tr>
                  <td colspan="4" style="text-align:center">No Record Available</td>
                <tr>
              <?php }
              ?>
              </tbody>
            </table><!--end /table-->
          </div><!--end /tableresponsive-->
          
        </div><!--end card-body-->
    
         
        
          
        
       
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('include/footer')