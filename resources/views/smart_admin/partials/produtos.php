<div id="main" role="main">
  <sa-layout-switcher><div class="demo"><span id="demo-setting"><i class="fa fa-cog txt-color-blueDark"></i></span>

  <form novalidate="" class="ng-untouched ng-pristine ng-valid">
    <legend class="no-padding margin-bottom-10">Layout Options</legend>
    <section>
      <label><input class="checkbox style-0 ng-untouched ng-pristine ng-valid" name="fixedHeader" type="checkbox"><span>Fixed Header</span></label>
      <label><input class="checkbox style-0 ng-untouched ng-pristine ng-valid" name="fixedNavigation" type="checkbox"><span>Fixed Navigation</span></label>
      <label><input class="checkbox style-0 ng-untouched ng-pristine ng-valid" name="fixedRibbon" type="checkbox"><span>Fixed Ribbon</span></label>
      <label><input class="checkbox style-0 ng-untouched ng-pristine ng-valid" name="fixedPageFooter" type="checkbox"><span>Fixed Footer</span></label>
      <label><input class="checkbox style-0 ng-untouched ng-pristine ng-valid" name="insideContainer" type="checkbox"><span>Inside <b>.container</b></span></label>
      <label><input class="checkbox style-0 ng-untouched ng-pristine ng-valid" name="rtl" type="checkbox"><span>RTL</span></label>
      <label><input class="checkbox style-0 ng-untouched ng-pristine ng-valid" name="menuOnTop" type="checkbox"><span>Menu on <b>top</b></span></label>
      <label><input class="checkbox style-0 ng-untouched ng-pristine ng-valid" name="colorblindFriendly" type="checkbox"><span>For Colorblind <div class="font-xs text-right">(experimental)
            </div></span>
      </label><span id="smart-bgimages"></span></section>
    <section><h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a class="btn btn-xs btn-block btn-primary" id="reset-smart-widget"><i class="fa fa-refresh"></i> Factory Reset</a></section>

    <h6 class="margin-top-10 semi-bold margin-bottom-5">SmartAdmin Skins</h6>


    <section id="smart-styles">
          <!----><a class="btn btn-block btn-xs txt-color-white margin-right-5 ng-star-inserted" style="background-color: rgb(78, 70, 63);">
             <!----><i class="fa fa-check fa-fw ng-star-inserted"></i> Smart Default <!----></a><a class="btn btn-block btn-xs txt-color-white ng-star-inserted" style="background: rgb(58, 69, 88);">
             <!----> Dark Elegance <!----></a><a class="btn btn-xs btn-block txt-color-darken margin-top-5 ng-star-inserted" style="background: rgb(255, 255, 255);">
             <!----> Ultra Light <!----></a><a class="btn btn-xs btn-block txt-color-white margin-top-5 ng-star-inserted" style="background: rgb(247, 140, 64);">
             <!----> Google Skin <!----></a><a class="btn btn-xs btn-block txt-color-white margin-top-5 ng-star-inserted" style="background: rgb(187, 192, 207); border: 1px solid rgb(89, 119, 158);">
             <!----> PixelSmash <!----></a><a class="btn btn-xs btn-block txt-color-white margin-top-5 ng-star-inserted" style="background: rgba(153, 179, 204, 0.2); border: 1px solid rgba(121, 161, 221, 0.8);">
             <!----> Glass <!----></a>
        </section>
  </form>
</div>
</sa-layout-switcher>

  <sa-ribbon>
<div id="ribbon">
  <!---->

    <span class="ribbon-button-alignment">
      <span class="btn btn-ribbon" id="refresh" placement="bottom">
        <i class="fa fa-refresh"></i>
      </span>
    </span>
  <sa-route-breadcrumbs>
        <ol class="breadcrumb">
           <!----><li class="ng-star-inserted">Home</li><li class="ng-star-inserted">Forms</li><li class="ng-star-inserted">Plugins</li>
        </ol>
  </sa-route-breadcrumbs>
</div>
</sa-ribbon>

  <router-outlet></router-outlet><sa-form-plugins class="ng-star-inserted">
<div id="content">
  <div class="row">
    <sa-big-breadcrumbs class="col-xs-12 col-sm-7 col-md-7 col-lg-4" icon="pencil-square-o">
   <div><h1 class="page-title txt-color-blueDark">
   <i class="fa-fw fa fa-pencil-square-o"></i>Forms
   <!----><span class="ng-star-inserted">&gt; Form Plugins</span>
</h1></div>
  </sa-big-breadcrumbs>
    <sa-stats><div class="col-xs-12 col-sm-5 col-md-5 col-lg-8" sasparklinecontainer="">
  <ul class="" id="sparks">
    <li class="sparks-info">
      <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
      <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm"><canvas width="89" height="26" style="display: inline-block; width: 89px; height: 26px; vertical-align: top;"></canvas></div>
    </li>
    <li class="sparks-info">
      <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up"></i>&nbsp;45%</span></h5>
      <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm"><canvas width="82" height="26" style="display: inline-block; width: 82px; height: 26px; vertical-align: top;"></canvas></div>
    </li>
    <li class="sparks-info">
      <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
      <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm"><canvas width="82" height="26" style="display: inline-block; width: 82px; height: 26px; vertical-align: top;"></canvas></div>
    </li>
  </ul>
