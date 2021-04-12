@extends('front.layouts.app')

@section('content')

        <!-- start hero section -->
        <section class="p-0 parallax home-events-conference" data-parallax-background-ratio="0.5" style="background-image: url('assets/images/jciimage.jpg');">
            <div class="opacity-extra-medium-2 bg-dark-purple-2"></div>
            <div class="container position-relative mt-8 mb-20">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-9 col-lg-10 col-md-11 d-flex flex-column justify-content-center full-screen  padding-2-half-rem-lr md-landscape-h-600px xs-padding-15px-lr">
                        <div class="bg-transparent-dark-purple-2 border-radius-6px padding-6-half-rem-all lg-padding-5-rem-all md-padding-4-half-rem-all sm-padding-2-rem-lr">
                            <div class=""><h4 class="text-color text-center font-weight-bold">Individual Registration</h4></div>
                            <form method="post" action="/individualreg">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                            <label for="registration">Delegates Category</label>
                                            <select class="form-control d_cat" name="d_cat" id="subject" required>
                                                <option value="" selected>Select</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-md-6 dropdownMenu">
                                        <label for="registration">Registration Type</label>
                                        <select class="form-control r_type" name="r_type" id="topic" required>
                                            <option value="" selected>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Full Name</label>
                                        <input id="lom name" type="text" class="form-control" name="f_name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">LOM Area</label>
                                        <input id="name" type="text" class="form-control" name="lom_area" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 dropdownMenu">
                                        <label for="registration">LOM Name</label>
                                        <select id="delegate" class="js-states form-control" name="lom_id" required>
                                            <option value="Single"> JCI</option>
                                            <option value="Couple"> Junior JCI</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Position in LOM</label>
                                        <input id="name" type="text" class="form-control" name="position" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="registration">Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="" selected>Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Contact No.</label>
                                        <input id="email" type="email" class="form-control" name="contact" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Spouse Name</label>
                                        <input id="email" type="email" class="form-control" name="spouse" required>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="registration">Choose Package</label>
                                        <select class="form-control" name="package_id" id="chapter" required>
                                            <option value="" selected>Select</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phoneNumber">Date of Deposit</label>
                                        <input id="phoneNumber" type="date" class="form-control" name="d_deposit" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="dateofdeposit">Deposited Amount</label>
                                        <input id="dateofdeposit" type="text" class="form-control" name="d_amt" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="depositedamount">Upload Voucher</label>
                                        <input id="depositedamount" type="file" class="form-control" name="u_vou" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="profilepicture">Upload Your Photo</label>
                                        <input type="file" accept="image/*" id="profile-picture" name="u_pho" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-3 form-group md-6">
                                        <button type="submit" class="btn btn-primary singleregistration">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
        <!-- end hero section -->

        <!-- section -->
        <script>
            var subjectObject = {
              "Jaycees": {
                "Single": ["With Accomodation - Rs 7000", "Without Accomodation - Rs 5000"],
                "Couple": ["With Accomodation - Rs 13000", "Without Accomodation - Rs 9000"],
              },
              "Junior Jaycees": {
                "Single": ["With Accomodation - Rs 4000", "Without Accomodation - 3000"]
              }
            }
            window.onload = function() {
              var subjectSel = document.getElementById("subject");
              var topicSel = document.getElementById("topic");
              var chapterSel = document.getElementById("chapter");
              for (var x in subjectObject) {
                subjectSel.options[subjectSel.options.length] = new Option(x, x);
              }
              subjectSel.onchange = function() {
                //empty Chapters- and Topics- dropdowns
                chapterSel.length = 1;
                topicSel.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                  topicSel.options[topicSel.options.length] = new Option(y, y);
                }
              }
              topicSel.onchange = function() {
                //empty Chapters dropdown
                chapterSel.length = 1;
                //display correct values
                var z = subjectObject[subjectSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                  chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                }
              }
            }
            </script>
        <section class="bg-dark-purple-2">

        </section>
        <!-- End section -->


@endsection)
