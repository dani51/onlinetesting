@extends("user-frontend.index")
@section("content")
  <div class="row">
      <div class="card " style="width: 100%">
                  <div class="jumbotron text-center">
                      <h3 class="display-3">Result</h3>



                  </div>

              <div class="col-sm-12">

                      <div class="card-body">
                          <div class="row margin-b-40">
                              <div class="col-sm-6">
                                  <h4><p><b>User ID :</b> {{Auth::user()->id}}</p></h4>
                                  <h3><p><b>User Name :</b> {{Auth::user()->name}}</p></h3>

                              </div>

                          </div>

                          <div class="table-responsive">
                              <table class="table table-striped">
                                  <thead>
                                  <tr>
                                      <th>Status</th>
                                      <th>Total Questions</th>
                                      <th>Pass </th>
                                      <th>Fail </th>
                                      <th>Result</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>
                                          <div><strong>Result Status</strong></div>

                                      </td>
                                      <td>{{$countertotal}}</td>
                                      <td>{{$counterpass}}</td>
                                      <td>{{$counterfail}}</td>
                                      <td> <p><b>Marks Obtain :</b> {{$marks}}</p></td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>


                          <div class="row">
                              <div class="col-md-12 text-right">
                                  <div>
                                      <button class="btn btn-success" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
@endsection

