<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Single Page Forum</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
  <div id="app">
    <v-app>
      <app-home></app-home>
    </v-app>
  </div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" ></script>
  
</body>
</html>