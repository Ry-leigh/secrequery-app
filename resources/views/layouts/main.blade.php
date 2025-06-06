<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Secrequery')</title>
    <style>
        body {
        margin: 0;
        display: flex;
        font-family: Arial, sans-serif;
        }

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 60px;
  height: 100vh;
  background-color: #1F3463;
  overflow: hidden;
  transition: width 0.3s;
  z-index: 1000;
}
.sidebar:hover {
  width: 200px;
}
.sidebar ul {
  list-style: none;
  padding: 0;
}
.sidebar li a {
  display: flex;
  align-items: center;
  padding: 15px;
  color: white;
  text-decoration: none;
}
.sidebar li a:hover,
.sidebar li a.active {
  background-color: #12A4D5;
}
.material-symbols-outlined {
  font-size: 24px;
  min-width: 30px;
}
.label {
  white-space: nowrap;
  opacity: 0;
  margin-left: 10px;
  transition: opacity 0.2s;
}
.sidebar:hover .label {
  opacity: 1;
}

/* Topbar */
.topbar {
  position: fixed;
  top: 0;
  left: 60px;
  right: 0;
  height: 60px;
  background-color: #ffffff;
  border-bottom: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
  z-index: 999;
  transition: left 0.3s;
}
.sidebar:hover + .topbar {
  left: 200px;
}

/* User Dropdown */
.user-dropdown {
  position: relative;
}
.user-dropdown .dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: white;
  border: 1px solid #ccc;
  min-width: 150px;
  z-index: 1;
}
.user-dropdown:hover .dropdown-content {
  display: block;
}
.user-dropdown .dropdown-content a {
  display: block;
  padding: 10px;
  color: #333;
  text-decoration: none;
}
.user-dropdown .dropdown-content a:hover {
  background-color: #f0f0f0;
}

/* Main Content */
.content {
  margin-top: 60px;
  margin-left: 60px;
  padding: 20px;
  transition: margin-left 0.3s;
}
.sidebar:hover ~ .content {
  margin-left: 200px;
}
.user-dropdown form {
  margin: 0;
}

.logout-button {
  width: 100%;
  background: none;
  border: none;
  padding: 10px;
  text-align: left;
  color: #333;
  font: inherit;
  cursor: pointer;
}

.logout-button:hover {
  background-color: #f0f0f0;
}
    </style>
</head>
<body>
    @include('partials.side-navbar')
    <div class="content">
        @yield('content')
    </div>
</body>
</html>