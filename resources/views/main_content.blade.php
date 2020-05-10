@extends('api_data')
@section('mainContent') 
<div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Country</th>
                      <th>CountryCode</th>
                      <th>Slug</th>
                      <th>NewConfirmed</th>
                      <th>TotalConfirmed</th>
                      <th>NewDeaths</th>
                      <th>TotalDeaths</th>
                      <th>NewRecovered</th>
                      <th>TotalRecovered</th>
                      <th>Date</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Country</th>
                      <th>CountryCode</th>
                      <th>Slug</th>
                      <th>NewConfirmed</th>
                      <th>TotalConfirmed</th>
                      <th>NewDeaths</th>
                      <th>TotalDeaths</th>
                      <th>NewRecovered</th>
                      <th>TotalRecovered</th>
                      <th>Date</th>
                    </tr>
                  </tfoot>
                  


                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      @endsection
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script type="text/javascript">
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $( document ).ready(function(){
  
    // $("#dataTable").empty();
        $.ajax({
           type:'get',
           url:"{{ url('getDatatableData') }}",
           // data:{name:name, password:password, email:email},
           success:function(data){
              // alert(data.success);
               $("#dataTable").append(data);
              console.log(data);
           }
        });
  
  });
</script>
    