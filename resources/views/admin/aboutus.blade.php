@extends('admin.layout')
@section ('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> About Us </h1>
</div>

<!-- Page Content -->

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xtra Blog</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-5">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
            <div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <img src="https://tse4.mm.bing.net/th?id=OIP.rV-rNIvDs2eA9x5SA2gIpgHaE7&pid=Api&P=0" alt="Image" class="img-fluid">
                </div>
            </div>

            <div class="d-sm-flex align-items-left justify-content mb-4">
    <h4><br> &ensp; You can immediately download Xtra Blog Template from TemplateMo website for 100% free of charge.
        Etiam vehicula, tortor ac eleifend tincidunt, diam neque pellentesque ipsum, a geugiat eros mauris eget lorem. Quisque in bibendum elit, in egestas turpis.
        Vestibulum ornare s ollicitudin congue. Aliquam lorem mi, maximus at iaculis ut, viverra vel mauris. Duis congue luctus metus, sodales tincidunt lectus fringilla ut. 
        Nunc tempus at magna sed vestibulum. <br> <br>
        &ensp; Proin et arcu ligula. Praesent quis erat eu est solliditudin tristique ut in arcu. Donec bibendum ex id ligula semper dictum. Proin malesuada luctus auctor. 
        Suspendisse ullamcorper, mi vel molestie ornare, arcu magna euismod ipsum, in malesuada nulla magna ut enim. Morbi lacinia magna sed sapien auctor, vitae luctus nunc cursus. </h4>


</div>
</div>

@endsection('content')

