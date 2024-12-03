<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center">Portfolio Admin</h3>
        <hr>
        <a href="{{ route('experience.index') }}"><i class="fas fa-briefcase"></i> Experience</a>
        <a href="{{ route('education.index') }}"><i class="fas fa-graduation-cap"></i> Education</a>
        <a href="{{ route('project.index') }}"><i class="fas fa-project-diagram"></i> Project</a>
        <a href="{{ route('training.index') }}"><i class="fas fa-chalkboard-teacher"></i> Training</a>
        <a href="{{ route('certification.index') }}"><i class="fas fa-certificate"></i> Certification</a>
        <a href="{{ route('framework.index') }}"><i class="fas fa-code"></i> Framework</a>
        <a href="{{ route('tool.index') }}"><i class="fas fa-tools"></i> Tool</a>
        <a href="{{ route('skill.index') }}"><i class="fas fa-lightbulb"></i> Skill</a>
        <hr>
        <a href="/"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