</div>
</sa-stats>
  </div>

  
  <sa-widgets-grid>
     <section class="sortable-grid" id="widgets-grid">
       

    
    <div class="row">

      
      <article class="col-sm-12 sortable-grid ui-sortable">

        
      
  
        <duallistbox-widget><div sa-widget="" class="jarviswidget jarviswidget-sortable" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" id="forms-plugins--bootstrap-duallist-box" role="widget">

  <header role="heading" class="ui-sortable-handle"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="Collapse" data-placement="bottom"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="Delete" data-placement="bottom"><i class="fa fa-times"></i></a></div>
    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
    <h2>Bootstrap Duallist Box  </h2>

  <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

  
  <div role="content">


    
    <div class="widget-body">


      <duallistbox size="10">
     <div class="bootstrap-duallistbox-container row"> <div class="box1 col-md-6 filtered">   <label for="bootstrap-duallistbox-nonselected-list_">Non-selected</label>   <span class="info-container">     <span class="info"><span class="label label-warning">Filtered</span> 4 from 18</span>     <button type="button" class="btn clear1 pull-right btn-default btn-xs">show all</button>   </span>   <input class="filter form-control" type="text" placeholder="Filter">   <div class="btn-group buttons">     <button type="button" class="btn moveall btn-default" title="Move all">       <i class="glyphicon glyphicon-arrow-right"></i>       <i class="glyphicon glyphicon-arrow-right"></i>     </button>     <button type="button" class="btn move btn-default" title="Move selected">       <i class="glyphicon glyphicon-arrow-right"></i>     </button>   </div>   <select multiple="multiple" id="bootstrap-duallistbox-nonselected-list_" class="form-control" name="_helper1" style="height: 102px;"><option value="option7" class="ng-star-inserted">Option 7</option><option value="option0" class="ng-star-inserted">Option 10</option><option value="option0" class="ng-star-inserted">Option 11</option><option value="option0" class="ng-star-inserted">Option 12</option></select> </div> <div class="box2 col-md-6">   <label for="bootstrap-duallistbox-selected-list_">Selected</label>   <span class="info-container">     <span class="info">Showing all 2</span>     <button type="button" class="btn clear2 pull-right btn-default btn-xs">show all</button>   </span>   <input class="filter form-control" type="text" placeholder="Filter">   <div class="btn-group buttons">     <button type="button" class="btn remove btn-default" title="Remove selected">       <i class="glyphicon glyphicon-arrow-left"></i>     </button>     <button type="button" class="btn removeall btn-default" title="Remove all">       <i class="glyphicon glyphicon-arrow-left"></i>       <i class="glyphicon glyphicon-arrow-left"></i>     </button>   </div>   <select multiple="multiple" id="bootstrap-duallistbox-selected-list_" class="form-control" name="_helper2" style="height: 102px;"><option value="option8" class="ng-star-inserted">Option 8</option><option value="option9" class="ng-star-inserted">Option 9</option></select> </div></div><select class="smart-duallistbox" multiple="" style="display: none;">
        <!----><option value="option1" class="ng-star-inserted">Option 1</option><option value="option2" class="ng-star-inserted">Option 2</option><option value="option3" class="ng-star-inserted">Option 3</option><option value="option4" class="ng-star-inserted">Option 4</option><option value="option5" class="ng-star-inserted">Option 5</option><option value="option6" class="ng-star-inserted">Option 6</option><option value="option7" class="ng-star-inserted">Option 7</option><option value="option8" class="ng-star-inserted">Option 8</option><option value="option9" class="ng-star-inserted">Option 9</option><option value="option0" class="ng-star-inserted">Option 10</option><option value="option0" class="ng-star-inserted">Option 11</option><option value="option0" class="ng-star-inserted">Option 12</option><option value="option0" class="ng-star-inserted">Option 13</option><option value="option0" class="ng-star-inserted">Option 14</option><option value="option0" class="ng-star-inserted">Option 15</option><option value="option0" class="ng-star-inserted">Option 16</option><option value="option0" class="ng-star-inserted">Option 17</option><option value="option0" class="ng-star-inserted">Option 18</option><option value="option0" class="ng-star-inserted">Option 19</option><option value="option0" class="ng-star-inserted">Option 20</option>
      </select>
  </duallistbox>

    </div>
    

  </div>
  

</div>
</duallistbox-widget>

      </article>
      

    </div>

    

    


    

  
     </section>
  </sa-widgets-grid>
  

</div>
</sa-form-plugins>
</div>