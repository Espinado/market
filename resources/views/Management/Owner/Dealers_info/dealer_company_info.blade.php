@extends('management.owner.layouts.owner_layouts')

@section('admin_content')

{{-- @foreach ($dealerCompany as $tmp)
@dd($tmp->dealer_company_profile->id)
@endforeach --}}
@include('management.owner.layouts.includes.headpanel')
@include('management.owner.layouts.includes.leftpanel')
@include('management.owner.layouts.includes.rightpanel')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<div class="sl-mainpanel">
<div class="card pd-40 pd-sm-40">


    <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h6 class="mg-b-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
              Making a Beautiful CSS3 Button Set
            </a>
          </h6>
        </div><!-- card-header -->

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body">
            A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h6 class="mg-b-0">
            <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Horizontal Navigation Menu Fold Animation
            </a>
          </h6>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h6 class="mg-b-0">
            <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Users
            </a>
          </h6>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">


            <!-- ########## START: MAIN PANEL ########## -->






          <div class="card pd-20 pd-sm-40">

            <h6 class="card-body-title">Dealer List
                <a href="" class="btn btn-sm btn-warning passingID" data-toggle="modal" data-target="#exampleModal" style="float: right;">Add New</a>
            </h6>
            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-15p">First name</th>
                    <th class="wd-15p">Last name</th>
                    <th class="wd-20p">Position</th>
                    <th class="wd-15p">Creating date</th>
                    <th class="wd-10p">Phone</th>
                    <th class="wd-25p">E-mail</th>
                    <th class="wd-25p">Photo</th>
                    <th class="wd-25p">Contract Nr.</th>
                    <th class="wd-25p">Birthday</th>
                    <th class="wd-25p">Is active</th>
                    <th class="wd-25p">Is banned</th>




                  </tr>
                </thead>
                <tbody>
                 @foreach ($dealerCompany->dealer_company_users as $user)
                 <tr>
                     <td>{{$user->name}}</td>
                     <td>{{$user->surname}}</td>
                     <td>{{$user->position}}</td>
                     <td>{{$user->created_at}}</td>
                     <td>{{$user->phone}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->photo}}</td>
                     <td>{{$user->contract}}</td>
                     <td>{{$user->birthday}}</td>
                     <td> @if ($user->is_active  ==true)
                        <button class="badge badge-success">Active</button>
                         @else
                            <button class="badge badge-danger">Not available</button>
                        @endif</td>
                     <td>@if ($user->is_banned  ==true)
                        <button class="badge badge-danger">Banned</button>
                         @else
                         <button class="badge badge-info">Not available</button>
                        @endif</td>

                 </tr>
                 @endforeach
                </tbody>
              </table>
            </div><!-- table-wrapper -->
          </div><!-- card -->





              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content bd-0">
                    <div class="modal-header pd-y-20 pd-x-25">
                      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Invite new user</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body pd-25">
                      <h4 class="lh-4 mg-b-20 tx-inverse">Enter user information</h4>
                      <form method="post" action="{{ route('store.dealer.user') }}" enctype="multipart/form-data">
                        @csrf
                      <label for="name">Name</label>
                      <input class="form-control" placeholder="Name" type="text" id="name" name="name" required>
                      <label for="surname">Surname</label>
                      <input class="form-control" placeholder="Surname" type="text" id="surname" name="surname" required>
                      <label for="email">Email</label>
                      <input class="form-control" placeholder="Email" type="email" id="email" name="email" required>
                    </div>
                    <input type="hidden" name="dealer_company_id" value="{{$dealerCompany->id}}">
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success pd-x-20" value="Invite">
                      <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal">Close</button>
                    </form>
                    </div>
                  </div>







      <!-- ########## END: MAIN PANEL ########## -->
        </div><!-- collapse -->
      </div><!-- card -->
    </div><!-- accordion -->
  </div><!-- card -->
</div>
@endsection
