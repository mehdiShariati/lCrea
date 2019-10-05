
<!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">منو</li>
        <li class="">
          <a href="<?= URL_ROOT ?>/Home/index">
            <i class="fa fa-dashboard"></i> <span>داشبورد</span>
          </a>

        </li>





        <li class="treeview">
                  <a href="#">
                      <i class="fa fa-users"></i>
                      <span> لندینگ ها</span>
                      <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                  </a>
                  <!-- if u want to opem menu custom use this style='display:block'-->
                  <ul class="treeview-menu">

                      <li class='active'>
                          <a href="<?= URL_ROOT ?>/Factories/manageServices"><i class="fa fa-circle-o"></i>
                               مدیریت سرویس</a>
                      </li>

                      <li class='active'>
                          <a href="<?= URL_ROOT ?>/Factories/showAllLandings"><i class="fa fa-circle-o"></i>
                              مدیریت لندینگ ها</a>
                      </li>

                      <li class='active'>
                          <a href="<?= URL_ROOT ?>/Factories/manageCampains"><i class="fa fa-circle-o"></i>
                              مدیریت کمپین ها </a>
                      </li>


                   


                  </ul>

              </li>

</ul>