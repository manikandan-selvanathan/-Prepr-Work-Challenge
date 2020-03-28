

 function search(searchQuery)
 {
   if(searchQuery)
   {
     var url="/home/search/"+searchQuery;
   }
   else{
     var url="/home/all";
   }
     $.blockUI({ css: { 
       border: 'none', 
       padding: '15px', 
       // width:'200px',
       margin: 'auto',
       backgroundColor: 'white', 
       '-webkit-border-radius': '10px', 
       '-moz-border-radius': '10px',   
   },
   //https://loading.io/asset/355154
       message: '<h1><img style="height:80px;width:80px" src="../app/public/images/loader.svg" /> </h1>'
     });

     $.get(url).done(function( data, textStatus, jqXHR ) {
       var html;
       if(data.length==0)
       {
        html="<b>No labs found for search '"+searchQuery+"'</b>";
       }
       else{
        for(var i=0;i<data.length;i++)
        {
          html+="<div class='col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12' style='opacity: 1;'>"+
          "<div class='product-box item-mb zoom-gallery'>"+
			  "<input id='idOfTheLab' type='hidden' href='javascript:void(0);' onclick='showMap("+data[i]['id']+")' value="+data[i]	['id']+">"+
              "<div class='item-mask-wrapper'>"+
                  "<div class='item-mask secondary-bg-box'><img src='../app/public/images/lab_icon.png' alt='categories' class='img-fluid'>"+
                  "<div class='trending-sign active' data-tips='Featured'> <i class='fa fa-bolt' aria-hidden='true'></i> </div>"+
                      "<div class='title-ctg'>"+data[i]['privacy']+"</div>"+
                       
                      "<div class='symbol-featured'><img src='../app/public/images/lab_icon.png' alt='lab' class='img-fluid'> </div>"+
                  "</div>"+
              "</div>"+
              "<div class='item-content'>"+
                  "<div class='title-ctg'>"+data[i]['privacy']+"</div> "+
                  "<h3 class='long-title'><a href='single-product1.html'>"+data[i]['title']+"</a></h3>"+
                  "<ul class='upload-info'>"+
                  "<li class='date'><i class='fa fa-clock-o' aria-hidden='true'></i> "+data[i]['category']+" </li>"+
                      "<li class='place'><i class='fa fa-map-marker' aria-hidden='true'></i> "+data[i]['city']+","+data[i]['country']+"</li>"+
                      "<li class='tag-ctg'><i class='fa fa-tag' aria-hidden='true'></i> "+data[i]['privacy']+"</li>"+
                      "</ul>"+
                  "<p>"+data[i]['address']+"</p>"+
                  "<a href='/viewmap/"+data[i]['id']+"' class='product-details-btn' >Open Map</a>"+
              "</div>"+
          "</div>"+
        "</div>";
        }

       }
         
       $("#category-view .row").html(html);
       $.unblockUI();
     })
   .fail(function( jqXHR, textStatus, errorThrown ) {
     $.unblockUI();
     alert(textStatus);
   });

 }


		$(document).ready(function(){ 

		  $("#input").keyup(function(event) {
			if (event.keyCode === 13) {
				$(".searchbtn").click();
			}
    	  });
			
			$(".product-details-btn").click(function(){
				console.log("Hello");
				
			});

      $(".searchbtn").click(function()
      {
        var value=$("#input").val();

        if($("#input").hasClass("active-width"))
        {
          if (window.location.href.indexOf("admin") > -1 || window.location.href.indexOf("viewmap") > -1) {
            if(value)
            {
              window.location.href = "/home/"+value;
            }
            return;
          }
  
          search(value);
        }
        
        $(this).toggleClass("bg-green");
        $(".fas").toggleClass("color-white");
        $(".input").focus().toggleClass("active-width").val('');
      });
		}); 

