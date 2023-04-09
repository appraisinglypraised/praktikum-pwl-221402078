@extends('admin.layout')

@section ('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard  </h1>
</div>

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
            <br>      
            <img src="https://tse1.mm.bing.net/th?id=OIP.YMehNZWcSECGnf-sWBjXzgHaEc&pid=Api&P=0" alt="Image" class="div">
            <br>
            <div class="d-sm-flex align-items-left justify-content mb-4"></div>
            <h4> Today, most countries are placing unprecedented pressure on water resources. The global population is growing fast, and estimates show that with current practices, the world will face a 40% shortfall between forecast demand and available supply of water by 2030. Furthermore, chronic water scarcity, hydrological uncertainty, and extreme weather events (floods and droughts) are perceived as some of the biggest threats to global prosperity and stability. Acknowledgment of the role that water scarcity and drought are playing in aggravating fragility and conflict is increasing.
                <br><br>
Feeding 10 billion people by 2050 will require a 50% increase in agricultural production, (which consumes 70% of the resource today), and a 15% increase in water withdrawals. Besides this increasing demand, the resource is already scarce in many parts of the world. Estimates indicate that over 40% of the world population live in water scarce areas, and approximately ¼ of world’s GDP is exposed to this challenge. By 2040, an estimated one in four children will live in areas with extreme water shortages. Water security is a major – and often growing –challenge for many countries today.
<br><br>
Climate change will worsen the situation by altering hydrological cycles, making water more unpredictable and increasing the frequency and intensity of floods and droughts. The roughly 1 billion people living in monsoonal basins and the 500 million people living in deltas are especially vulnerable.  Flood damages are estimated around $120 billion per year (only from property damage), and droughts pose, among others, constraints to the rural poor, highly dependent on rainfall variability for subsistence. </h4>
</div>
@endsection('content')