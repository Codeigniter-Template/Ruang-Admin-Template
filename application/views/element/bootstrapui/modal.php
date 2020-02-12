 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Modals</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item">Bootstrap UI</li>
             <li class="breadcrumb-item active" aria-current="page">Modals</li>
         </ol>
     </div>

     <!-- Row -->
     <div class="row">
         <div class="col-lg-6">
             <!-- Modal basic -->
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Modal Basic</h6>
                 </div>
                 <div class="card-body">
                     <p>Toggle a working modal demo by clicking the button below. It will slide down and fade in from the
                         top of the page.</p>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="#myBtn">
                         Launch demo modal
                     </button>
                 </div>
             </div>
             <!-- modal vertically centered -->
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Modal Vertically Centered</h6>
                 </div>
                 <div class="card-body">
                     <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the
                         modal.</p>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="#modalCenter">Launch Modal Vertically Centered</button>
                 </div>
             </div>
         </div>
         <div class="col-lg-6">
             <!-- Modal with scrolling long content -->
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Modal with scrolling long content</h6>
                 </div>
                 <div class="card-body">
                     <p>When modals become too long for the user’s viewport or device, they scroll independent of the page
                         itself. Try the demo below to see what we mean.</p>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" id="#modalLong">Launch Modal Long</button>

                     <p class="mt-3">You can also create a scrollable modal that allows scroll the modal body by adding
                         <code class="highlighter-rouge">.modal-dialog-scrollable</code> to <code class="highlighter-rouge">.modal-dialog</code>.</p>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable" id="#modalScroll">Launch Modal Srollable Title</button>
                 </div>
             </div>
         </div>
     </div>
     <!-- Row -->

     <!-- Documentation Link -->
     <div class="row">
         <div class="col-lg-12 text-center">
             <p>For more documentations you can visit<a href="http://localhost/templatedev/ruangadmin/modals.html" target="_blank"> bootstrap modals documentations.</a></p>
         </div>
     </div>


     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <p>You Content</p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
             </div>
         </div>
     </div>

     <!-- Modal Long -->
     <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">Modal Long</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <h5 class="font-weight-bold">Title</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                         et dolore magna aliqua. Ac orci phasellus egestas tellus rutrum tellus. Suspendisse sed nisi lacus
                         sed. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget dolor morbi non arcu risus
                         quis varius quam. Elit ullamcorper dignissim cras tincidunt. At risus viverra adipiscing at in
                         tellus integer feugiat. Dictum non consectetur a erat nam at lectus urna. Est velit egestas dui id.
                         Sed id semper risus in hendrerit. Malesuada fames ac turpis egestas maecenas pharetra convallis
                         posuere. Pretium vulputate sapien nec sagittis aliquam. In hendrerit gravida rutrum quisque non.
                         Neque ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Lacus luctus accumsan
                         tortor posuere. Urna molestie at elementum eu facilisis. Neque egestas congue quisque egestas diam.
                         Turpis egestas integer eget aliquet nibh praesent. Egestas dui id ornare arcu odio ut.</p>
                     <h5 class="font-weight-bold">Title</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                         et dolore magna aliqua. Lacinia quis vel eros donec. Nec tincidunt praesent semper feugiat nibh sed
                         pulvinar proin gravida. Urna cursus eget nunc scelerisque viverra mauris in. Risus sed vulputate
                         odio ut enim blandit volutpat maecenas. Etiam sit amet nisl purus in mollis nunc. Aliquet bibendum
                         enim facilisis gravida neque convallis a. Aliquam id diam maecenas ultricies mi eget mauris. Et
                         malesuada fames ac turpis egestas sed. Venenatis cras sed felis eget.</p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
             </div>
         </div>
     </div>

     <!-- Modal Scrollable -->
     <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalScrollableTitle">Modal scrollable title</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <h5 class="font-weight-bold">Title</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                         et dolore magna aliqua. Ac orci phasellus egestas tellus rutrum tellus. Suspendisse sed nisi lacus
                         sed. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget dolor morbi non arcu risus
                         quis varius quam. Elit ullamcorper dignissim cras tincidunt. At risus viverra adipiscing at in
                         tellus integer feugiat. Dictum non consectetur a erat nam at lectus urna. Est velit egestas dui id.
                         Sed id semper risus in hendrerit. Malesuada fames ac turpis egestas maecenas pharetra convallis
                         posuere. Pretium vulputate sapien nec sagittis aliquam. In hendrerit gravida rutrum quisque non.
                         Neque ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Lacus luctus accumsan
                         tortor posuere. Urna molestie at elementum eu facilisis. Neque egestas congue quisque egestas diam.
                         Turpis egestas integer eget aliquet nibh praesent. Egestas dui id ornare arcu odio ut.</p>
                     <h5 class="font-weight-bold">Title</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                         et dolore magna aliqua. Lacinia quis vel eros donec. Nec tincidunt praesent semper feugiat nibh sed
                         pulvinar proin gravida. Urna cursus eget nunc scelerisque viverra mauris in. Risus sed vulputate
                         odio ut enim blandit volutpat maecenas. Etiam sit amet nisl purus in mollis nunc. Aliquet bibendum
                         enim facilisis gravida neque convallis a. Aliquam id diam maecenas ultricies mi eget mauris. Et
                         malesuada fames ac turpis egestas sed. Venenatis cras sed felis eget.</p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
             </div>
         </div>
     </div>

     <!-- Modal Center -->
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalCenterTitle">Modal Vertically Centered</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     Your Content
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
             </div>
         </div>
     </div>

 </div>
 <!---Container Fluid-->