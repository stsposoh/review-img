<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="slider-wrap">      
        <div class="slider-left">
          <div class="thumb"></div>
        </div>
        <div class="slider-center">
          <div class="thumb"></div>
        </div>
        <div class="slider-right">
          <div class="thumb"></div>
        </div>
      </div>
    </div>
  </div>
  
  <form name="uploader" enctype="multipart/form-data" method="POST">
    <div class="row">
      <div class="col-sm-4">
        <input name="userfile_1" type="file" />
      </div>
      <div class="col-sm-4">
        <input name="userfile_2" type="file" />
      </div>
      <div class="col-sm-4">
        <input name="userfile_3" type="file" />
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-12">
        <button type="submit" name="submit">Загрузить</button>
      </div>
    </div>
  </form>
  
</div>
 

 
  






    <script language="javascript">
        function downimg(){
            html2canvas($('body'), {
                onrendered: function (canvas) {
                    canvas.toBlob(function(blob) {
    		saveAs(blob ,"quote.png");
		}, "image/png");
                

                    //window.location.href = img;                     
                }
            });
        }
      
      
   

      
      
    </script>

    <a href="javascript:void(0)" onClick="downimg()" >SAVE</a>

