<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu de opciones</li>
        <!-- Optionally, you can add icons to the links -->
        <!--<li class="active"><a href="{{route('login')}}"><i class="fa fa-link"></i> <span>Login</span></a></li>-->
        @foreach($menu_sid as $item)
        <li><a href="#"><i class="fa fa-link"></i> <span>{{$item->nombre}}</span></a></li>
        @endforeach()
       <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>-->
      </ul>
