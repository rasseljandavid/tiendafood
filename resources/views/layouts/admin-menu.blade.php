<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingZero">
      <h4 class="panel-title">
        <a href="/admin" style="color: #3097d1">
          Dashboard
        </a>
      </h4>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Orders
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
            <ul class="list-group">
                <li class="list-group-item"><a href="/orders">New Orders  
                  @if($neworders > 0)
                  <span class="badge">{{$neworders}}</span></a>
                  @endif
                </li>
                <li class="list-group-item"><a href="/orders/completed">Completed Orders</a></li>
            </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Menus
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <ul class="list-group">
                <li class="list-group-item"><a href="/products">List Menus</a></li>
                <li class="list-group-item"><a href="/products/create">Add New Menu</a></li>
            </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Companies
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
            <li class="list-group-item"><a href="/companies">List Companies</a></li>
            <li class="list-group-item"><a href="/companies/create">Add New Company</a></li>
            <!-- <li class="list-group-item"><a href="">Sign up Companies</a></li> -->
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingZero">
      <h4 class="panel-title">
        <a href="/siteconfig" style="color: #3097d1">
          Site Config
        </a>
      </h4>
    </div>
  </div>

</div>