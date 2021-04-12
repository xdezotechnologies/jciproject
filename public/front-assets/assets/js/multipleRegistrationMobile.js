const panel = document.querySelector('.panel');
const addUserMobile = document.querySelector('.addUserMobile');

let mobileRow =1

addUserMobile.addEventListener("click", function(e){
    e.preventDefault()
    console.log("Clicking")
    mobileRow++;
  panel.innerHTML += `
  <div
  class="panel-heading border-color-white-transparent">
  <a class="accordion-toggle" data-toggle="collapse"
      data-parent="#accordion5"
      href="#accordion-style-05-${mobileRow} ">
      <div class="panel-title">
          <span
              class="alt-font text-white d-inline-block registrationHeading">${mobileRow} :Register for single person</span>
          <i
              class="indicator fas fa-angle-down text-white icon-extra-small"></i>
      </div>
  </a>
</div>
<div id="accordion-style-05-${mobileRow}"
  class="panel-collapse collapse show overflow-scroll"
  data-parent="#accordion5">
  <div
      class="panel-body text-light-white-transparent registrationDescription">

       <div class="form-group col-md-6">
        <label for="exampleInputPassword1" class="font-weight-bold">First Name</label>
        <input type="text" class="form-control-multiple-reg border-dark" id="exampleInputPassword1" placeholder="First Name">
      </div>
       <div class="form-group col-md-6">
        <label for="exampleInputPassword1" class="font-weight-bold">Last Name</label>
        <input type="text" class="form-control-multiple-reg border-dark" id="exampleInputPassword1" placeholder="Last Name">
      </div>
       <div class="form-group col-md-6">
          <label for="exampleInputPassword1" class="font-weight-bold">Gender</label>
          <select>
          <option>Male</option>
          <option>Female</option>
          </select>                                                                    
       </div>
       <div class="form-group col-md-6">
        <label for="exampleInputPassword1" class="font-weight-bold">Position In LOM</label>
        <input type="text" class="form-control-multiple-reg border-dark" id="exampleInputPassword1" placeholder="Position">
      </div>
       <div class="form-group col-md-6">
        <label for="exampleInputPassword1" class="font-weight-bold">Contact No</label>
        <input type="text" class="form-control-multiple-reg border-dark" id="exampleInputPassword1" placeholder="Contact">
      </div>
       <div class="form-group col-md-6">
        <label for="exampleInputPassword1" class="font-weight-bold">Email</label>
        <input type="email" class="form-control-multiple-reg border-dark" id="exampleInputPassword1" placeholder="Email">
      </div>

      </div>
      
   
</div>
  `
})

