<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Εισερχόμενα - Εξερχόμενα</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #1f2937;
            color: #fff;
            position: fixed;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        .sidebar h2 {
            margin-bottom: 30px;
            font-size: 18px;
        }
        .sidebar a {
            display: block;
            color: #cbd5e1;
            text-decoration: none;
            margin-bottom: 8px;
            padding: 8px 12px;
            border-radius: 6px;
            transition: background 0.2s ease, color 0.2s ease;
        }
        .sidebar a:hover {
            color: #fff;
            background: rgba(255,255,255,0.08);
        }
        /* ΤΟ ACTIVE ΠΛΑΙΣΙΟ */
        .sidebar a.active {
            background: #374151;
            color: #ffffff;
            font-weight: 500;
        }
        .content {
            margin-left: 250px;
            padding: 30px;
        }
        .card {
            background: #fff;
            padding: 20px;
            border-radius: 6px;
        }
        /* Container για το λογότυπο κάτω αριστερά */
        .sidebar-footer {
            margin-top: auto;
            margin-bottom: 20px; /* ⬅ το ανεβάζει λίγο */
            text-align: center;
            padding-top: 20px;
        }
        .sidebar-footer img {
            width: 80px;
            height: auto;
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Μενού</h2>

    <a href="{{ route('dashboard') }}"
   class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
   Αρχική
</a>

<a href="{{ route('documents.create') }}"
   class="{{ request()->routeIs('documents.create') ? 'active' : '' }}">
   Συμπλήρωση Εισερχομένου / Εξερχομένου
</a>

<hr>

<a href="{{ route('incoming.index') }}"
   class="{{ request()->routeIs('incoming.*') ? 'active' : '' }}">
   Εμφάνιση Εισερχομένων
</a>

<a href="{{ route('outgoing.index') }}"
   class="{{ request()->routeIs('outgoing.*') ? 'active' : '' }}">
   Εμφάνιση Εξερχομένων
</a>

<a href="{{ route('documents.common') }}"
   class="{{ request()->routeIs('documents.common') ? 'active' : '' }}">
   Κοινά Εισερχόμενα - Εξερχόμενα
</a>
<div class="sidebar-footer">
    <img src="{{ asset('images/library-sparta-logo.png') }}"
         alt="Δημόσια Κεντρική Βιβλιοθήκη Σπάρτης">
</div>

</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>
