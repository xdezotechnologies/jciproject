// const addUser = document.querySelector(".addUser");
// const tBody = document.querySelector(".tBody");
// let added =false;
//     addUser.addEventListener("click", function (e) {
//   e.preventDefault();
//   addUser.disabled = true;
//   const noOFDelegates = parseInt(document.querySelector("#lom_name").value)
      
//   $(document).ready(function(){
//       for (let index = 0; index <= noOFDelegates; index++) {
//   setTimeout(() => {
      
//   tBody.innerHTML += `
//   <tr>
//     <td scope="row" class="text-white">${index}</td>
//     <td scope="row" class="dropdownMenuTable">
//     <!-- Dropdown start -->
//     <div class="dropdown hierarchy-select" id="delegateCategory-${index}">
//       <button type="button" class="btn btn-secondary dropdown-toggle" id="delegateCategory-${index}-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
//       <div class="dropdown-menu" aria-labelledby="example-two-button">
//           <div class="hs-searchbox">
//               <input type="text" class="form-control" autocomplete="off">
//           </div>
//           <div class="hs-menu-inner">
//               <a class="dropdown-item" data-value="1" data-default-selected="" >1</a>
//               <a class="dropdown-item" data-value="2">2</a>
//           </div>
//       </div>
//       <input class="d-none" name="delegateCategory${index} " readonly="readonly" aria-hidden="true" type="text"/>
//   </div>
//   <!-- Dropdown end -->
//     </td> 
//     <td scope="row" class="dropdownMenuTable">
//     <!-- Dropdown start -->
//     <div class="dropdown hierarchy-select" id="RegType-${index}">
//       <button type="button" class="btn btn-secondary dropdown-toggle" id="RegType-${index}-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
//       <div class="dropdown-menu" aria-labelledby="example-two-button">
//           <div class="hs-searchbox">
//               <input type="text" class="form-control" autocomplete="off">
//           </div>
//           <div class="hs-menu-inner">
//               <a class="dropdown-item" data-value="Single" data-default-selected="" >Single</a>
//               <a class="dropdown-item" data-value="Couple">Couple</a>
//           </div>
//       </div>
//       <input class="d-none" name="RegType-${index} " readonly="readonly" aria-hidden="true" type="text"/>
//   </div>
//   <!-- Dropdown end -->
//     </td> 
//     <td scope="row"><select>
//     <option>Male</option>
//     <option>Female</option>
//     </select>
//     </td>

//     <td scope="row"><input type="fullName"></td>

//     <td scope="row"><input type="lastName"></td>
//     <td scope="row"><input type="position"></td>
//     <td scope="row"><input type="contactno"></td>
//     <td scope="row"><input type="email"></td>
//     <td scope="row"><input type="email"></td>
//     <td scope="row" class="dropdownMenuTable">
//     <!-- Dropdown start -->
//     <div class="dropdown hierarchy-select" id="Hotel1-${index}">
//       <button type="button" class="btn btn-secondary dropdown-toggle" id="Hotel1-${index}-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
//       <div class="dropdown-menu" aria-labelledby="example-two-button">
//           <div class="hs-searchbox">
//               <input type="text" class="form-control" autocomplete="off">
//           </div>
//           <div class="hs-menu-inner">
//               <a class="dropdown-item" data-value="Namaste" data-default-selected="" >Namaste</a>
//               <a class="dropdown-item" data-value="Barahi">Barahi</a>
//           </div>
//       </div>
//       <input class="d-none" name="Hotel1-${index} " readonly="readonly" aria-hidden="true" type="text"/>
//   </div>
//   <!-- Dropdown end -->
       
//     </td> 
//     <td scope="row" class="dropdownMenuTable">
//     <!-- Dropdown start -->
//     <div class="dropdown hierarchy-select" id="Hotel2-${index}">
//       <button type="button" class="btn btn-secondary dropdown-toggle" id="Hotel2-${index}-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
//       <div class="dropdown-menu" aria-labelledby="example-two-button">
//           <div class="hs-searchbox">
//               <input type="text" class="form-control" autocomplete="off">
//           </div>
//           <div class="hs-menu-inner">
//               <a class="dropdown-item" data-value="Grandi" data-default-selected="" >Gandi</a>
//               <a class="dropdown-item" data-value="Goodwill">Goodwill</a>
//           </div>
//       </div>
//       <input class="d-none" name="Hotel2-${index} " readonly="readonly" aria-hidden="true" type="text"/>
//   </div>
//   <!-- Dropdown end -->
       
