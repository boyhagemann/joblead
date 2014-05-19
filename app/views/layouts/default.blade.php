<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
	</head>
	<body>
        
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="{{ URL::route('jobs.index') }}">Jobs</a></li>
                  <li><a href="#">Account</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">My account</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>


	<div class="container">
        
        <section id="content" class="col-lg-9">
            @yield('content')            
        </section>
        
        <section id="sidebar" class="col-lg-3">
            @yield('sidebar')            
        </section>
	</div>

	<div id="panel">
		<div id="panel-navigation"></div>
		<div id="panel-content"></div>
	</div>

	</body>
</html>
