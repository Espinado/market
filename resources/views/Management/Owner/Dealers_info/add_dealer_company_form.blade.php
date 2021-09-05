@extends('management.owner.layouts.owner_layouts')


@section('admin_content')
@include('management.owner.layouts.includes.headpanel')
@include('management.owner.layouts.includes.leftpanel')
@include('management.owner.layouts.includes.rightpanel')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">


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
            <div class="col-lg-4">
              <div class="form-group">
                <form method="post" action="{{ route('store.dealer.company') }}" enctype="multipart/form-data">
                    @csrf
                <label class="form-control-label">Company name: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="company_name" placeholder="Enter Company name" required>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Registration number: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="company_reg_number" placeholder="Enter registration number" required>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                <input class="form-control" type="email" name="company_email" placeholder="Enter email address" required>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-8">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="company_address" placeholder="Enter address" required>
              </div>
            </div><!-- col-8 -->
            <div class="col-lg-4">
              <div class="form-group mg-b-10-force">


                <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                <select class="form-control select2" data-placeholder="Choose country" name="company_country" required>
                  <option label="Choose country"></option>
                  @foreach (Config::get('countries.country_name') as $tmp)
                  <option value="{{$tmp['code']}}">{{$tmp['name']}}</option>
                  @endforeach
                </select>
              </div>
            </div><!-- col-4 -->
          </div><!-- row -->


        </div><!-- form-layout -->
      </div><!-- card -->
      <div class="card pd-20 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">Company status</h6>

        <div class="row">
          <div class="col-lg-3">
            <label class="ckbox">
                <input type="hidden" name="tax_payer" value="0">
              <input type="checkbox" name="tax_payer" value="1"><span>Tax payer</span>
            </label>
          </div><!-- col-3 -->
          <div class="col-lg-3">
            <label class="ckbox">
                <input type="hidden" checked name="is_active" value="0">
              <input type="checkbox" checked name="is_active" value="1"><span>is active</span>
            </label>
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


      </div><!-- card -->

    </div><!-- sl-pagebody -->

  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection


