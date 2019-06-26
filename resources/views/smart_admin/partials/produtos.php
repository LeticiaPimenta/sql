<script src="/smart_admin/js/plugin/bootstrap-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

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
   <i class="fa-fw fa fa-pencil-square-o"></i>Produtos
   <!----><span class="ng-star-inserted">&gt; Catalogo</span>
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
    <h2>Administrar Catalogo  </h2>

  <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

  
  <div role="content">


    
    <div class="widget-body">


     <select multiple="multiple" size="10" name="duallistbox_demo2" class="demo2">
        <option value="option1">Produto 1</option>
        <option value="option2">Produto 2</option>
        <option value="option3" selected="selected">Produto 3</option>
        <option value="option4">Produto 4</option>
        <option value="option5">Produto 5</option>
        <option value="option6" selected="selected">Produto 6</option>
        <option value="option7">Produto 7</option>
        <option value="option8">Produto 8</option>
        <option value="option9">Produto 9</option>
        <option value="option0">Produto 10</option>
        <option value="option0">Produto 11</option>
        <option value="option0">Produto 12</option>
        <option value="option0">Produto 13</option>
        <option value="option0">Produto 14</option>
        <option value="option0">Produto 15</option>
        <option value="option0">Produto 16</option>
        <option value="option0">Produto 17</option>
        <option value="option0">Produto 18</option>
        <option value="option0">Produto 19</option>
        <option value="option0">Produto 20</option>
      </select>
      <script>
        var demo2 = $('.demo2').bootstrapDualListbox({
          nonSelectedListLabel: 'Não Selecionados',
          selectedListLabel: 'Selecionados',
          preserveSelectionOnMove: 'movido',
          moveOnSelect: false,
          nonSelectedFilter: 'uto ([7-9]|[1][0-2])'
        });
      </script>

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