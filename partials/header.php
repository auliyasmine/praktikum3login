<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Login - Aulia Yasmin</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    :root {
      --pink-100: #FFC0CB;
      --pink-200: #FFB3C6;
      --pink-300: #FFC2D1;
      --pink-400: #FF8FAB;
      --pink-500: #FB6F92;
      --pink-600: #E5ACB6;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(145deg, var(--pink-100), var(--pink-600));
      background-attachment: fixed;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .text-pink {
      color: var(--pink-500);
    }

    .btn-pink {
      background-color: var(--pink-500);
      color: white;
      border: none;
    }

    .btn-pink:hover {
      background-color: var(--pink-400);
      color: white;
    }

    .card {
      border-radius: 1.5rem;
    }

    .animate {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease-in-out;
    }

    .animate.show {
      opacity: 1;
      transform: translateY(0);
    }

    .list-group-item {
      background-color: transparent;
      border: none;
    }

    footer {
      background-color: rgba(255, 255, 255, 0.3);
      border-top: 1px solid rgba(255, 255, 255, 0.3);
    }
  </style>
</head>
<body>

