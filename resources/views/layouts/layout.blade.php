<html>

<head>
  <title>掲示板</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style type="text/css">
  form {
    /* フォームをページの中央に置く */
    margin: 0 auto;
    width: 80%;
    text-align:center;
    /* フォームの範囲がわかるようにする */
    //padding: 1em;
    //border: 1px solid #CCC;
    //border-radius: 1em;
  }
  form p {
    text-align:left;
  }
  form input {
    width: 100%;
    text-align:left;
  }
  form textarea {
    width: 100%;
    text-align:left;
  }
  input {
    margin: 0 auto;
    width: 80%;
    text-align:center;
  }
  textarea {
    margin: 0 auto;
    width: 80%;
  }
  table {
    margin: 0 auto;
    border-collapse:collapse;
    margin-bottom:10px;
    width: 80%
  }
  table tr {
    white-space: nowrap;
    height: 30px;
  }
  </style>
</head>

<body>
<h3 align="center"> 掲示板 </h3>
@yield('content')
</body>
