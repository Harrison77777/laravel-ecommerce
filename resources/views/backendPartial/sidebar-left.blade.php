<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{route('dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
            <li><a href="{{route('productIndex')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> MANAGE PRODUCTS</span></a></li>
            <li><a href="{{route('category.index')}}"><i class="icon-tasks"></i><span class="hidden-tablet">MANAGE 
            CATEGORIES</span></a></li>
            <li><a href="{{route('brand.index')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">MANAGE BRANDS</span></a></li>
            <li><a href="{{route('order.index')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> MANAGE ORDER</span></a></li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> SIT OPTION </span><span class="label label-important"> 3 </span></a>
                <ul>
                    <li>
                        <a class="submenu" href="{{route('slide.index')}}">
                            <i class="icon-file-alt"></i>
                            <span class="hidden-tablet">
                                Slide option
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="submenut" href="{{route('logo.index')}}">
                        <i class="icon-file-alt"></i>
                        <span class="hidden-tablet">
                            Change site logo
                        </span>
                        </a>
                     </li>
                    <li><a class="submenu" href="{{route('seo.index')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> SEO description edit</span></a></li>
                </ul>	
            </li>
            <li><a href="{{route('social.media.index')}}"><i class="icon-edit"></i><span class="hidden-tablet">MANAGE SOCIAL LINKS</span></a></li>
        </ul>
    </div>
</div>
<!-- end: Main Menu -->