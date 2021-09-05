@extends('management.owner.layouts.owner_layouts')

@section('admin_content')


@include('management.owner.layouts.includes.headpanel')
@include('management.owner.layouts.includes.leftpanel')
@include('management.owner.layouts.includes.rightpanel')



<div class="sl-mainpanel">

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Dealers Table</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Dealer List
                <a href="{{url('admin/new_dealer_company_form')}}" class="btn btn-sm btn-warning passingID" style="float: right;">Add New</a>
            </h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p" >Company name</th>
                            <th class="wd-15p">Reg. number</th>
                             <th class="wd-20p">Tax payer status</th>
                             <th class="wd-15p">Status</th>

                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td>
                                    1

                                     </td>
                                     <td>1</td>
                                     <td>1</td>
                                     <td></td>

                                {{--  <td>  --}}
                                    {{--  <a href="{{ url('admin/edit/category/' . $row->id) }} "
                                        class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{ url('admin/delete/category/' . $row->id) }}"
                                        class="btn btn-sm btn-danger" id="delete">Delete</a>  --}}
                                {{--  </td>  --}}
                            </tr>


                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- card -->


    </div><!-- sl-mainpanel -->

    <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pd-20">
              <h4 class=" lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College, Not Popular Vote</a></h4>
              <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
            </div><!-- modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-info pd-x-20">Save changes</button>
              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div><!-- modal-dialog -->
      </div><!-- modal -->

@endsection
