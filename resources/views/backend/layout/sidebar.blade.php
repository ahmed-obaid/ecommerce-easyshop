<div class="logo">
        <a href="{{route('home')}}" class="simple-text logo-normal">
          easyshop
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   {{is_active('admin')}} ">
            <a class="nav-link" href="{{route('admin.home')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
         
          <li class="nav-item  {{is_active('users')}} ">
            <a class="nav-link" href="{{route('users.index')}}">
              <i class="material-icons">person</i>
              <p>users</p>
            </a>
          </li>
         
          <li class="nav-item   {{is_active('categories')}} ">
            <a class="nav-link" href="{{route('categories.index')}}">
              <i class="material-icons">bubble_chart</i>
              <p>categories</p>
            </a>
          </li>
          <li class="nav-item   {{is_active('products')}} ">
            <a class="nav-link" href="{{route('products.index')}}">
              <i class="material-icons">bubble_chart</i>
              <p>products</p>
            </a>
          </li>
         
          <li class="nav-item   {{is_active('types')}} ">
            <a class="nav-link" href="{{route('types.index')}}">
              <i class="material-icons">content_paste</i>
              <p>types</p>
            </a>
          </li>
       
          <li class="nav-item   {{is_active('messages')}} ">
            <a class="nav-link" href="{{route('messages.index')}}">
              <i class="material-icons">cloud</i>
              <p>massages</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>