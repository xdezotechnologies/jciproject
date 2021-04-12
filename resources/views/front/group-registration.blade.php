@extends('front.layouts.app')

@section('content')


        <!-- start hero section -->
        <section class="p-0 parallax home-events-conference" data-parallax-background-ratio="0.5" style="background-image: url('assets/images/jciimage.jpg');">
            <div class="opacity-extra-medium-2 bg-dark-purple-2"></div>
            <div class=" position-relative mt-8 mb-20">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-9 maginTop col-lg-12 col-md-11 d-flex flex-column justify-content-center full-screen ">
                        <div class="bg-transparent-dark-purple-2 mb-20 border-radius-6px maginTop">
                          <!-- <a href="#multipleregistration"><h4 class="register-heading">Multiple Registration</h4></a> -->
                          <section class="bg-transparent-dark-purple-2" id="multipleregistration">
                            <div class="mt-5 ">
                              <!--  for larger screen users -->

                              <div class="bg-transparent-dark-purple-2 row justify-content-center">
                                  <div class="col-md-12">

                                      <div class="card bg-transparent-dark-purple-2 text-white">
                                          <div class=""><h4 class="register-heading text-center">Multiple Registration</h4></div>
                                          <div class="card-body">

                                                <div class="row border-top">
                                                  <div class="form-group col-md-6 dropdownMenuMultiple">
                                                    <label >Delegates Category</label>
                                                    <select id="delegate" class="js-states form-control">
                                                        <option value="Single">Single</option>
                                                        <option value="Couple">Couple</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="name">No of Delegates</label>
                                                    <input id="lom name" type="number" class="form-control" name="name" required>
                                                </div>
                                              </div>

                                              <div class="row border-top">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1"  class="font-weight-bold">LOM Area</label>
                                                    <input type="text" class="form-control-multiple-reg border-dark" id="exampleInputPassword1">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1"  class="font-weight-bold">LOM  Name:</label>
                                                    <input type="text" class="form-control-multiple-reg border-dark" id="exampleInputPassword1">
                                                  </div>
                                              </div>

                                              <div class="row border-top">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1"  class="font-weight-bold">Contact No.</label>
                                                    <input type="tel" class="form-control-multiple-reg border-dark" id="exampleInputPassword1">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1"  class="font-weight-bold">Date of Deposit:</label>
                                                    <input type="date" class="form-control-multiple-reg border-dark" id="exampleInputPassword1">
                                                  </div>
                                              </div>

                                                <div class="row border-top  ">
                                                <div class="form-group col-md-6 dropdownMenuMultiple">
                                                    <label >Deposit Amount Rs.:</label>
                                                    <select id="birdRegistration" class="js-states form-control">
                                                        <option value="With accommodation">With accommodation @ Rs500</option>
                                                        <option value="Without accommodation"> Without accommodation. @ Rs3000</option>
                                                    </select>
                                                </div>
                                                  <div class="form-group col-md-6">
                                                      <label for="image">Deposite Voucher</label>
                                                      <input type="file" accept="image/*" id="image" class="form-control-file " name="image" required>
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                      <label for="image">Deposite Voucher</label>
                                                      <input type="file" accept="image/*" id="image" class="form-control-file " name="image" required>
                                                  </div>
                                              </div>

                                            </div>

                                              <div>
                                                <button type="add" class="btn btn-primary addUser mb-3 ml-3">Add User</button>
                                              </div>

                                                <!-- FOr large screen  users -->

                                          </div>
                                      </div>

                                  </div>
                              </div>

                          </section>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end hero section -->


@endsection)
