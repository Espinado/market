@extends('management.owner.layouts.owner_layouts')


@section('admin_content')
@include('management.owner.layouts.includes.headpanel')
@include('management.owner.layouts.includes.leftpanel')
@include('management.owner.layouts.includes.rightpanel')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
      $('select[name="company_country"]').on('change',function(){
         var country_code=$('select[name="company_country"]').val();
        if (country_code) {
            array_code=($(this).find(':selected').data('array'));// find index number of country in config
            $('#reg_country_code').val(array_code) //inset country name
            $('#post_country_code').val(array_code)
       var get_statuses = <?php echo json_encode(Config::get('company_legal_status.legal_status')); ?>;

    //    Company legal statuses from config

    country=<?php echo json_encode(Config::get('countries.name')); ?>;//findcountry name by index in config
     country=country[country_code]['country_name'];

      $('#company_status').empty();
      $('#company_street').empty();
      $('#company_reg_country').empty();
      $('#company_city').empty() //if country changed, these fields should be reset
      $('#company_post_code').empty();

      $('#company_reg_country').val(country)
      $('#company_status').append('<option label="Choose status"></option>')
      $('#company_city').append('<option label="Choose city"></option>')
      $('#company_street').append('<option label="No city selected"></option>')
      $('#company_post_code').append('<option label="No city selected"></option>')


      $.each(get_statuses[country_code]['status'], function(i,s){
          $('#company_status').append($('<option>',  {
        value: i,
        text :s
    }));
});
    // list of company legal statuses for country from config
        //-------------------------------------------------------
    get_cities=<?php echo json_encode(Config::get('countries.name')); ?>;
    $.each(get_cities[country_code]['regions'], function(key,value){
    $('#company_city').append($('<option>',  {
        value: key,
        text :value['city_name']
    }));

        // { key : key }).text(value['city_name']));

  });//list of cities in country from config
//----------------------------------------------------------
$('#company_city').on('change',function(){
$('#company_street').empty();
$('#company_post_code').empty();
var city_array_code=$('#company_city').val();

        $('#company_street').append('<option label="Choose street"></option>')
        $('#company_post_code').append('<option label="Choose index"></option>')
        get_streets= <?php echo json_encode(Config::get('countries.name')); ?>;

         $.each(get_streets[country_code]['regions'][city_array_code]['streets'], function (str, st) {
        $('#company_street').append($('<option>', {
        value: str,
        text : st
    }));
          });
          $.each(get_streets[country_code]['regions'][city_array_code]['post_codes'], function (c, code) {
        $('#company_post_code').append($('<option>', {
        value: c,
        text : code
    }));
          });
})
      }
      else {
        $('#company_status').empty();
      $('#company_status').append('<option label="No country selected"></option>')
      }
    });

    })

</script>



<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

    <form method="post" action="{{ route('store.dealer.company') }}" enctype="multipart/form-data">
                    @csrf
    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Company information</h5>
        <p>New dealer information form</p>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Top Label Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <div class="form-layout">
          <div class="row mg-b-25">
            <div class="col-lg-3">
                <div class="form-group mg-b-10-force">
  {{-- Getting country list from config file --}}

                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="company_country" required>
                    <option label="Choose country"></option>
                    @foreach (Config::get('countries.name') as $key=> $value)

                    <option value="{{$key}}" data-array="{{$value['country_code']}}">{{$value['country_name']}}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-3-->

              <div class="col-lg-3">
           <label class="form-control-label">Company legal status: <span class="tx-danger">*</span></label>
           <select class="form-control select2" data-placeholder="Choose country" name="company_status" required id="company_status">
           <option label="No country selected"></option>
           </select>
           </div><!-- col-3 -->
            <div class="col-lg-3">
              <div class="form-group">

                <label class="form-control-label">Company name: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="company_name" placeholder="Enter Company name" required>
              </div>
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Registration number: <span class="tx-danger">*</span></label>
                <div class="d-md-flex pd-y-20 pd-md-y-0">
                <input class="col-lg-2" type="text" id="reg_country_code" name="reg_country_code_prefix" disabled>
               <input class="form-control" type="text" id="company_reg_number" name="company_reg_number" placeholder="Enter registration number" required>
                </div>
              </div>
            </div><!-- col-3 -->







          </div><!-- row -->


        </div><!-- form-layout -->

      </div><!-- card -->

      <div class="card pd-20 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">Company Legal information</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group mg-b-10-force">

                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="company_reg_country" id="company_reg_country" disabled value="No country selected">
                </div>
              </div><!-- col-3-->
              <div class="col-lg-2">
           <label class="form-control-label">Company Admin person: <span class="tx-danger">*</span></label>
           <input class="form-control" type="text" name="company_admin_person" placeholder="Enter admin person" required>
            </div><!-- col-3 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-lg-2">
           <label class="form-control-label">Company Legal City: <span class="tx-danger">*</span></label>


           <select class="form-control select2" data-placeholder="Choose city" name="company_legal_city" id="company_city" required>
                    <option label="No country selected"></option>
           </select>

           </div><!-- col-3 -->
           <div class="col-lg-2">
           <label class="form-control-label">Company Legal street: <span class="tx-danger">*</span></label>
           <select class="form-control select2" data-placeholder="Choose city" name="company_legal_street" id="company_street" required>
                    <option label="No city selected"></option>
           </select>
            </div><!-- col-3 -->
            <div class="col-lg-2">
           <label class="form-control-label">Company Legal house: <span class="tx-danger">*</span></label>
           <input class="form-control" type="text" name="company_legal_house" placeholder="Enter house" required>
            </div><!-- col-3 -->
            <div class="col-lg-2">
           <label class="form-control-label">Company Legal room: <span class="tx-danger">*</span></label>
           <input class="form-control" type="text" name="company_legal_room" placeholder="Enter room" required>
            </div><!-- col-3 -->
            <div class="col-lg-3">
           <label class="form-control-label">Company legal post code: <span class="tx-danger">*</span></label>
           <div class="d-md-flex pd-y-20 pd-md-y-0">
                <input class="col-lg-2" type="text" id="post_country_code" name="post_country_code_prefix"  disabled>
           <select class="form-control select2" data-placeholder="Choose index" name="company_legal_post_code" id="company_post_code" required>
                    <option label="No city selected"></option>
           </select>
           </div>
            </div><!-- col-3 -->
        </div><!-- row -->



      </div><!-- card -->

      <div class="card pd-20 pd-sm-40 mg-t-20">
        <h6 class="card-body-title">Form Alignment</h6>
        <p class="mg-b-20 mg-sm-b-30">An inline form that is centered align and right aligned.</p>

        <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20">
          <div class="d-md-flex pd-y-20 pd-md-y-0">
            <button class="btn btn-info mg-r-5">Submit Form</button>
            <button class="btn btn-secondary">Cancel</button>
          </div>
        </div><!-- d-flex -->
        </form>



    </div><!-- sl-pagebody -->

  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->


@endsection



