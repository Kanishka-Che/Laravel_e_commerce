<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
        <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>

<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <input type ="submit" value="Logout" >
                        
                        
</form>

</body>  
</html>  