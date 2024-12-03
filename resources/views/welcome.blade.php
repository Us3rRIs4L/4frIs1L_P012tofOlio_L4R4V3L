@extends('layout')

@section('content')
<div style="background: linear-gradient(135deg, rgba(13, 110, 253, 0.3), rgba(255, 255, 241, .5)); padding: 50px 0;">
    <!-- About Section -->
    <div class="container my-5" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8), rgba(13, 110, 253, 0.7)); padding: 50px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);">
        <section id="about" class="py-5 text-center">
            <h2 class="section-title">About Me</h2>
            <img src="{{ asset('images/profile.jpg') }}" alt="profile" class="img-fluid rounded-circle mb-4" style="max-width: 20vh; border: .5vh solid #FFD700;">
            <p class="section-text mt-4">
                Hello! I'm Muhammad Afrisal Yusril Arzaqi, a student specializing in software development, IoT, and AI. My passion is creating innovative and impactful projects.
            </p>
            <a href="more_about" class="btn btn-outline-light btn-custom mt-4">More About Me</a>
        </section>
    </div>

    <!-- Project Section -->
    <div class="container my-5" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8), rgba(13, 110, 253, 0.7)); padding: 50px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);">
        <section id="projects" class="py-5">
            <h2 class="section-title">My Projects</h2>
            <div class="row g-4">
                @if($projects->isNotEmpty())
                    @foreach($projects as $project)
                        <div class="col-md-4">
                            <div class="card project-card">
                                <img src="{{ asset('images/' . $project->id . '/' . $project->image) }}" alt="{{ $project->title }}" class="card-img-top" style="object-fit: cover; height: 200px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $project->title }}</h5>
                                    <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                                    <!-- View Details Button -->
                                    <button 
                                        type="button" 
                                        class="btn btn-primary btn-custom" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#projectModal{{ $project->id }}">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="projectModal{{ $project->id }}" tabindex="-1" aria-labelledby="projectModalLabel{{ $project->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="projectModalLabel{{ $project->id }}">{{ $project->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('images/' . $project->id . '/' . $project->image) }}" alt="{{ $project->title }}" class="img-fluid mb-4">
                                        <p>{{ $project->description }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-light">No projects available at the moment.</p>
                @endif
            </div>
        </section>
    </div>
</div>
@endsection

<style>
    /* Global Styling */
    body {
        font-family: 'Poppins', sans-serif;
        background: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    /* Section Titles */
    .section-title {
        font-size: 2.8rem;
        font-weight: bold;
        text-transform: uppercase;
        color: #FFD700;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
        margin-bottom: 40px;
        animation: fadeIn 1s ease-in-out;
    }

    /* Section Text */
    .section-text {
        font-size: 1.2rem;
        line-height: 1.8;
        color: #E3F2FD;
        animation: slideUp 1s ease-in-out;
    }

    /* Skill Bars */
    .skill-bar h5 {
        font-size: 1.2rem;
        font-weight: bold;
        color: #FFD700;
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
    }

    .progress {
        background: #dfe6e9;
        border-radius: 5px;
        overflow: hidden;
        height: 20px;
        margin-bottom: 20px;
    }

    .progress-bar {
        transition: width 1s ease;
    }

    /* Project Cards */
    .project-card {
        transition: transform 0.3s ease;
    }

    .project-card:hover {
        transform: scale(1.05);
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Custom Button */
    .btn-custom {
        font-size: 1rem;
        padding: 10px 20px;
        border-radius: 25px;
        border: 2px solid #FFD700;
        color: #FFD700;
        transition: all 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #FFD700;
        color: #0a58ca;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .section-title {
            font-size: 2.5rem;
        }

        .card-img-top {
            height: 150px;
        }
    }

    .modal-content {
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .modal-header {
        background-color: #0d6efd;
        color: #fff;
    }

    .modal-body img {
        border-radius: 10px;
        max-height: 300px;
        object-fit: cover;
    }
</style>
