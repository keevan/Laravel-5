<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<style>

			.container {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 90%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
			}

			.content {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
                font-weight: 100;
                font-family: 'Lato';
                color: #B0BEC5;

			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>


            @include('navigation.nav')
            <div class="container">
			<div class="content">
				<div class="title">Learning Laravel</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
            </div>

	</body>
</html>
