<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
<style type="text/css">
	h3.center-text {
	    text-align: center;
	}
</style>
<div class="container">
	<h3 class="center-text">Generate a PDF using TCPDF in laravel - Learn Infinity</h3>

	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<br/> <br/> <br/> <br/>
			<table cellspacing="3" cellpadding="5" width="100%">
				<tr>
					<td width="25%">
						<div class="form-group">
							<a href="{{ route('SamplePDF') }}" class="btn btn-primary">Generate Sample PDF</a>
						</div>
					</td>

					<td width="25%">
						<div class="form-group">
							<a href="{{ route('SavePDF') }}" class="btn btn-primary">Save Sample PDF</a>
						</div>
					</td>

					<td width="25%">
						<div class="form-group">
							<a href="{{ route('DownloadPDF') }}" class="btn btn-primary">Download Sample PDF</a>
						</div>
					</td>

					<td width="25%">
						<div class="form-group">
							<a href="{{ route('HtmlToPDF') }}" class="btn btn-primary">Html To PDF</a>
						</div>
					</td>

				</tr>
			</table>
			

		</div>

	</div>

</div>

    </body>
</html>