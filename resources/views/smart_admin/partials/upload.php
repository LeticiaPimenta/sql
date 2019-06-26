
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
           <!----><li class="ng-star-inserted">Home</li><li class="ng-star-inserted">Produtos</li><li class="ng-star-inserted">Envio</li>
        </ol>
  </sa-route-breadcrumbs>
</div>
</sa-ribbon>

  <router-outlet></router-outlet><sa-dropzone-showcase class="ng-star-inserted"><div id="content">
  <div class="row">
    <sa-big-breadcrumbs class="col-xs-12 col-sm-7 col-md-7 col-lg-4" icon="pencil-square-o">
   <div><h1 class="page-title txt-color-blueDark">
   <i class="fa-fw fa fa-pencil-square-o"></i>Produtos
   <!----><span class="ng-star-inserted">&gt; Envio</span>
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

     
        <p>
				<span class="label label-warning">
				Aviso </span> &nbsp; Envie aqui o arquivo de produto para atualizar o catalogo
        </p>

        
        <div color="blueLight" sa-widget="" class="jarviswidget jarviswidget-sortable jarviswidget-color-blueLight" data-widget-editbutton="false" data-widget-custombutton="false" id="forms-dropzone--my-dropzone-" role="widget">
          <header role="heading" class="ui-sortable-handle"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="Collapse" data-placement="bottom"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="Delete" data-placement="bottom"><i class="fa fa-times"></i></a></div><div class="widget-toolbar" role="menu"><a data-toggle="dropdown" class="dropdown-toggle color-box selector" href="javascript:void(0);"></a><ul class="dropdown-menu arrow-box-up-right color-select pull-right"><li><span class="bg-color-green" data-widget-setstyle="jarviswidget-color-green" rel="tooltip" data-placement="left" data-original-title="Green Grass"></span></li><li><span class="bg-color-greenDark" data-widget-setstyle="jarviswidget-color-greenDark" rel="tooltip" data-placement="top" data-original-title="Dark Green"></span></li><li><span class="bg-color-greenLight" data-widget-setstyle="jarviswidget-color-greenLight" rel="tooltip" data-placement="top" data-original-title="Light Green"></span></li><li><span class="bg-color-purple" data-widget-setstyle="jarviswidget-color-purple" rel="tooltip" data-placement="top" data-original-title="Purple"></span></li><li><span class="bg-color-magenta" data-widget-setstyle="jarviswidget-color-magenta" rel="tooltip" data-placement="top" data-original-title="Magenta"></span></li><li><span class="bg-color-pink" data-widget-setstyle="jarviswidget-color-pink" rel="tooltip" data-placement="right" data-original-title="Pink"></span></li><li><span class="bg-color-pinkDark" data-widget-setstyle="jarviswidget-color-pinkDark" rel="tooltip" data-placement="left" data-original-title="Fade Pink"></span></li><li><span class="bg-color-blueLight" data-widget-setstyle="jarviswidget-color-blueLight" rel="tooltip" data-placement="top" data-original-title="Light Blue"></span></li><li><span class="bg-color-teal" data-widget-setstyle="jarviswidget-color-teal" rel="tooltip" data-placement="top" data-original-title="Teal"></span></li><li><span class="bg-color-blue" data-widget-setstyle="jarviswidget-color-blue" rel="tooltip" data-placement="top" data-original-title="Ocean Blue"></span></li><li><span class="bg-color-blueDark" data-widget-setstyle="jarviswidget-color-blueDark" rel="tooltip" data-placement="top" data-original-title="Night Sky"></span></li><li><span class="bg-color-darken" data-widget-setstyle="jarviswidget-color-darken" rel="tooltip" data-placement="right" data-original-title="Night"></span></li><li><span class="bg-color-yellow" data-widget-setstyle="jarviswidget-color-yellow" rel="tooltip" data-placement="left" data-original-title="Day Light"></span></li><li><span class="bg-color-orange" data-widget-setstyle="jarviswidget-color-orange" rel="tooltip" data-placement="bottom" data-original-title="Orange"></span></li><li><span class="bg-color-orangeDark" data-widget-setstyle="jarviswidget-color-orangeDark" rel="tooltip" data-placement="bottom" data-original-title="Dark Orange"></span></li><li><span class="bg-color-red" data-widget-setstyle="jarviswidget-color-red" rel="tooltip" data-placement="bottom" data-original-title="Red Rose"></span></li><li><span class="bg-color-redLight" data-widget-setstyle="jarviswidget-color-redLight" rel="tooltip" data-placement="bottom" data-original-title="Light Red"></span></li><li><span class="bg-color-white" data-widget-setstyle="jarviswidget-color-white" rel="tooltip" data-placement="right" data-original-title="Purity"></span></li><li><a href="javascript:void(0);" class="jarviswidget-remove-colors" data-widget-setstyle="" rel="tooltip" data-placement="bottom" data-original-title="Reset widget color to default">Remove</a></li></ul></div>
            <span class="widget-icon"> <i class="fa fa-cloud"></i> </span>
            <h2>Enviar arquivo de produtos </h2>
          <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

          
          <div role="content">


            
            <div class="widget-body">
 

              <form class="dropzone ng-untouched ng-pristine ng-valid dz-clickable" novalidate="" id="productDrop" action="/admin/file_upload">
              	<div class="fallback">
				    <input name="file" type="file" multiple />
				</div>
                <div class="dz-default dz-message">
                	<span>
                		<span class="text-center">
                			<span class="font-lg visible-xs-block visible-sm-block visible-lg-block">
                				<span class="font-lg">
                					<i class="fa fa-caret-right text-danger"></i> Arrasta  o arquivo 
                					<span class="font-xs">para enviar </span>
                				</span>
                				<span>&nbsp;&nbsp;
                					<h4 class="display-inline"> (Ou Click aqui)</h4>
                				</span>
                			</span>
                		</span>
                	</span>
                </div>
                <div class="dz-success-mark"><span>✔</span></div>


              </form>

            </div>
            

          </div>
          

        </div>
        

      </article>
      

    </div>

    

    

  
    

  
     </section>
  </sa-widgets-grid>


  


</div>
</sa-dropzone-showcase>
</div>