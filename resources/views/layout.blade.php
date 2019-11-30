<!DOCTYPE html>
<html>
<head>
	<title>Quote Poster</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">
	.card {
	  position: relative;
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-orient: vertical;
	  -webkit-box-direction: normal;
	  -ms-flex-direction: column;
	  flex-direction: column;
	  min-width: 0;
	  word-wrap: break-word;
	  background-color: #fff;
	  background-clip: border-box;
	  border: 1px solid rgba(0, 0, 0, 0.125);
	  border-radius: 0.25rem;
	}

	.card > hr {
	  margin-right: 0;
	  margin-left: 0;
	}

	.card > .list-group:first-child .list-group-item:first-child {
	  border-top-left-radius: 0.25rem;
	  border-top-right-radius: 0.25rem;
	}

	.card > .list-group:last-child .list-group-item:last-child {
	  border-bottom-right-radius: 0.25rem;
	  border-bottom-left-radius: 0.25rem;
	}

	.card-body {
	  -webkit-box-flex: 1;
	  -ms-flex: 1 1 auto;
	  flex: 1 1 auto;
	  padding: 1.25rem;
	}

	.card-title {
	  margin-bottom: 0.75rem;
	}

	.card-subtitle {
	  margin-top: -0.375rem;
	  margin-bottom: 0;
	}

	.card-text:last-child {
	  margin-bottom: 0;
	}

	.card-link:hover {
	  text-decoration: none;
	}

	.card-link + .card-link {
	  margin-left: 1.25rem;
	}

	.card-header {
	  padding: 0.75rem 1.25rem;
	  margin-bottom: 0;
	  /*background-color: #428bca;*/
	  background-color: rgba(0, 0, 0, 0.03);
	  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
	}

	.card-header:first-child {
	  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
	}

	.card-header + .list-group .list-group-item:first-child {
	  border-top: 0;
	}

	.card-footer {
	  padding: 0.75rem 1.25rem;
	  background-color: rgba(0, 0, 0, 0.03);
	  border-top: 1px solid rgba(0, 0, 0, 0.125);
	}

	.card-footer:last-child {
	  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
	}

	.card-header-tabs {
	  margin-right: -0.625rem;
	  margin-bottom: -0.75rem;
	  margin-left: -0.625rem;
	  border-bottom: 0;
	}

	.card-header-pills {
	  margin-right: -0.625rem;
	  margin-left: -0.625rem;
	}

	.card-img-overlay {
	  position: absolute;
	  top: 0;
	  right: 0;
	  bottom: 0;
	  left: 0;
	  padding: 1.25rem;
	}

	.card-img {
	  width: 100%;
	  border-radius: calc(0.25rem - 1px);
	}

	.card-img-top {
	  width: 100%;
	  border-top-left-radius: calc(0.25rem - 1px);
	  border-top-right-radius: calc(0.25rem - 1px);
	}

	.card-img-bottom {
	  width: 100%;
	  border-bottom-right-radius: calc(0.25rem - 1px);
	  border-bottom-left-radius: calc(0.25rem - 1px);
	}

	.card-deck {
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-orient: vertical;
	  -webkit-box-direction: normal;
	  -ms-flex-direction: column;
	  flex-direction: column;
	}

	.card-deck .card {
	  margin-bottom: 15px;
	}

	@media (min-width: 576px) {
	  .card-deck {
	    -webkit-box-orient: horizontal;
	    -webkit-box-direction: normal;
	    -ms-flex-flow: row wrap;
	    flex-flow: row wrap;
	    margin-right: -15px;
	    margin-left: -15px;
	  }
	  .card-deck .card {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-flex: 1;
	    -ms-flex: 1 0 0%;
	    flex: 1 0 0%;
	    -webkit-box-orient: vertical;
	    -webkit-box-direction: normal;
	    -ms-flex-direction: column;
	    flex-direction: column;
	    margin-right: 15px;
	    margin-bottom: 0;
	    margin-left: 15px;
	  }
	}

	.card-group {
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-orient: vertical;
	  -webkit-box-direction: normal;
	  -ms-flex-direction: column;
	  flex-direction: column;
	}

	.card-group > .card {
	  margin-bottom: 15px;
	}

	@media (min-width: 576px) {
	  .card-group {
	    -webkit-box-orient: horizontal;
	    -webkit-box-direction: normal;
	    -ms-flex-flow: row wrap;
	    flex-flow: row wrap;
	  }
	  .card-group > .card {
	    -webkit-box-flex: 1;
	    -ms-flex: 1 0 0%;
	    flex: 1 0 0%;
	    margin-bottom: 0;
	  }
	  .card-group > .card + .card {
	    margin-left: 0;
	    border-left: 0;
	  }
	  .card-group > .card:first-child {
	    border-top-right-radius: 0;
	    border-bottom-right-radius: 0;
	  }
	  .card-group > .card:first-child .card-img-top,
	  .card-group > .card:first-child .card-header {
	    border-top-right-radius: 0;
	  }
	  .card-group > .card:first-child .card-img-bottom,
	  .card-group > .card:first-child .card-footer {
	    border-bottom-right-radius: 0;
	  }
	  .card-group > .card:last-child {
	    border-top-left-radius: 0;
	    border-bottom-left-radius: 0;
	  }
	  .card-group > .card:last-child .card-img-top,
	  .card-group > .card:last-child .card-header {
	    border-top-left-radius: 0;
	  }
	  .card-group > .card:last-child .card-img-bottom,
	  .card-group > .card:last-child .card-footer {
	    border-bottom-left-radius: 0;
	  }
	  .card-group > .card:only-child {
	    border-radius: 0.25rem;
	  }
	  .card-group > .card:only-child .card-img-top,
	  .card-group > .card:only-child .card-header {
	    border-top-left-radius: 0.25rem;
	    border-top-right-radius: 0.25rem;
	  }
	  .card-group > .card:only-child .card-img-bottom,
	  .card-group > .card:only-child .card-footer {
	    border-bottom-right-radius: 0.25rem;
	    border-bottom-left-radius: 0.25rem;
	  }
	  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
	    border-radius: 0;
	  }
	  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
	  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
	  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
	  .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
	    border-radius: 0;
	  }
	}

	.card-columns .card {
	  margin-bottom: 0.75rem;
	}

	</style>
</head>
<body>
	<div class="container">

		<div class="content">
			@yield('content')
		</div>
	</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</body>
</html>