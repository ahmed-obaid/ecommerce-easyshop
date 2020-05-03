@extends('backend.layout.app')
 
 @section('title')
        homepage
 @endsection

 @section('content')

  
<div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">products</p>
                  <h3 class="card-title"> {{App\models\product::count()}} </h3>                            
                </div>
                <div class="card-footer">
                  <div class="stats"> 
                    <a href="{{route('products.index')}} " class="warning-link">all products</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">types</p>
                  <h3 class="card-title"> {{App\models\type::count()}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
              <a href="{{route('types.index')}}  " class="warning-link">
              <i class="material-icons">date_range</i> 
              all skill</a> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">categories</p>
                  <h3 class="card-title"> {{App\models\category::count()}} </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="{{route('categories.index')}} " class="warning-link">
                    <i class="material-icons">local_offer</i>
                    all categories </a>  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
               <div class="card-header card-header-info card-header-icon">
                 <div class="card-icon">
                   <i class="material-icons">person</i>
                 </div>
                  <p class="card-category">users</p>
                  <h3 class="card-title">{{App\models\user::count()}}  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <a href="{{route('users.index')}}  " class="warning-link">
                   all users 
                 </a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
<!--====================== latest comment =============== -->
 

 @endsection


