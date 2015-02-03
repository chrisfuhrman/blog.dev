<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chris Fuhrman's Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/main.css">

</head>

<style>
text {
  font: 10px sans-serif;
}
</style>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">Logo</a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="/">Blog</a></li>
                    <li><a href="/resume">Resume</a></li>
                    <li><a href="/portfolio">Projects</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="login.html">Client Login</a></li> -->
                    </ul>
            </div>
        </div>
    </nav> 

    <div id="container-main">
    	<div class="container">

			@if (Session::has('errorMessage'))
			    <div class="alert alert-danger">{{{ Session::get('successMessage') }}}</div>
			@endif

			@if (Session::has('successMessage'))
    			<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
			@endif

    		@yield('content')	

    	</div>
	</div>


<script src="http://d3js.org/d3.v3.min.js"></script>

<script src="/assets/js/flare.js"></script>

<script>

	var diameter = 960,
	    format = d3.format(",d"),
	    color = d3.scale.category20c();

	var bubble = d3.layout.pack()
	    .sort(null)
	    .size([diameter, diameter])
	    .padding(1.5);

	var svg = d3.select("body").append("svg")
	    .attr("width", diameter)
	    .attr("height", diameter)
	    .attr("class", "bubble");

	d3.json("/assets/js/flare.js", function(error, root) {
	  var node = svg.selectAll(".node")
	      .data(bubble.nodes(classes(root))
	      .filter(function(d) { return !d.children; }))
	    .enter().append("g")
	      .attr("class", "node")
	      .attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });

	  node.append("title")
	      .text(function(d) { return d.className + ": " + format(d.value); });

	  node.append("circle")
	      .attr("r", function(d) { return d.r; })
	      .style("fill", function(d) { return color(d.packageName); });

	  node.append("text")
	      .attr("dy", ".3em")
	      .style("text-anchor", "middle")
	      .text(function(d) { return d.className.substring(0, d.r / 3); });
	});

	// Returns a flattened hierarchy containing all leaf nodes under the root.
	function classes(root) {
	  var classes = [];

	  function recurse(name, node) {
	    if (node.children) node.children.forEach(function(child) { recurse(node.name, child); });
	    else classes.push({packageName: name, className: node.name, value: node.size});
	  }

	  recurse(null, root);
	  return {children: classes};
	}

	d3.select(self.frameElement).style("height", diameter + "px");

</script>

	


</body>
</html>