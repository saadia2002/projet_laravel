@extends('adminlte::page')

@section('title')
home
@endsection
@section('content_header')
dashboard
@endsection

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-4">
            <div class="small-box bg-success">
             <div class="inner">
                <h3>{{App\Models\voyageur::count()}}</h3>
                <p><h4>Travelers</h4></p>
             </div>
             <div class="icon">
                <i class="fas fa-users"></i>
             </div>
             <a href="{{URL::to('/listvoy')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
             </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-warning">
             <div class="inner">
                <h3>{{App\Models\avion::count()}}</h3>
                <p><h4>Flights</h4></p>
             </div>
             <div class="icon">
                <i class="fas fa-plane"></i>
             </div>
             <a href="{{URL::to('/avion')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
             </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-info">
             <div class="inner">
                <h3>{{App\Models\reservation::count()}}</h3>
                <p><h4>reservations</h4></p>
             </div>
             <div class="icon">
                <i class="fas fa-clipboard-check"></i>
             </div>
             <a href="{{URL::to('/reservation')}}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
             </a>
            </div>
        </div>


<section class="col-lg-7 connectedSortable ui-sortable">

   <div class="card">
   <div class="card-header ui-sortable-handle" style="cursor: move;">

   <div class="card">
   <div class="card-header ui-sortable-handle" style="cursor: move;">
   <h3 class="card-title">
   <i class="ion ion-clipboard mr-1"></i>
   To Do List
   </h3>
   <div class="card-tools">
   <ul class="pagination pagination-sm">
   <li class="page-item"><a href="#" class="page-link">«</a></li>
   <li class="page-item"><a href="#" class="page-link">1</a></li>
   <li class="page-item"><a href="#" class="page-link">2</a></li>
   <li class="page-item"><a href="#" class="page-link">3</a></li>
   <li class="page-item"><a href="#" class="page-link">»</a></li>
   </ul>
   </div>
   </div>
   
   <div class="card-body">
   <ul class="todo-list ui-sortable" data-widget="todo-list">
   <li>
   
   <span class="handle ui-sortable-handle">
   <i class="fas fa-ellipsis-v"></i>
   <i class="fas fa-ellipsis-v"></i>
   </span>
   
   <div class="icheck-primary d-inline ml-2">
   <input type="checkbox" value="" name="todo1" id="todoCheck1">
   <label for="todoCheck1"></label>
   </div>
   
   <span class="text">Design a nice theme</span>
   
   <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
   
   <div class="tools">
   <i class="fas fa-edit"></i>
   <i class="fas fa-trash-o"></i>
   </div>
   </li>
   <li class="done">
   <span class="handle ui-sortable-handle">
   <i class="fas fa-ellipsis-v"></i>
   <i class="fas fa-ellipsis-v"></i>
   </span>
   <div class="icheck-primary d-inline ml-2">
   <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
   <label for="todoCheck2"></label>
   </div>
   <span class="text">Make the theme responsive</span>
   <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
   <div class="tools">
   <i class="fas fa-edit"></i>
   <i class="fas fa-trash-o"></i>
   </div>
   </li>
   <li>
   <span class="handle ui-sortable-handle">
   <i class="fas fa-ellipsis-v"></i>
   <i class="fas fa-ellipsis-v"></i>
   </span>
   <div class="icheck-primary d-inline ml-2">
   <input type="checkbox" value="" name="todo3" id="todoCheck3">
   <label for="todoCheck3"></label>
   </div>
   <span class="text">Let theme shine like a star</span>
   <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
   <div class="tools">
   <i class="fas fa-edit"></i>
   <i class="fas fa-trash-o"></i>
   </div>
   </li>
   <li>
   <span class="handle ui-sortable-handle">
   <i class="fas fa-ellipsis-v"></i>
   <i class="fas fa-ellipsis-v"></i>
   </span>
   <div class="icheck-primary d-inline ml-2">
   <input type="checkbox" value="" name="todo4" id="todoCheck4">
   <label for="todoCheck4"></label>
   </div>
   <span class="text">Let theme shine like a star</span>
   <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
   <div class="tools">
   <i class="fas fa-edit"></i>
   <i class="fas fa-trash-o"></i>
   </div>
   </li>
   <li>
   <span class="handle ui-sortable-handle">
   <i class="fas fa-ellipsis-v"></i>
   <i class="fas fa-ellipsis-v"></i>
   </span>
   <div class="icheck-primary d-inline ml-2">
   <input type="checkbox" value="" name="todo5" id="todoCheck5">
   <label for="todoCheck5"></label>
   </div>
   <span class="text">Check your messages and notifications</span>
   <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
   <div class="tools">
   <i class="fas fa-edit"></i>
   <i class="fas fa-trash-o"></i>
   </div>
   </li>
   <li>
   <span class="handle ui-sortable-handle">
   <i class="fas fa-ellipsis-v"></i>
   <i class="fas fa-ellipsis-v"></i>
   </span>
   <div class="icheck-primary d-inline ml-2">
   <input type="checkbox" value="" name="todo6" id="todoCheck6">
   <label for="todoCheck6"></label>
   </div>
   <span class="text">Let theme shine like a star</span>
   <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
   <div class="tools">
   <i class="fas fa-edit"></i>
   <i class="fas fa-trash-o"></i>
    </div>
   </li>
   </ul>
   </div>

   </div>
   
   </section>
   
   
   <section class="col-lg-5 connectedSortable ui-sortable">
   
   <div class="card bg-gradient-primary">
   <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">  
   <div class="card bg-gradient-success">
   <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
   <h3 class="card-title">
   <i class="far fa-calendar-alt"></i>
   Calendar
   </h3>
   
   <div class="card-tools">
   
   <div class="btn-group">
   <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
   <i class="fas fa-bars"></i>
   </button>
   <div class="dropdown-menu" role="menu">
   <a href="#" class="dropdown-item">Add new event</a>
   <a href="#" class="dropdown-item">Clear events</a>
   <div class="dropdown-divider"></div>
   <a href="#" class="dropdown-item">View calendar</a>
   </div>
   </div>
   <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
   <i class="fas fa-minus"></i>
   </button>
   <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
   <i class="fas fa-times"></i>
   </button>
   </div>
   
   </div>
   
   <div class="card-body pt-0">
   
   <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">May 2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="04/30/2023" class="day old weekend">30</td><td data-action="selectDay" data-day="05/01/2023" class="day">1</td><td data-action="selectDay" data-day="05/02/2023" class="day">2</td><td data-action="selectDay" data-day="05/03/2023" class="day">3</td><td data-action="selectDay" data-day="05/04/2023" class="day">4</td><td data-action="selectDay" data-day="05/05/2023" class="day">5</td><td data-action="selectDay" data-day="05/06/2023" class="day weekend">6</td></tr><tr><td data-action="selectDay" data-day="05/07/2023" class="day weekend">7</td><td data-action="selectDay" data-day="05/08/2023" class="day">8</td><td data-action="selectDay" data-day="05/09/2023" class="day">9</td><td data-action="selectDay" data-day="05/10/2023" class="day">10</td><td data-action="selectDay" data-day="05/11/2023" class="day">11</td><td data-action="selectDay" data-day="05/12/2023" class="day">12</td><td data-action="selectDay" data-day="05/13/2023" class="day weekend">13</td></tr><tr><td data-action="selectDay" data-day="05/14/2023" class="day weekend">14</td><td data-action="selectDay" data-day="05/15/2023" class="day">15</td><td data-action="selectDay" data-day="05/16/2023" class="day">16</td><td data-action="selectDay" data-day="05/17/2023" class="day">17</td><td data-action="selectDay" data-day="05/18/2023" class="day">18</td><td data-action="selectDay" data-day="05/19/2023" class="day">19</td><td data-action="selectDay" data-day="05/20/2023" class="day weekend">20</td></tr><tr><td data-action="selectDay" data-day="05/21/2023" class="day weekend">21</td><td data-action="selectDay" data-day="05/22/2023" class="day">22</td><td data-action="selectDay" data-day="05/23/2023" class="day active today">23</td><td data-action="selectDay" data-day="05/24/2023" class="day">24</td><td data-action="selectDay" data-day="05/25/2023" class="day">25</td><td data-action="selectDay" data-day="05/26/2023" class="day">26</td><td data-action="selectDay" data-day="05/27/2023" class="day weekend">27</td></tr><tr><td data-action="selectDay" data-day="05/28/2023" class="day weekend">28</td><td data-action="selectDay" data-day="05/29/2023" class="day">29</td><td data-action="selectDay" data-day="05/30/2023" class="day">30</td><td data-action="selectDay" data-day="05/31/2023" class="day">31</td><td data-action="selectDay" data-day="06/01/2023" class="day new">1</td><td data-action="selectDay" data-day="06/02/2023" class="day new">2</td><td data-action="selectDay" data-day="06/03/2023" class="day new weekend">3</td></tr><tr><td data-action="selectDay" data-day="06/04/2023" class="day new weekend">4</td><td data-action="selectDay" data-day="06/05/2023" class="day new">5</td><td data-action="selectDay" data-day="06/06/2023" class="day new">6</td><td data-action="selectDay" data-day="06/07/2023" class="day new">7</td><td data-action="selectDay" data-day="06/08/2023" class="day new">8</td><td data-action="selectDay" data-day="06/09/2023" class="day new">9</td><td data-action="selectDay" data-day="06/10/2023" class="day new weekend">10</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month active">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year active">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
   </div>
   
   </div>
   
   </section>
   
   
    </div>
</div>

@section('js')
@if(session()->has('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{session()->get('success')}}",
            showConfirmButton: false,
            timer: 2500
        });
    </script>
@endif
@endsection
@endsection