@extends('layouts/backendLayout')
@push('css')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<style>
    .statbox .number {
        font-size: 41px;
        position: absolute;
        top: 10px;
        right: 13px;
        display: flex;
        justify-content: center;
        align-items: center;
        align-self: center;
    }
</style>
@endpush
@section("backContent")

<div class="container-fluid-full">
    <div class="row-fluid">
            
      @include('backendPartial.sidebar-left')
        
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>
        
        <!-- start: Content -->
        <div id="content" class="span10">
    
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a> 
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Dashboard</a></li>
        </ul>
        <div class="row-fluid">
            
            <div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
                <div class="boxchart">Total product</div>
                <div class="number">{{$countProduct}}  <i class="fa fa-briefcase"></i></div>	
            </div>
            <div class="span3 statbox green" onTablet="span6" onDesktop="span3">
                <div class="boxchart">Total Category</div>
                <div class="number">{{$countCategory}}<i class="icon-arrow-up"></i></div>
              
            </div>
            <div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
                <div class="boxchart">Total unshifted order</div>
                <div class="number">{{$countUnpaidOrder}}<i class="icon-arrow-up"></i></div>
                <div class="title">orders</div>
                <div class="footer">
                    <a href="#"> read full report</a>
                </div>
            </div>
            <div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
                <div class="boxchart">Total Verified users</div>
                <div class="number">{{$countActivatedUser}}<i class="icon-arrow-down"></i></div>
                <div class="title">visits</div>
                <div class="footer">
                    <a href="#"> read full report</a>
                </div>
            </div>	
            
        </div>		

     
        
         <div class="row-fluid hideInIE8 circleStats">
            <div class="span2" onTablet="span4" onDesktop="span2">
                <div class="circleStatsItemBox yellow">
                    <div class="header">Disk Space Usage</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <input type="text" value="58" class="whiteCircle" />
                    </div>		
                    <div class="footer">
                        <span class="count">
                            <span class="number">20000</span>
                            <span class="unit">MB</span>
                        </span>
                        <span class="sep"> / </span>
                        <span class="value">
                            <span class="number">50000</span>
                            <span class="unit">MB</span>
                        </span>	
                    </div>
                </div>
            </div>

            {{-- <div class="span2" onTablet="span4" onDesktop="span2">
                <div class="circleStatsItemBox green">
                    <div class="header">Bandwidth</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <input type="text" value="78" class="whiteCircle" />
                    </div>
                    <div class="footer">
                        <span class="count">
                            <span class="number">5000</span>
                            <span class="unit">GB</span>
                        </span>
                        <span class="sep"> / </span>
                        <span class="value">
                            <span class="number">5000</span>
                            <span class="unit">GB</span>
                        </span>	
                    </div>
                </div>
            </div> --}}
{{-- 
            <div class="span2" onTablet="span4" onDesktop="span2">
                <div class="circleStatsItemBox greenDark">
                    <div class="header">Memory</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <input type="text" value="100" class="whiteCircle" />
                    </div>
                    <div class="footer">
                        <span class="count">
                            <span class="number">64</span>
                            <span class="unit">GB</span>
                        </span>
                        <span class="sep"> / </span>
                        <span class="value">
                            <span class="number">64</span>
                            <span class="unit">GB</span>
                        </span>	
                    </div>
                </div>
            </div> --}}

            {{-- <div class="span2 noMargin" onTablet="span4" onDesktop="span2">
                <div class="circleStatsItemBox pink">
                    <div class="header">CPU</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <input type="text" value="83" class="whiteCircle" />
                    </div>
                    <div class="footer">
                        <span class="count">
                            <span class="number">64</span>
                            <span class="unit">GHz</span>
                        </span>
                        <span class="sep"> / </span>
                        <span class="value">
                            <span class="number">3.2</span>
                            <span class="unit">GHz</span>
                        </span>	
                    </div>
                </div>
            </div> --}}

            {{-- <div class="span2" onTablet="span4" onDesktop="span2">
                <div class="circleStatsItemBox orange">
                    <div class="header">Memory</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <input type="text" value="100" class="whiteCircle" />
                    </div>
                    <div class="footer">
                        <span class="count">
                            <span class="number">64</span>
                            <span class="unit">GB</span>
                        </span>
                        <span class="sep"> / </span>
                        <span class="value">
                            <span class="number">64</span>
                            <span class="unit">GB</span>
                        </span>	
                    </div>
                </div>
            </div> --}}

            {{-- <div class="span2" onTablet="span4" onDesktop="span2">
                <div class="circleStatsItemBox greenLight">
                    <div class="header">Memory</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <input type="text" value="100" class="whiteCircle" />
                    </div>
                    <div class="footer">
                        <span class="count">
                            <span class="number">64</span>
                            <span class="unit">GB</span>
                        </span>
                        <span class="sep"> / </span>
                        <span class="value">
                            <span class="number">64</span>
                            <span class="unit">GB</span>
                        </span>	
                    </div>
                </div>
            </div>         --}}
        </div>		
                    
      

        
        

        <!-- end: Content -->
    </div><!--/#content.span10-->
    </div><!--/fluid-row-->
    
 <div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div> 

<div class="clearfix"></div>

@endsection	
@push('script')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
@endpush
	