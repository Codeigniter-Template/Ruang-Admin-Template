 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Charts</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Charts</li>
         </ol>
     </div>
     <!-- Row -->
     <div class="row">
         <!-- Area Charts -->
         <div class="col-lg-12">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                 </div>
                 <div class="card-body">
                     <div class="chart-area">
                         <canvas id="myAreaChart"></canvas>
                     </div>
                     <hr>
                     Styling for the area chart can be found in the
                     <code>/js/demo/chart-area-demo.js</code> file.
                 </div>
             </div>
         </div>
         <!-- Bar Chart -->
         <div class="col-lg-8">
             <div class="card shadow mb-4">
                 <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                 </div>
                 <div class="card-body">
                     <div class="chart-bar">
                         <canvas id="myBarChart"></canvas>
                     </div>
                     <hr>
                     Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file.
                 </div>
             </div>
         </div>
         <!-- Donut Chart -->
         <div class="col-lg-4">
             <div class="card shadow mb-4">
                 <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                 </div>
                 <div class="card-body">
                     <div class="chart-pie pt-4">
                         <canvas id="myPieChart"></canvas>
                     </div>
                     <hr>
                     Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
                 </div>
             </div>
         </div>
     </div>
     <!--Row-->

     <!-- Documentation Link -->
     <div class="row">
         <div class="col-lg-12">
             <p class="mb-4">Chart.js is a third party plugin that is used to generate the charts in this theme. The
                 charts below have been customized - for further customization options, please visit the <a target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js documentation</a>.</p>
         </div>
     </div>

 </div>
 <!---Container Fluid-->