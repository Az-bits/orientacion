(function($) {

	"use strict";

	
	try 
	{	

		var Colors = [bgPrimary, bgInfo, bgSuccess, bgWarning, bgDanger];






		



		/*
		C3 Chart Pie
        -------------------------------------------------------*/
        var c3chart_pie = c3.generate({
        	bindto: "#c3chart_pie",
        	color: {
              pattern: Colors,
            },
            padding: {
            left: 30,
              right: 15,
              top: 0,
              bottom: 0,
           	},
        	data: {
          	columns: [
//            	
            	["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
            	["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
            	["setosa", 30],
//            	["versicolor", 40],
//            	["virginica", 50],
          	],
          	type : 'pie',
          		onmouseover: function (d, i) { console.log("onmouseover", d, i, this); },
         	 	onmouseout: function (d, i) { console.log("onmouseout", d, i, this); },
          		onclick: function (d, i) { console.log("onclick", d, i, this); },
        	},
        	axis: {
          		x: {
            		label: 'Sepal.Width'
          		},
          		y: {
            		label: 'Petal.Width'
          		}
        	}
      });

      setTimeout(function () {
        c3chart_pie.load({
          columns: [
            ["setosa", 130],
          ]
        });
      }, 1000);

      setTimeout(function () {
        c3chart_pie.unload({
          ids: 'virginica'
        });
      }, 2000);







		/*
		C3 Chart Bar
        -------------------------------------------------------*/
        var c3chart_bar = c3.generate({
        	bindto: '#c3chart_bar',
        	color: {
              pattern: Colors,
            },
            padding: {
            left: 30,
              right: 15,
              top: 0,
              bottom: 0,
           },
	        data: {
	          columns: [
	            ['data1', 1030, 1200, 1100, 1400, 1150, 1250],
	            ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
	          ],
	          type: 'bar',
	          onclick: function (d, element) { console.log("onclick", d, element); },
	          onmouseover: function (d) { console.log("onmouseover", d); },
	          onmouseout: function (d) { console.log("onmouseout", d); }
	        },
	        axis: {
	          x: {
	            type: 'categorized'
	          }
	        },
	        bar: {
	          width: {
	            ratio: 0.3,
			//  max: 30
	          },
	        }
	     });

        setTimeout(function () {
            c3chart_bar.load({
                columns: [
                    ['data3', 130, 150, 200, 300, 200, 100]
                ]
            });
        }, 1000);



	} 
	catch(error) 
	{
		alert("Error occured: "+ error.message);
	}
	   
	
})(jQuery);