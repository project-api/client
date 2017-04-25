<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- The navigation top-bar -->
    <nav class="top-bar" data-topbar>

        <ul class="title-area">
            <li class="name">
                <h1><a href="#">Photo Upload</a></h1>
            </li>
        </ul>

        <section class="top-bar-section">

            <!-- Left Nav Section -->
            <ul class="left">
                <li class="has-dropdown">
                    <a href="#">Categories</a>
                    <ul class="dropdown">
                        <li><a href="#">Category1</a></li>
                        <li><a href="#">Category2</a></li>
                        <li><a href="#">Category3</a></li>
                        <li><a href="#">Category4</a></li>
                    </ul>
                </li>
            </ul>

        </section>

        <div class="clearfix"></div>

    </nav><!-- END Navigation -->

    <!-- Content -->
    <div style="margin-top: 50px;">
        <!-- The content will be here -->
    </div><!-- END Content -->

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
