;(function() {
  'use-strict';
  
  
  //загрузить картинки на сервер
  $("form[name='uploader']").submit(function(e) {
    
    var formData = new FormData($(this)[0]);

    $.ajax({
      url: 'file.php',
      type: "POST",
      data: formData,
      async: false,
      success: function (data) {

      },
      error: function(msg) {
          alert('Ошибка!');
      },
      cache: false,
      contentType: false,
      processData: false
    })
    e.preventDefault();
    
    
    var nodeName1 = this[0].value,
        nodeName2 = this[1].value,
        nodeName3 = this[2].value;
    
    //добавить картинки фоном тегу
    addImage('.slider-left .thumb', nodeName1);
    addImage('.slider-center .thumb', nodeName2);
    addImage('.slider-right .thumb', nodeName3);

  });
  
 

  
  function addImage(node, nodeName) {
    var nodeName = nodeName.slice(12);
    $(node).css({'background':'url(uploads/' + nodeName +') no-repeat','backgroundSize':'100% auto' });
  }
  

  //добавить возможность двигать картинки по вертикали
  moveSlide('.slider-center');
  moveSlide('.slider-left');
  moveSlide('.slider-right');
  
  function moveSlide(elem) {
    var sliderElem = document.querySelector(elem);
    var thumbElem = sliderElem.children[0];

    thumbElem.onmousedown = function(e) {
      var thumbCoords = getCoords(thumbElem);
      var shiftY = e.pageY - thumbCoords.top;

      var sliderCoords = getCoords(sliderElem);

      document.onmousemove = function(e) {
        //  вычесть координату родителя, т.к. position: relative
        var newTop = e.pageY - shiftY - sliderCoords.top;
        
        thumbElem.style.top = newTop + 'px';
      }

      document.onmouseup = function() {
        document.onmousemove = document.onmouseup = null;
      };

      return false;
    };

    thumbElem.ondragstart = function() {
      return false;
    };

    function getCoords(elem) { // кроме IE8-
      var box = elem.getBoundingClientRect();

      return {
        top: box.top + pageYOffset,
        left: box.left + pageXOffset
      };

    } 
  }
  
  
  
  
 
  
  
  
  
  
  
  
 
  /*
  
  //SVG Fallback
  if(!Modernizr.svg) {
    $("img[src*='svg']").attr("src", function() {
      return $(this).attr("src").replace(".svg", ".png");
    });
  };


  //Запрет перетаскивать картинки
  $("img, a").on("dragstart", function(event) {
    event.preventDefault();
  });*/

})();