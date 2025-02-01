<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
{{-- favicon --}}
<link rel="icon" href="{{ asset("/src/assets/images/favicon-32x32.png") }}" />
{{-- meta tags --}}
<title>@yield("title")</title>
<meta name="title" content="Product List With Cart" />
<meta name="description" content="Product List with Cart using Laravel: A simple system to display products with an interactive cart for adding, removing, and updating items using Laravel. 🚀" />
<meta name="keywords" content="HTML5, CSS3, Bootstrap, JavaScript, PHP, LARAVEL, MySQL" />
<meta name="auther" content="The Artist Web" />
{{-- csrf token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- google font link --}}
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
{{-- custom aos link --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
{{-- custom bootstrap min css link --}}
<link rel="stylesheet" href="{{ asset("/src/assets/bootstrap/bootstrap.min.css") }}" />
{{-- custom utility link --}}
<link rel="stylesheet" href="{{ asset("/src/assets/utility/extended-utility-classes.min.css") }}" />
{{-- custom css link --}}
<link rel="stylesheet" href="{{ asset("/src/assets/css/styles.css") }}" />
<link rel="stylesheet" href="{{ asset("/src/assets/css/responsive.css") }}" />