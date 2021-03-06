<html>
    <head>
        <title>GPA Calculator</title>
        <style media='screen' type='text/css'>
            body {
                background-color: #F1F1F1;
                display: block;
                position: relative;
                width: 700px;
                min-width: 700px;
                margin-left: auto;
                margin-right: auto;
            }
            #navigate {
                display: block;
                position: relative;
                width: 350px;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            #calculate {
                display: block;
                position: relative;
                width: 500px;
                min-width: 500px;
                margin-left: auto;
                margin-right: auto;
                background-color: lightYellow;
                text-align: center;
                margin-bottom: 20px;
            }
            #nohighlight {
                background: white;
            }
            #highlight {
                background: crimson;
            }
            #hrs {
                display: block;
                position: relative;
                width: 500px;
                min-width: 500px;
                margin-left: auto;
                margin-right: auto;
                text-align: right;
                right: 65%;
            }
            #gr {
                display: block;
                position: absolute;
                width: 200px;
                min-width: 200px;
                top: 94.5px;
                left: 280px;
                padding:0;
            }
            #gr-2 {
                display: block;
                position: absolute;
                text-align: right;
                right: 18.5%;
                bottom: 0%;
            }
            #submit {
            	display: block;
            	position: absolute;
            	width: 120px;
            	min-width: 120px;
            	top: 54.1px;
            	right: 60px;
            }
        </style>
        <script type='text/javascript'>
            var selected = "";
            var sem1 = "<input type='submit' id='nohighlight' value='Calculate Semester GPA' onclick='calcSem()' />";
            var sem2 = "<input type='submit' id='highlight' value='Calculate Semester GPA'/>";
            var ov1 = "<input type='submit' id='nohighlight' value='Calculate Cumulative GPA' onclick='calcOv()'/>";
            var ov2 = "<input type='submit' id='highlight' value='Calculate Cumulative GPA' />";
            function getValue() {
                var index = document.getElementById('numCurCourses').selectedIndex + 1;
                if(index == 1){
                    document.getElementById("results").innerHTML = "";
                }else{
                	// create select menus for credit hours and expected grades
                    var a = "<span style='position: relative;text-align: center;right: 20%;'>Credit Hours</span><span id='hrs'><br/>";
                    for (var i=1; i<index; i++) {
                        a = a + i + ". <select id='hours"+i+"'><option>1</option><option>2</option><option>3</option><option>4</option></select><br/><br/>";
                    }
                    var w = "<span id='gr'>Expected Grade</span><span id='gr-2'><br/>";
                    for (var i=1; i<index; i++) {
                        w = w + "<select id='grades"+i+"'><option>A+</option><option>A</option><option>A-</option><option>B+</option><option>B</option><option>B-</option><option>C+</option><option>C</option><option>C-</option><option>D+</option><option>D</option><option>D-</option><option>F</option></select><br/><br/>";
                    }
                    var submit="<input type='submit' value='Calculate GPA' onclick='calcSemesterGPA()'>";
                    document.getElementById("results").innerHTML = a + "</span>" + w + "</span><span id='submit'>" + submit + "<br/><br/></span>";
                }
            }
            function calcSem() {
                if (selected !== "s") {
                    if (selected == "o") {
                        selected = "s";
                        document.getElementById("calculate").innerHTML = "";
                        document.getElementById("sem").innerHTML = sem2;
                        document.getElementById("ov").innerHTML = ov1;
                    }else {
                        selected = "s";
                        document.getElementById("sem").innerHTML = sem2;
                    }
                }
                document.getElementById("calculate").innerHTML = "<br/>How many courses are you taking?<br/><br/><select id='numCurCourses' onchange='getValue()'></select><br/><br/><span id='results'></span>";
                document.getElementById("calculate").style.border = "1px solid black";
                var k = "<option value='Select'>0</option>";
                for (var i=1; i<18; i++) {
                    k = k + "<option value=Select" + i + ">" + i + "</option>";
                }
                document.getElementById("numCurCourses").innerHTML = k;
            }
            function calcSemesterGPA() {
            	var number = document.getElementById('numCurCourses').selectedIndex + 1;
                var arr = "";
                var car = "";
                var hrs = "";
                var grad = "";
                var points = "";
                for (var i=1; i<number; i++) {
                	hrs = "hours" + i;
                	grad = "grades" + i;
                	if(document.getElementById(grad).value=="A+"){
                		points = 4.0;
                	}
                	if(document.getElementById(grad).value=="A"){
                		points = 4.0;
                	}
                	if(document.getElementById(grad).value=="A-"){
                		points = 3.7;
                	}
                	if(document.getElementById(grad).value=="B+"){
                		points = 3.3;
                	}
                	if(document.getElementById(grad).value == "B"){
                		points = 3.0;
                	}
                	if(document.getElementById(grad).value == "B-"){
                		points = 2.7;
                	}
                	if(document.getElementById(grad).value == "C+"){
                		points = 2.3;
                	}
                	if(document.getElementById(grad).value == "C"){
                		points = 2.0;
                	}
                	if(document.getElementById(grad).value == "C-"){
                		points = 1.7;
                	}
                	if(document.getElementById(grad).value == "D+"){
                		points = 1.3;
                	}
                	if(document.getElementById(grad).value == "D"){
                		points = 1.0;
                	}
                	if(document.getElementById(grad).value == "D-"){
                		points = 0.7;
                	}
                	if(document.getElementById(grad).value == "F"){
                		points = 0.0;
                	}
					arr = Number(arr) + Number(document.getElementById(hrs).value*points); // total semester points
					car = Number(car) + Number(document.getElementById(hrs).value); // total semester hours
                }
                var gpa = (arr/car).toString();
                if(gpa.replace(".","").length>4){
                	gpa = Number(gpa);
                	gpa = Math.round(gpa*-1000)/-1000;
                	gpa = gpa.toString();
                	gpa = gpa.substring(0,5);
                }else{
                	if(gpa == "4"){
                		gpa = "4.0";
                	}
                	if(gpa == "3"){
                		gpa = "3.0";
                	}
                	if(gpa == "2"){
                		gpa = "2.0";
                	}
                	if(gpa == "1"){
                		gpa = "1.0";
                	}
                	if(gpa == "0"){
                		gpa = "0.0";
                	}
                }
                alert("Your GPA: " + gpa);
            }
            function calcOv() {
                if (selected !== "o") {
                    if (selected == "s") {
                        selected = "o";
                        document.getElementById("calculate").innerHTML = "";
                        document.getElementById("ov").innerHTML = ov2;
                        document.getElementById("sem").innerHTML = sem1;
                    }else {
                        selected = "o";
                        document.getElementById("ov").innerHTML = ov2;
                    }
                    document.getElementById("calculate").innerHTML = "Feature coming soon.";
                    document.getElementById("calculate").style.border = "1px solid black";
                }
            }
        </script>
    </head>
    <body>
        <noscript><span id='navigate'><br/>Please enable JavaScript.</span></noscript>
        <script type='text/javascript'>
            document.write("<br/><span id='navigate'><span id='sem'>" + sem1 + "</span><span id='ov'>" + ov1 + "</span></span><br/><div id='calculate'></div>");
        </script>
    </body>
</html> 
