 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Forms</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Forms</li>
         </ol>
     </div>

     <div class="row">
         <div class="col-lg-6">
             <!-- Form Basic -->
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                 </div>
                 <div class="card-body">
                     <form>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Email address</label>
                             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                             <small id="emailHelp" class="form-text text-muted">We'll never share your
                                 email with anyone else.</small>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                         </div>
                         <div class="form-group">
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="customFile">
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                 <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                             </div>
                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                 </div>
             </div>

             <!-- Form Sizing -->
             <div class="card mb-3">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Sizing</h6>
                 </div>
                 <div class="card-body">
                     <p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code> and <code class="highlighter-rouge">.form-control-sm</code>.</p>
                     <p>Example for form general</p>
                     <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg">
                     <input class="form-control  mb-3" type="text" placeholder="Default input">
                     <input class="form-control form-control-sm  mb-3" type="text" placeholder=".form-control-sm">
                     <p>Example for Select</p>
                     <select class="form-control form-control-lg  mb-3">
                         <option>Large select</option>
                     </select>
                     <select class="form-control mb-3">
                         <option>Default select</option>
                     </select>
                     <select class="form-control form-control-sm mb-3">
                         <option>Small select</option>
                     </select>
                 </div>
             </div>

             <!-- Horizontal Form -->
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Horizontal Form</h6>
                 </div>
                 <div class="card-body">
                     <form>
                         <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                             <div class="col-sm-9">
                                 <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                             <div class="col-sm-9">
                                 <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                             </div>
                         </div>
                         <fieldset class="form-group">
                             <div class="row">
                                 <legend class="col-form-label col-sm-3 pt-0">Radios</legend>
                                 <div class="col-sm-9">
                                     <div class="custom-control custom-radio">
                                         <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                         <label class="custom-control-label" for="customRadio1">First Radio</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                         <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                         <label class="custom-control-label" for="customRadio2">Second Radio</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                         <input type="radio" name="radioDisabled" id="customRadioDisabled1" class="custom-control-input" disabled>
                                         <label class="custom-control-label" for="customRadioDisabled1">Third Radio Disabled</label>
                                     </div>
                                 </div>
                             </div>
                         </fieldset>
                         <div class="form-group row">
                             <div class="col-sm-3">Checkbox</div>
                             <div class="col-sm-9">
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="customCheck1">
                                     <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group row">
                             <div class="col-sm-10">
                                 <button type="submit" class="btn btn-primary">Sign in</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>

         <div class="col-lg-6">
             <!-- General Element -->
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">General Element</h6>
                 </div>
                 <div class="card-body">
                     <form>
                         <div class="form-group">
                             <label for="exampleFormControlInput1">Email address</label>
                             <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                         </div>
                         <div class="form-group">
                             <label for="exampleFormControlSelect1">Example select</label>
                             <select class="form-control" id="exampleFormControlSelect1">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="exampleFormControlSelect2">Example multiple select</label>
                             <select multiple class="form-control" id="exampleFormControlSelect2">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Example textarea</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="exampleFormControlReadonly">Readonly</label>
                             <input class="form-control" type="text" placeholder="Readonly input here..." id="exampleFormControlReadonly" readonly>
                         </div>
                         <div class="form-group">
                             <label for="validationServer01">Input with Success</label>
                             <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Input with Success" value="Mark" required>
                             <div class="valid-feedback">
                                 Looks good!
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="validationServer03">Input with Error</label>
                             <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Input with Error" required>
                             <div class="invalid-feedback">
                                 Please provide a valid city.
                             </div>
                         </div>
                         <div class="form-group">
                             <label>Checkbox</label>
                             <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck2">
                                 <label class="custom-control-label" for="customCheck2">Check this custom checkbox 1</label>
                             </div>
                             <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck3">
                                 <label class="custom-control-label" for="customCheck3">Check this custom checkbox 2</label>
                             </div>
                             <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheckDisabled1" disabled>
                                 <label class="custom-control-label" for="customCheckDisabled1">Check this custom
                                     checkbox</label>
                             </div>
                         </div>
                         <div class="form-group">
                             <label>Radio Button</label>
                             <div class="custom-control custom-radio">
                                 <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                 <label class="custom-control-label" for="customRadio3">Toggle this custom radio</label>
                             </div>
                             <div class="custom-control custom-radio">
                                 <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                 <label class="custom-control-label" for="customRadio4">Or toggle this other custom radio</label>
                             </div>
                             <div class="custom-control custom-radio">
                                 <input type="radio" name="radioDisabled" id="customRadioDisabled2" class="custom-control-input" disabled>
                                 <label class="custom-control-label" for="customRadioDisabled2">Toggle this custom radio</label>
                             </div>
                         </div>
                         <div class="form-group">
                             <label>Switches</label>
                             <div class="custom-control custom-switch">
                                 <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                 <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                             </div>
                             <div class="custom-control custom-switch">
                                 <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                 <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
             <!-- Input Group -->
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Input Group</h6>
                 </div>
                 <div class="card-body">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                             <span class="input-group-text" id="basic-addon1">@</span>
                         </div>
                         <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                     </div>
                     <div class="input-group mb-3">
                         <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                         <div class="input-group-append">
                             <span class="input-group-text" id="basic-addon2">@example.com</span>
                         </div>
                     </div>
                     <label for="basic-url">Your vanity URL</label>
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                             <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                         </div>
                         <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                     </div>
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                             <span class="input-group-text">$</span>
                         </div>
                         <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                         <div class="input-group-append">
                             <span class="input-group-text">.00</span>
                         </div>
                     </div>
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                             <span class="input-group-text">With textarea</span>
                         </div>
                         <textarea class="form-control" aria-label="With textarea"></textarea>
                     </div>
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                             <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                                 <div role="separator" class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#">Separated link</a>
                             </div>
                         </div>
                         <input type="text" class="form-control" aria-label="Text input with dropdown button">
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--Row-->

     <!-- Documentation Link -->
     <div class="row">
         <div class="col-lg-12 text-center">
             <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/" target="_blank">
                     bootstrap forms documentations.</a> and <a href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                     groups documentations</a></p>
         </div>
     </div>

 </div>
 <!---Container Fluid-->