//     </td>
//     <td scope="row" class="dropdownMenuTable">
//     <!-- Dropdown start -->
//     <div class="dropdown hierarchy-select" id="Hotel3-${index}">
//       <button type="button" class="btn btn-secondary dropdown-toggle" id="Hotel3-${index}-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
//       <div class="dropdown-menu" aria-labelledby="example-two-button">
//           <div class="hs-searchbox">
//               <input type="text" class="form-control" autocomplete="off">
//           </div>
//           <div class="hs-menu-inner">
//               <a class="dropdown-item" data-value="Mero Pokhara" data-default-selected="" >Mero Pokhara</a>
//               <a class="dropdown-item" data-value="Simoni">Simoni</a>
//           </div>
//       </div>
//       <input class="d-none" name="Hotel3-${index} " readonly="readonly" aria-hidden="true" type="text"/>
//   </div>
//   <!-- Dropdown end -->
     
//     </td> 
//     <td scope="row" class="dropdownMenuTable">
//     <!-- Dropdown start -->
//     <div class="dropdown hierarchy-select" id="food-preference1-${index}">
//       <button type="button" class="btn btn-secondary dropdown-toggle" id="food-preference1-${index}-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
//       <div class="dropdown-menu" aria-labelledby="example-two-button">
//           <div class="hs-searchbox">
//               <input type="text" class="form-control" autocomplete="off">
//           </div>
//           <div class="hs-menu-inner">
//               <a class="dropdown-item" data-value="Yes" data-default-selected="" >Yes</a>
//               <a class="dropdown-item" data-value="No">No</a>
//           </div>
//       </div>
//       <input class="d-none" name="food-preference1-${index} " readonly="readonly" aria-hidden="true" type="text"/>
//   </div>
//   <!-- Dropdown end -->
       
//     </td>
//     </tr>`;
//        if(noOFDelegates-index<1){
//             added = true;
//        }
//   }, 100);
  
// }});


// });
//  const initialize = setInterval(() => {
//     if(added){
//   const noOFDelegates = parseInt(document.querySelector("#lom_name").value)

        
//     for (let index = 0; index <=noOFDelegates; index++) {
//         $(`#delegateCategory-${index}`).hierarchySelect({
//             hierarchy: false,
//             width: 'auto'
//        });
//        $(`#RegType-${index}`).hierarchySelect({
//         hierarchy: false,
//         width: 'auto'
//        });
//         $(`#Hotel1-${index} `).hierarchySelect({
//         hierarchy: false,
//         width: 'auto'
//        });
//         $(`#Hotel2-${index} `).hierarchySelect({
//         hierarchy: false,
//         width: 'auto'
//        });
//         $(`#Hotel3-${index}`).hierarchySelect({
//         hierarchy: false,
//         width: 'auto'
//        });
//         $(`#food-preference1-${index}`).hierarchySelect({
//         hierarchy: false,
//         width: 'auto'
//        });
//     }
//     console.log("DOne")
//     clearInterval(initialize)
// }
// }, 1000);

$(`#delegateCategory-1`).hierarchySelect({
    hierarchy: false,
    width: 'auto'
});
$(`#RegType-1`).hierarchySelect({
hierarchy: false,
width: 'auto'
});
$(`#Hotel1-1`).hierarchySelect({
hierarchy: false,
width: 'auto'
});
$(`#Hotel2-1`).hierarchySelect({
hierarchy: false,
width: 'auto'
});
$(`#Hotel3-1`).hierarchySelect({
hierarchy: false,
width: 'auto'
});
$(`#food-preference1-1`).hierarchySelect({
hierarchy: false,
width: 'auto'
});